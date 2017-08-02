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

                $router->resource('cursoInterno', 'CursoInternoController');
                $router->resource('cursoExterno', 'CursoExternoController');
                $router->resource('gestao', 'GestaoController');
                $router->resource('fornecedores', 'FornecedoresController');
                $router->resource('sala_aula', 'SalaAulaController');
                $router->resource('instrutor', 'InstrutorController');
                $router->resource('agendaTreinamento', 'AgendaTreinamentoController');
                $router->resource('alerta', 'AlertaEmailController');
            });
    });
