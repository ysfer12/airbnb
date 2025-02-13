<?php

namespace App\Entities;

class Category implements \JsonSerializable
{
    private $id;
    private $name;
    private $description;

    // Getters
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getDescription() { return $this->description; }

    // Setters
    public function setId($id) { $this->id = $id; }
    public function setName($name) { $this->name = $name; }
    public function setDescription($description) { $this->description = $description; }


    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
        ];
    }
}