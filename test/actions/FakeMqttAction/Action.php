<?php

namespace Hurah\Test\ActionAbstraction\FakeMqttAction;


use Hurah\ActionAbstraction\Action\AbstractAction;
use Hurah\ActionAbstraction\Contracts\ActionInterface;
use Hurah\ActionAbstraction\Contracts\ActionDataInterface;

class Action extends AbstractAction implements ActionInterface
{

    public function setUp():void
    {
        $oClient = new Client();
    }


    public function trigger(ActionDataInterface $oActionData)
    {
        // TODO: Implement trigger() method.
    }
}