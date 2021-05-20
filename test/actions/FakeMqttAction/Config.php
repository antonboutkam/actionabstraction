<?php

namespace Hurah\Test\ActionAbstraction\FakeMqttAction;


use Hurah\ActionAbstraction\Action\AbstractActionConfig;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormInterface;

class Config extends AbstractActionConfig
{


    protected function getForm():FormInterface
    {
        $oFormBuilder =  $this->getFormBuilder();
        $oFormBuilder->add('topic_template', TextType::class);
        $oFormBuilder->add('content_template', TextareaType::class);
        return $oFormBuilder->getForm();
    }


}