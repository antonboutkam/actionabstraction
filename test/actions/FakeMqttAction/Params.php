<?php


namespace Hurah\Test\ActionAbstraction\FakeMqttAction;

use Hurah\ActionAbstraction\Contracts\ActionDataInterface;
use Hurah\Types\Type\AbstractDataType;
use Hurah\Types\Type\LiteralInteger;
use Hurah\Types\Type\PlainText;

class Params implements ActionDataInterface
{

    private LiteralInteger $qos;
    private PlainText $topic;
    private PlainText $message;

    public function fromArray(array $aParams):void
    {
        $this->qos = new LiteralInteger($aParams['qos']);
        $this->topic = new PlainText($aParams['topic']);
        $this->message = new PlainText($aParams['message']);
    }

    /**
     * @return LiteralInteger
     */
    public function getQos(): LiteralInteger
    {
        return $this->qos;
    }

    /**
     * @return PlainText
     */
    public function getTopic(): PlainText
    {
        return $this->topic;
    }

    /**
     * @return PlainText
     */
    public function getMessage(): PlainText
    {
        return $this->message;
    }


}