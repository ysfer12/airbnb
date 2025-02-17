<?php

use Core\Http\Router;



Router::get('', 'back\\HomeControllers@index');

Router::get('/', 'front\\HomeControllers@index');

Router::get('home', 'front\\HomeControllers@index');

Router::get('contact', 'front\\HomeControllers@index2');

Router::get('home/{id}', 'front\\HomeControllers@index');

Router::get('product/{id}', 'front\\HomeControllers@index');

Router::get('dashboard/index', 'back\\DashboardOverwriteController@index');

Router::get('category/index', 'back\\DashboardCategoryController@index');

Router::POST('delete-category', 'back\\DashboardCategoryController@delete');

Router::POST('Add-category', 'back\\DashboardCategoryController@add');

Router::POST('update-category', 'back\\DashboardCategoryController@edit');

Router::get('users/index', 'back\\DashboardUserController@index');


Router::get('/admin/users/activate/{id/', 'DashboardUserController@activateUser');











// back/admin/category/index ;





// --------------------

// Router::post('login', 'front\\AuthControllers@login');

// $_post['email'];
// $_post['password'];