<?php
return array(
    'service_manager' => array(
	   'invokables' => array(
        ),
        'factories' => array(
	   	   'Smtest\Service\MyService' => 'Smtest\Service\MyServiceFactory',
           'useless-string' => function ($sm) { return 'foo'; }, 
	    ),
    ),
);