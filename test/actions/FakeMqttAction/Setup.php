<?php


namespace Hurah\Test\ActionAbstraction\FakeMqttAction;

use Hurah\ActionAbstraction\Contracts\ActionDataInterface;
use Hurah\ActionAbstraction\Contracts\ActionSetupInterface;
use Hurah\Types\Type\DnsName;
use Hurah\Types\Type\LiteralInteger;
use Hurah\Types\Type\PlainText;

class Setup implements ActionSetupInterface
{

    private DnsName $server;
    private PlainText $user;
    private PlainText $pass;
    private LiteralInteger $port;

    public function __construct(DnsName $server, PlainText $user, PlainText $pass, LiteralInteger $port)
    {
        $this->server = $server;
        $this->user = $user;
        $this->pass = $pass;
        $this->port = $port;
    }

    /**
     * @return DnsName
     */
    public function getServer(): DnsName
    {
        return $this->server;
    }

    /**
     * @return PlainText
     */
    public function getUser(): PlainText
    {
        return $this->user;
    }

    /**
     * @return PlainText
     */
    public function getPass(): PlainText
    {
        return $this->pass;
    }

    /**
     * @return LiteralInteger
     */
    public function getPort(): LiteralInteger
    {
        return $this->port;
    }


}