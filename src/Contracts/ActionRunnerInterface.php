<?php


namespace Hurah\ActionAbstraction\Contracts;

use Hurah\ActionAbstraction\ActionCollection;
use Hurah\ActionAbstraction\Exception\ActionExecutionException;

/**
 * ActionRunnerInterface runs sequences of actions in a linear fashion, using the output of the first action as the
 * input for the second action and so on.
 *
 * @package Hurah\ActionAbstraction\Contracts
 */
interface ActionRunnerInterface
{
    public function __construct(ActionCollection $oActionCollection, ActionDataInterface $oActionData);

    /**
     * @throws ActionExecutionException
     */
    public function run():void;
}