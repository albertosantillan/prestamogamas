<?php

$router->get('/piezas', 'PiezaController@all');
$router->put('/piezas/update/{id}','PiezaController@update');
$router->delete('/piezas/delete/{id}','PiezaController@delete');
$router->post('/piezas/create', 'PiezaController@create');
