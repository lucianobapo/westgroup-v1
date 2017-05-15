<?php

use Dingo\Api\Routing\Router;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$router = app(Router::class);

$routeConfigV1 = [
    'middleware' => 'cors',
    'namespace' => 'App\Http\Controllers',
//            'prefix' => $this->app['config']->get('debugbar.route_prefix'),
];

$router
    ->version('v1', function (Router $router) use ($routeConfigV1) {
        $router
            ->group($routeConfigV1, function (Router $router) use ($routeConfigV1) {
//                $router->get('appVersion', [
//                    'as'=>'api.appVersion',
//                    'uses'=> 'ApiController@appVersion'
//                ]);
//
//                foreach (config('erpnetMigrates.tables') as $table => $config) {
//                    $routePrefix = isset($config['routePrefix'])?$config['routePrefix']:str_singular($table);
//                    $routeController = isset($config['routeController'])?$config['routeController']:(ucfirst(camel_case($routePrefix)).'Controller');
//                    if(class_exists($routeConfigV1['namespace'].'\\'.$routeController)){
//                        $router->resource($routePrefix, $routeController);
//                        $router->get('/'.$routePrefix.'/{'.$routePrefix.'}/edit', ['as'=>$routePrefix.'.edit', 'uses'=>$routeController.'@edit']);
//                    }
//                }

//                if(array_has(config('erpnetMigrates.tables'),'partners'))
//                    $router->delete('/partner/{partner}/deactivate', ['as'=>'partner.deactivate','uses'=> 'PartnerController@deactivate']);


                $router->resource('cursoInterno', 'CursoInternoControler');
            });
    });
