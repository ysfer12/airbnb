<?php

namespace Core\Validation;


class Rules
{

  public static $rules = [
    'id' => 'required|numeric',
    'username' => 'required|min:6|max:20',
    'lastname' => 'required|min:6|max:20',
    'email'    => 'required|email',
    'password' => 'required|min:6',
    'price' => 'required|numeric',


    'title' => 'required|min:6',
    'description' => 'required|min:6',
    'bedrooms' => 'required|numeric',
    'bathrooms' => 'required|numeric',      
  
  ];




}
