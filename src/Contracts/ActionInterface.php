<?php
namespace Hurah\ActionAbstraction\Contracts;

/**
 * ActionInterface defines a generic way to trigger some kind of action.
 *
 * @package Hurah\ActionAbstraction
 * @external
 */
interface ActionInterface
{
    public function __construct(ActionSetupInterface $oActionSetup, ActionConfigInterface $oActionConfig);
    public function setUp():void;
    public function trigger(ActionDataInterface $oActionData);
    public function tearDown():void;

}
