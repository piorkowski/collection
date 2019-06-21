<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ArrayCollectionTest extends TestCase
{
    private function getTestArray(): array
    {
        return ['Ala', 'ma', 'kota', 1, 2, 3];
    }

    /**
     * @dataProvider provider
     * @param $element
     */
    protected function testAddElement($element)
    {
        $collection = new ArrayCollection($this->getTestArray());

        $collection->addElement('Hello World');

    }

    public function provider()
    {
        return ['Ala', 'ma', 'kota', 1, 2, 3];
    }
}