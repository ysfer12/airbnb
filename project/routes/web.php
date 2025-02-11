<?php

use Core\Http\Router;



Router::get('', 'front\\PropertyController@displayLatestTen');

Router::get('/', 'front\\PropertyController@displayLatestTen');

Router::get('home', 'front\\PropertyController@displayLatestTen');





