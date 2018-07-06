<?php

namespace Base\Entity;

class Producer implements Entity
{
    private $producerId;
    private $name;

    public function setId($producerId)
    {
        $data = (int)$producerId;
        if ($data > 0) {
            $this->producerId = $data;
        }
    }

    public function getId()
    {
        return $this->producerId;
    }

    public function setName($name)
    {
        $data = (string)$name;
        if ($data !== '') {
            $this->name = $data;
        }
    }

    public function getName()
    {
        return $this->name;
    }
}