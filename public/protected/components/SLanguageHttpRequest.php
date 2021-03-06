<?php

class SLanguageHttpRequest extends CHttpRequest
{
    private $_requestUri;

    public function getRequestUri()
    {
        if ($this->_requestUri === null)
            $this->_requestUri = SMultilangHelper::processLangInUrl(parent::getRequestUri());

        return $this->_requestUri;
    }

    public function getOriginalUrl()
    {
        return $this->getOriginalRequestUri();
    }

    public function getOriginalRequestUri()
    {
        return SMultilangHelper::addLangToUrl($this->getRequestUri());
    }
}