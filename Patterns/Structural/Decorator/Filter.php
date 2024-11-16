<?php

class Filter implements Filterable
{

    public array $data;

    public function __construct(array $data){
        $this->data = $data;
    }

    /**
     * Базовая фильтрация
     *
     * @return array
     */
    public function applyFilter():array
    {
        $data = $this->data;

        // do filtering $data

        return $data;
    }

}