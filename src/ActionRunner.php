<?php


namespace Hurah\ActionAbstraction;

use Hurah\ActionAbstraction\Contracts\ActionDataInterface;

abstract class ActionRunner
{
    private ActionDataInterface $inputData;
    private ActionCollection $oActionsToRun;

    public function setType(ActionDataInterface $oInputData)
    {
        $this->inputData = $oInputData;
    }
    public function getType():ActionDataInterface
    {
        return $this->inputData;
    }

    public function __construct(ActionCollection $oActionsToRun, ActionDataInterface $inputData)
    {
        $this->inputData = new $inputData;
        $this->oActionsToRun = $oActionsToRun;
    }

    public function run()
    {
        foreach ($this->oActionsToRun as $oActionType)
        {
            $oAction = $oActionType->getConstructed($this->inputData);
            $oAction->setUp();
            $oAction->trigger();
            $oAction->tearDown();
        }
    }

}