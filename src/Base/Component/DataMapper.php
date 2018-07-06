<?php

namespace Base\Component;

use PDO;

abstract class DataMapper
{
    protected $connection;
    protected $table;

    public function __construct(PDO $connection, string $table)
    {
        $this->connection = $connection;
        $this->table = $table;
    }

    public function applyValues($instance, array $parameters)
    {
        foreach ($parameters as $key => $value) {
            $method = 'set'.str_replace('_', '', $key);
            if (method_exists($instance, $method)) {
                $instance->{$method}($value);
            }
        }
    }
}