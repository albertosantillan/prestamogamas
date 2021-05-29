<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    echo "prestamos";
});

$router->get('/piezas', 'PiezaController@all');
$router->put('/piezas/update/{id}','PiezaController@update');
$router->put('/operaciones/update/{id}','OperacionController@update');
$router->put('/prestamos/update/{id}','PrestamoController@update');
$router->put('/prestamosCopia/update/{id}','PrestamoCopiaController@update');
$router->put('/prestamosNc/update/{id}','PrestamoPlanosNc@Controller@update');
$router->delete('/piezas/delete/{id}','PiezaController@delete');
$router->delete('/operaciones/delete/{id}','OperacionController@delete');
$router->post('/piezas/create', 'PiezaController@create');
$router->post('/area/create','AreaController@create');
$router->post('/maquinas/create','MaquinaController@create');
$router->post('/operaciones/create','OperacionController@create');
$router->post('/personal/create','PersonalController@create');
$router->post('/prestamos/create','PrestamoController@create');
$router->post('/prestamoscopia/create','PrestamoCopiaController@create');
$router->post('/prestamosNc/create','PrestamoPlanoNcController@create');

