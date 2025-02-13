<?php

use Core\Http\Router;



Router::get('', 'back\\HomeControllers@index');

Router::get('/', 'front\\HomeControllers@index');

Router::get('auth', 'front\\AuthController@auth');

Router::get('addInformation', 'front\\AuthController@addInformation');


Router::get('register', 'front\\AuthController@addInformation');

Router::post('register', 'front\\AuthController@addUser');

Router::get('', 'front\\HomeControllers@index');

Router::get('contact', 'front\\HomeControllers@index2');

Router::get('home/{id}', 'front\\HomeControllers@index');

Router::get('product/{id}', 'front\\HomeControllers@index');



// --------------------

// Router::post('login', 'front\\AuthControllers@login');

// $_post['email'];
// $_post['password'];