<?php


namespace Hurah\ActionAbstraction;

use Hurah\ActionAbstraction\Types\ActionType;
use Hurah\Types\Type\AbstractCollectionDataType;


/**
 * ActionCollection represents multiple collections in different scenario's, can be a sequence of collections that is
 * to be called or in an editor to drag & drop actions in a specific order.
 *
 * @package Hurah\ActionAbstraction
 */
class ActionCollection extends AbstractCollectionDataType
{

    public function add(ActionType $actionType):void
    {
        $this->array[] = $actionType;
    }
    public function current():ActionType
    {
        return $this->array[$this->position];
    }
    public function get(ActionType $class)
    {

    }
}