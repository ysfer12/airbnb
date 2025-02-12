<?php

namespace App\Entities;

class Property
{
  private $id;
  private $title;
  private $description;
  private $price;
  private $address;
  private $photos; // array of photo URLS explod by ','.
  private $bedrooms;
  private $bathrooms;
  private $isValidated;
  private $isAvailable;
  private $rating;
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

  public function getAddress()
  {
    return $this->address;
  }

  public function getPhotos()
  {
    return $this->photos;
  }

  public function getBedrooms()
  {
    return $this->bedrooms;
  }

  public function getBathrooms()
  {
    return $this->bathrooms;
  }

  public function getIsValidated()
  {
    return $this->isValidated;
  }

  public function getIsAvailable()
  {
    return $this->isAvailable;
  }

  public function getRating()
  {
    return $this->rating;
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

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function setPhotos($photos)
  {
    $this->photos = $photos;
  }

  public function setBedrooms($bedrooms)
  {
    $this->bedrooms = $bedrooms;
  }

  public function setBathrooms($bathrooms)
  {
    $this->bathrooms = $bathrooms;
  }

  public function setIsValidated($isValidated)
  {
    $this->isValidated = $isValidated;
  }

  public function setIsAvailable($isAvailable)
  {
    $this->isAvailable = $isAvailable;
  }

  public function setRating($rating)
  {
    $this->rating = $rating;
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
