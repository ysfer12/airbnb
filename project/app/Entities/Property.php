<?php

namespace App\Entities;

class Property
{
  private $id;
  private $title;
  private $description;
  private $price;
  private $photos; // array of photo URLS explod by ','.
  private $isValidated;
  private $isAvailable;
  private $owner; // Object from the User class
  private $category; // Object from the Category class


  // Getters
  public function getId()
  {
    return $this->id;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getPhotos()
  {
    return $this->photos;
  }

  public function getIsValidated()
  {
    return $this->isValidated;
  }

  public function getIsAvailable()
  {
    return $this->isAvailable;
  }

  public function getOwner()
  {
    return $this->owner;
  }

  public function getCategory()
  {
    return $this->category;
  }


  // Setters
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function setPrice($price)
  {
    $this->price = $price;
  }

  public function setPhotos($photos)
  {
    $this->photos = $photos;
  }

  public function setIsValidated($isValidated)
  {
    $this->isValidated = $isValidated;
  }

  public function setIsAvailable($isAvailable)
  {
    $this->isAvailable = $isAvailable;
  }

  public function setOwner($owner)
  {
    $this->owner = $owner;
  }

  public function setCategory($category)
  {
    $this->category = $category;
  }
}
