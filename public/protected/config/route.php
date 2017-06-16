<?php

return array(
    'class'=>'SLanguageUrlManager',
    'urlFormat'=>'path',
    'showScriptName'=>false,
    'rules'=>array(

        '/' => 'site/index',
        '<action:(contact|login|logout)>' => 'site/<action>',
        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

//        '<language:(ru|en|ua)>' => 'site/index',
//        '/' => 'site/index',
//
//        '<language:(ru|en|ua)>/<action:(contact|login|logout)>' => 'site/<action>',
//        '<action:(contact|login|logout)>' => 'site/<action>',
//
//        '<language:(ru|en|ua)>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
//        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
//
//        '<language:(ru|en|ua)>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//
//        '<language:(ru|en|ua)>/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
//        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',


    ),
);