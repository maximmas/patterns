<?php

/**
 * Базовый декоратор
 */
class FilterDecorator implements Filterable
{
    protected Filter $filter;
    public function __construct(Filter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Базовая фильтрация
     *
     * @return array
     */
    public function applyFilter(): array
    {
        return $this->filter->applyFilter();
    }
}