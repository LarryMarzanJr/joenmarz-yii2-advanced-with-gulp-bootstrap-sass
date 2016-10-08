<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'assetManager' => [
        	'bundles' => [
        		'yii\bootstrap\BootstrapAsset' => false,	// disable bootstrap asset bundle
        	],
        ],
    ],
];
