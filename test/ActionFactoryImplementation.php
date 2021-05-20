<?php


class ActionFactoryImplementation extends \Hurah\ActionAbstraction\ActionFactory
{
    public function email():ZendMailerAction{

        return new ZendMailerAction();
    }

}