<?php

use Core\Http\Router;



Router::get('', 'back\\HomeControllers@index');

Router::get('/', 'front\\HomeControllers@index');

Router::get('auth', 'front\\HomeControllers@auth');

Router::get('addInformation', 'front\\HomeControllers@addInformation');

Router::get('', 'front\\HomeControllers@index');

Router::get('contact', 'front\\HomeControllers@index2');

Router::get('home/{id}', 'front\\HomeControllers@index');

Router::get('product/{id}', 'front\\HomeControllers@index');



// --------------------

// Router::post('login', 'front\\AuthControllers@login');

// $_post['email'];
// $_post['password'];