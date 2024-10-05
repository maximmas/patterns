<?php

class Places
{
    public array $places = [];

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
}