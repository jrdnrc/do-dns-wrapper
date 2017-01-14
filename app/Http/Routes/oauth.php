<?php declare(strict_types = 1);

use Illuminate\Routing\Router;

/** @var Router $router */

$router->group(
    [
        'prefix'    =>  'oauth',
        //'namespace' =>  'OAuth',
    ],
    function (Router $router) {
        $router->get('/request', [
            'uses'  => 'OAuth\\DigitalOceanOAuth2Controller@requestAuthorisation',
            'as'    => 'oauth.request',
        ]);

        $router->get('/authorise', [
            'uses'  =>  'OAuth\\DigitalOceanOAuth2Controller@authorise',
            'as'    =>  'oauth.authorise',
        ]);
    }
);