<?php declare(strict_types=1);


class ArrayCollection implements ArrayCollectionInterface
{
    protected $collection;

    public function __construct(array $collection = null)
    {
        $this->collection = $collection;
    }

    public function addElement($element): self
    {
        $this->collection[] = $element;

        return $this;
    }

    public function getElement($element)
    {
        if ($this->hasElement($element)) {
            return $this->collection[$element];
        }

        return null;
    }

    public function getElementByIndex(int $index)
    {
        if ($this->hasElement($index)) {
            return $this->collection[$index];
        }

        return null;
    }

    private function hasElement($element): bool
    {
        if (isset($this->collection[$element])) {
            return true;
        }

        return false;
    }

    private function getCollection(): array
    {
        return $this->collection;
    }

    public function getReverse(): array
    {
        rsort($this->collection);

        return $this->getCollection();
    }

    public function filter(string $functionName): array
    {
        return array_filter($this->getCollection(), $functionName);
    }

    public function map(string $functionName): array
    {
        return array_map($functionName, $this->getCollection());
    }

    public function fold($function, $initial = null)
    {
        return array_reduce($this->getCollection(), $function, $initial);
    }


}