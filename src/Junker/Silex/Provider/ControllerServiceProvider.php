<?php

namespace Junker\Silex\Provider;

use Junker\Silex\ControllerResolver;
use Silex\Application;
use Silex\ServiceProviderInterface;

class ControllerServiceProvider implements ServiceProviderInterface 
{
    public function register(Application $app) 
    {
        $app['resolver'] = $app->share(
            function () use ($app) {
                return new ControllerResolver($app, $app['logger']);
            }
        );


    }
    public function boot(Application $app) {

    }
}