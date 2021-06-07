<?php

$router->put('/operaciones/update/{id}','OperacionController@update');
$router->post('/operaciones/create','OperacionController@create');
$router->delete('/operaciones/delete/{id}','OperacionController@delete');