<?php
/*$router->get('/prestamos/pdf','PrestamoController@pdf');*/
/*$router->get('/prestamos/csv','PrestamoController@csv');*/
$router->post('/prestamos/create','PrestamoController@create');
$router->put('/prestamos/update/{id}','PrestamoController@update');
$router->get('/prestamos','PrestamoController@all');
