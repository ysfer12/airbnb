<?php

namespace App\Entities;

class User
{

  protected int $id;
  protected string $name;
  protected string $email;
  protected string $phone;
  protected string $role;
  protected bool $isActive;
  protected string $createdAt;
  protected string $deletedAt;

  // Getters

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getPhone()
  {
    return $this->phone;
  }

  public function getRole()
  {
    return $this->role;
  }

  public function getIsActive()
  {
    return $this->isActive;
  }

  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  public function getDeletedAt()
  {
    return $this->deletedAt;
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

  public function setEmail(string $email)
  {
    $this->email = $email;
  }

  public function setPhone(string $phone)
  {
    $this->phone = $phone;
  }

  public function setRole(string $role)
  {
    $this->role = $role;
  }

  public function setIsActive(bool $isActive)
  {
    $this->isActive = $isActive;
  }

  public function setCreatedAt(string $createdAt)
  {
    $this->createdAt = $createdAt;
  }

  public function setDeletedAt(string $deletedAt)
  {
    $this->deletedAt = $deletedAt;
  }


}
