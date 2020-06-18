# ControllerServiceProvider
Controller Service Provider for Silex

## Requirements
silex 2.x

## Installation
The best way to install ControllerServiceProvider is to use a [Composer](https://getcomposer.org/download):

    php composer.phar require junker/controller-service-provider

## Examples

```php
use Junker\Silex\Provider\ControllerServiceProvider;

$app->register(new ControllerServiceProvider());

$app->get('/', 'AppController::index');

```


Controller example: 

```php
use Junker\Silex\Controller;

class AppController extends Controller
{

	public function index()
	{
		$app = $this->app;
		$request = $this->request;

		return 'hello';
	}
	
}
```

