<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
//use Cake\Http\Middleware\CsrfProtectionMiddleware;

$routes->setRouteClass(DashedRoute::class);

$routes->scope('/', function (RouteBuilder $builder) {
    // $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $builder->connect('/', ['controller' => 'Blogs', 'action' => 'home']);
    $builder->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    // Add this
    // New route we're adding for our tagged action.
    // The trailing `*` tells CakePHP that this action has
    // passed parameters.
    $builder->scope('/articles', function (RouteBuilder $builder) {
        $builder->connect('/tagged/*', ['controller' => 'Articles', 'action' => 'tags']);
    });

    $builder->fallbacks();
});



$routes->setRouteClass(DashedRoute::class);
$routes->scope('/', function (RouteBuilder $builder) {
   //$builder->registerMiddleware('csrf', new CsrfProtectionMiddleware([
      //'httpOnly' => true,
 //  ]));
  // $builder->applyMiddleware('csrf');
   $builder->connect('/pages',['controller'=>'Pages','action'=>'display', 'home']);
   $builder->connect('locale',
      ['controller'=>'Localizations','action'=>'index']);
   $builder->fallbacks();
});
