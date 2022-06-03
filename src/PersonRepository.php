<?php

namespace Pcat\DataMapper;

use Pcat\DataMapper\PersonMapper;

class PersonRepository
{
    private $dateMapper;
    private $data = [];

    public function __construct()
    {
        $this->dateMapper = new PersonMapper();
        $this->data = $this->dateMapper->findAll();
    }

    public function findAll() {
        return $this->data;
    }

    public function findById($id) {
        foreach ($this->data as $person) {
            if ($person->getId() == $id) {
                return $person;
            }
        }
    }

}