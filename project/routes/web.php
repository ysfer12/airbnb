<?php

use Core\Http\Router;



Router::get('', 'front\\PropertyController@displayLatestTen');

Router::get('/', 'front\\PropertyController@displayLatestTen');

Router::get('home', 'front\\PropertyController@displayLatestTen');


Router::get('property', 'front\\PropertyController@displayProperty');





Router::get('property/add', 'front\\PropertyController@diplayAddPage');


Router::get('property/add', 'front\\PropertyController@diplayUpdatePage');



Router::post('property/add', 'front\\PropertyController@creatProperty');



Router::post('property/update', 'front\\PropertyController@updateProperty');



Router::get('property/delete', 'front\\PropertyController@deleteProperty');


Router::post('property/search', 'front\\PropertyController@searchProperty');




Router::post('property/id', 'front\\PropertyController@getPropertyById');


