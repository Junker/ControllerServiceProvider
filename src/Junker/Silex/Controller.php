<?php
namespace Junker\Silex;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;


abstract class Controller
{
	public function setApplication(Application $app)
	{
		$this->app = $app;
	}

	public function setRequest(Request $request)
	{
		$this->request = $request;
	}
}