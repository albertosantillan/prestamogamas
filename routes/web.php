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
|C
*/

$router->get('/', function () use ($router) {
    echo "prestamos";
});

include 'piezas.php';
include 'area.php';
include 'prestamos.php';

$router->put('/operaciones/update/{id}','OperacionController@update');

$router->put('/prestamosCopia/update/{id}','PrestamoCopiaController@update');
$router->put('/prestamosNc/update/{id}','PrestamoPlanosNc@Controller@update');

$router->delete('/operaciones/delete/{id}','OperacionController@delete');
$router->post('/maquinas/create','MaquinaController@create');
$router->post('/operaciones/create','OperacionController@create');
$router->post('/personal/create','PersonalController@create');

$router->post('/prestamoscopia/create','PrestamoCopiaController@create');
$router->post('/prestamosNc/create','PrestamoPlanoNcController@create');

