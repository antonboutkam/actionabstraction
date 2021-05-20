<?php


namespace Hurah\ActionAbstraction\Contracts;



use Psr\SimpleCache\CacheInterface;

/**
 * Interface ActionRegistryInterface
 * When an action has a configuration, so settings that are static for a specific action implementation, they require
 * some registry or place to store key => value sets. This registry just requires the user to implement psr-16
 * for this cause. https://www.php-fig.org/psr/psr-16/
 *
 * @package Hurah\ActionAbstraction\Contracts
 */
interface ActionRegistryInterface extends CacheInterface
{

}