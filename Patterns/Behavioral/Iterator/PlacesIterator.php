<?php

class PlacesIterator implements Iterator, Countable
{
    protected array $places = [];

    /**
     * Индекс текущего элемента
     * @var int
     */
    protected int $index = 0;


    /**
     * Добавление элемента в коллекцию
     *
     * @param Place $place
     * @return void
     */
    public function addPlace(Place $place): void
    {
        $this->places[] = $place;
    }


    /**
     * Удаление элемента из коллекции
     * Упрощенный вариант
     *
     * @param Place $place
     * @return void
     */
    public function removePlace(Place $place): void
    {
        $location = $place->getLocation();
        $this->places = array_filter($this->places, function (Place $place) use ($location) {
            return $place->getLocation() !== $location;
        });
    }


    /**
     * Текущий элемент
     *
     * @return string
     */
    public function current(): string
    {
//        return $this->places[$this->index];
        return $this->places[$this->index]->getLocation();
    }


    /**
     * Переход к следующему элементу
     *
     * @return int
     */
    public function next():int
    {
        return $this->index++;
    }


    /**
     * Индекс текущего элемента
     *
     * @return int
     */
    public function key(): int
    {
        return $this->index;
    }


    /**
     * Существует ли элемент с текущим индексом
     *
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->places[$this->index]);
    }


    /**
     * Возврат индекса в начало
     *
     * @return void
     */
    public function rewind(): void
    {
        $this->index = 0;
    }


    /**
     * Количестово элементов коллекции
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->places);
    }
}