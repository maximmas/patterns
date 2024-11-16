<?php

class AdvancedFilterDecorator extends FilterDecorator
{
    public function applyAdvancedFilter(): array
    {
        $data = $this->filter->data;

        // do advanced filtering $data

        return $data;
    }

}