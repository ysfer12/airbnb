<?php

namespace App\Entities;

class User implements \JsonSerializable
{
    protected $id;
    protected $name;
    protected $email;
    protected $phone;
    protected $role;
    protected $isActive;
    protected $createdAt;
    protected $deletedAt;

    // Getters
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getEmail() { return $this->email; }
    public function getPhone() { return $this->phone; }
    public function getRole() { return $this->role; }
    public function getIsActive() { return $this->isActive; }
    public function getCreatedAt() { return $this->createdAt; }
    public function getDeletedAt() { return $this->deletedAt; }

    // Setters
    public function setId($id) { $this->id = $id; }
    public function setName($name) { $this->name = $name; }
    public function setEmail($email) { $this->email = $email; }
    public function setPhone($phone) { $this->phone = $phone; }
    public function setRole($role) { $this->role = $role; }
    public function setIsActive($isActive) { $this->isActive = $isActive; }
    public function setCreatedAt($createdAt) { $this->createdAt = $createdAt; }
    public function setDeletedAt($deletedAt) { $this->deletedAt = $deletedAt; }


    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'role' => $this->role,
            'isActive' => $this->isActive,
            'createdAt' => $this->createdAt,
            'deletedAt' => $this->deletedAt,
        ];
    }
}