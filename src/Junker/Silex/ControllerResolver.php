<?php
namespace Junker\Silex;

use Junker\Silex\Controller;
use Silex\ControllerResolver as SilexControllerResolver;
use Symfony\Component\HttpFoundation\Request;

class ControllerResolver extends SilexControllerResolver
{
	protected function doGetArguments(Request $request, $controller, array $parameters)
	{
		if (is_array($controller) && isset($controller[0]) && $controller[0] instanceof Controller) 
		{
			$controller[0]->setApplication($this->app);
			$controller[0]->setRequest($request);
		}
		return parent::doGetArguments($request, $controller, $parameters);
	}
}