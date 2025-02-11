<?php

namespace App\Entities;

class Property
{

  private int $id;
  private string $title;
  private string $description;
  private float $price;
  private array $photos; // array of photo URLS explod by ','.
  private bool $isValidated;
  private bool $isAvailable;
  private User $owner; // Object from the User class
  private Category $category; // Object from the Category class


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
  public function setId(int $id)
  {
    $this->id = $id;
  }

  public function setTitle(string $title)
  {
    $this->title = $title;
  }

  public function setDescription(string $description)
  {
    $this->description = $description;
  }

  public function setPrice(float $price)
  {
    $this->price = $price;
  }

  public function setPhotos(array $photos)
  {
    $this->photos = $photos;
  }

  public function setIsValidated(bool $isValidated)
  {
    $this->isValidated = $isValidated;
  }

  public function setIsAvailable(bool $isAvailable)
  {
    $this->isAvailable = $isAvailable;
  }

  public function setOwner(User $owner)
  {
    $this->owner = $owner;
  }

  public function setCategory(Category $category)
  {
    $this->category = $category;
  }
}
