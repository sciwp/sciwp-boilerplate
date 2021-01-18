<?php if ( ! defined( 'ABSPATH' ) ) exit; 

return array (
    'rebuild' =>  true,
    'folders' => [  
        'main' => 'app',
        'modules' => 'modules',
    ],
    'activation' => [
        'php' => [
			'enabled' => true,
			'version' => '7.2',
			'message' => __('The %1$s plugin requires PHP version %2$s or greater.', 'text-domain'),
		],
        'wordpress' => '5.0',
    ],
    'autoloader' => [
        'cache' => true,
        'reflexive' => true,
    ],
	'services' => [

	],
	'providers' => [

    ],
);