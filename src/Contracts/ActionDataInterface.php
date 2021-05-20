<?php


namespace Hurah\ActionAbstraction\Contracts;

/**
 * ActionDataInterface represents the data that is unique to this single action call. Contains things like an email
 * address or an order number etc. The interface will be filled with an array as the input data usually originates from
 * a http request.
 *
 * @package Hurah\ActionAbstraction\Contracts
 */
interface ActionDataInterface
{
    public function fromArray(array $aParams);
}