<?php
$router->get('/planos', 'PlanoController@all');
$router->put('planos/update/{id}','PlanoController@update');
$router->delete('planos/delete/{id}','PlanoController@delete');
$router->post('planos/create', 'PlanoController@create');