<?php

class SLanguageSwitcherWidget extends CWidget
{
    public function run()
    {
        $currentUrl = ltrim(Yii::app()->request->url, '/');

        $links = array();
        foreach (SMultilangHelper::suffixList() as $suffix => $name){

            $url = '/' . ($suffix ? trim($suffix, '_') . '/' : '') . $currentUrl;

            ///@todo set class to current language - default version
            $class = ($suffix == SMultilangHelper::getLandToUrl()) ? 'active': '';

            $links[] = CHtml::tag('li', array('class'=>$class), CHtml::link($name, $url));
        }
        echo CHtml::tag('ul', array('class'=>'language'), implode("\n", $links));
    }
}