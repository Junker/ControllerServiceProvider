<?php

namespace Junker\Silex\Provider;

use Junker\Silex\ControllerResolver;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ControllerServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['resolver'] = function ($app) {
                return new ControllerResolver($app, $app['logger']);
        };
    }
}
