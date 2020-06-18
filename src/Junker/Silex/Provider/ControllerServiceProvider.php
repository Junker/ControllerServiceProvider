<?php

namespace Junker\Silex\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Api\EventListenerProviderInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Junker\Silex\Controller;

class ControllerServiceProvider implements ServiceProviderInterface,EventListenerProviderInterface
{
    public function register(Container $app)
    {
    }

    public function subscribe(Container $app, EventDispatcherInterface $dispatcher)
    {
        $dispatcher->addListener(KernelEvents::CONTROLLER, function(FilterControllerEvent $event) use ($app)
        {
            $controller = $event->getController();
            $request = $event->getRequest();

            if (is_array($controller) && isset($controller[0]) && $controller[0] instanceof Controller)
            {
                $controller[0]->setApplication($app);
                $controller[0]->setRequest($request);
            }
        });
    }
}
