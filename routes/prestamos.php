<?php
$router->post('/prestamos/create','PrestamoController@create');
$router->put('/prestamos/update/{id}','PrestamoController@update');
$router->get('/prestamos','PrestamoController@all');

