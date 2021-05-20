<?php


namespace Hurah\ActionAbstraction\Contracts;


/**
 * ActionSetupInterface provides the parameters required for an action to be able to do something. For example, an
 * e-mail action would need to know to what server the email is supposed to be send. This interface should contain
 * the connection parameters but not the content of the actual email message.
 *
 * @package Hurah\ActionAbstraction
 */
interface ActionSetupInterface
{


}