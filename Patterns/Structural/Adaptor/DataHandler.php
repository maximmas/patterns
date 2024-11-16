<?php

/**
 * Общий класс-обработчк данных.
 *
 */
class DataHandler
{

    public function handle(Data $request): array
    {
        $data = $request->getData();
        // do smth with $data
        return $data;
    }
}