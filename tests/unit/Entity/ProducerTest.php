<?php

namespace Base\Entity;

use PHPUnit\Framework\TestCase;

final class ProducerTest extends TestCase
{
    /**
     * @dataProvider provide_Assignment_of_Numeric
     */
    public function test_Assignment_of_Id($number, $expected)
    {
        $entity = new Producer();
        $entity->setId($number);

        $this->assertSame($expected, $entity->getId());
    }

    public function provide_Assignment_of_Numeric()
    {
        return [
            [null, null],
            ['', null],
            [234, 234],
            ['1234', 1234],
            ['9test', 9],
            [0, null],
            ['0', null],
            ['alpha', null],
        ];
    }
}