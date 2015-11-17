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


### Configuration Apache

```apache
NameVirtualHost *:8888

#
# VirtualHost example:
# Almost any Apache directive may go into a VirtualHost container.
# The first VirtualHost section is used for all requests that do not
# match a ServerName or ServerAlias in any <VirtualHost> block.
#
<VirtualHost *:8888>
    DocumentRoot /Applications/MAMP/htdocs/P2019/public
    ServerName localhost
    Options +FollowSymLinks

    <Directory "/Applications/MAMP/htdocs/P2019/public" >
      AllowOverride all
    </Directory>

</VirtualHost>
```
* Changer le répertoire cible vers le vôtre ```/Applications/MAMP/htdocs/P2019/public```
