<?php

namespace Base\Mapper;

use Base\Component\DataMapper;
use Base\Entity\Producer;

class Producer extends DataMapper
{
    public function store(Producer $producer)
    {
        $sql = "UPDATE {$this->table}
                    SET name = :name
                WHERE id = :id";

        $statement = $this->connection->prepare($sql);

        $statement->bindValue(':id', $producer->getId());
        $statement->bindValue(':name', $producer->getName());

        $statement->execute();
    }
}