<?php


namespace Hurah\ActionAbstraction\Types;

use Hurah\ActionAbstraction\Contracts\ActionInterface;
use Hurah\ActionAbstraction\Exception\ActionNotFoundException;
use Hurah\Types\Type\PhpNamespace;

/**
 * Class ActionType
 * This class represents represents the definition of an AbstractAction, so in essence the fully qualified php class
 * name but with some embedded reflection utils / meta info etc.
 *
 * @package Hurah\ActionAbstraction\Types
 */
class ActionType extends PhpNamespace
{
    public function __construct($sValue = null)
    {
        parent::__construct($sValue);
    }

    public function getConstructed(...$allArguments):ActionInterface
    {
        $oConstructed = parent::getConstructed($allArguments);
        if(!$oConstructed instanceof ActionInterface)
        {
            throw new ActionNotFoundException("All actions are required to implement ActionInterface");
        }
        return $oConstructed;
    }
}