<?php
$router->get('/prestamosCopia','PrestamoCopiaController@all');
$router->put('/prestamosCopia/update/{id}','PrestamoCopiaController@update');
$router->post('/prestamosCopia/create','PrestamoCopiaController@create');