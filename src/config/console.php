<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 06.11.2017
 */
$config = [
    'components'    =>
    [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'assetManager' =>
        [
            'linkAssets'        => true,
        ],

        'cmsAgent' => [
            'onHitsEnabled'     => false
        ],
    ],
];


return $config;
