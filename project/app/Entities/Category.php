<?php

namespace App\Entities;

class Category
{

  private int $id;
  private string $name;
  private string $description;


  // Getters
  public function getId()
  {
    return $this->id;
  }
  
  public function getName(): string
  {
    return $this->name;
  }

  public function getDescription()
  {
    return $this->description;
  }


  // Setters
  public function setId(int $id)
  {
    $this->id = $id;
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }  

  public function setDescription(string $description)
  {
    $this->description = $description;
  }

}
