# Web School Factory
Simple API Framework 

```php
// Initialisation du router
$router = new Router();

// Ajout des routes disponibles
$router->addRoute(array(
    'route'  => '^/$',
    'GET'   => array('IndexController', 'index')
));

$router->addRoute(array(
    'route'  => '^/$',
    'POST'   => array('IndexController', 'index')
));

$router->run();
```
