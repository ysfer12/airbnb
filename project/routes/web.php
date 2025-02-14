<?php

use Core\Http\Router;



// isam routes:
Router::get('', 'front\\PropertyController@displayLatestTen');
Router::get('/', 'front\\PropertyController@displayLatestTen');
Router::get('home', 'front\\PropertyController@displayLatestTen');
Router::get('property', 'front\\PropertyController@displayProperty');

Router::get('property/add', 'front\\PropertyController@displayAddPage');
Router::get('property/update', 'front\\PropertyController@displayUpdatePage');

Router::post('property/add', 'front\\PropertyController@creatProperty');
Router::post('property/update', 'front\\PropertyController@updateProperty');

Router::post('property/delete', 'front\\PropertyController@deleteProperty');
Router::post('property/search', 'front\\PropertyController@searchProperty');

Router::get('property/id', 'front\\PropertyController@getPropertyById');


//statistic :

Router::get('property/dashboard', 'front\\PropertyController@viewStatistiques');
