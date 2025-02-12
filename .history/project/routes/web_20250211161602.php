<?php

use Core\Http\Router;



Router::get('', 'back\\HomeControllers@index');

Router::get('/', 'front\\HomeControllers@index');

Router::get('home', 'front\\HomeControllers@index');

Router::get('contact', 'front\\HomeControllers@index2');

Router::get('home/{id}', 'front\\HomeControllers@index');

Router::get('product/{id}', 'front\\HomeControllers@index');


Router::get('category/index', 'back\\DashboardController@index');






back/admin/category/index ;

Router::get('dashboard/category', 'back\\DashboardController@index');



// --------------------

// Router::post('login', 'front\\AuthControllers@login');

// $_post['email'];
// $_post['password'];