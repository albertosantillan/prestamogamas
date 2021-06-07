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

$router->post('/maquinas/create','MaquinaController@create');
$router->post('/empleados/create','PersonalController@create');
include 'piezas.php';
include 'area.php';
include 'prestamos.php';
include 'operaciones.php';
include 'prestamosCopia.php';
include 'prestamosNc.php';
include 'planos.php';
