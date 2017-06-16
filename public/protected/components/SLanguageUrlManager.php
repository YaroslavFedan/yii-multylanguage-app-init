<?php

class SLanguageUrlManager extends CUrlManager
{
    public function createUrl($route, $params=array(), $ampersand='&')
    {
        $url = parent::createUrl($route, $params, $ampersand);
        return SMultilangHelper::addLangToUrl($url);
    }
}