<?php declare(strict_types=1);


interface ArrayCollectionInterface
{
    public function addElement($element);

    public function getElement($element);

    public function getElementByIndex(int $index);

    public function getReverse();

    public function filter(string $functionName);

    public function map(string $functionName);

    public function fold($function, $initial);
}