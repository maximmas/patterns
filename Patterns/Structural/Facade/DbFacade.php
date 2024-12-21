<?php

class DbFacade
{
    public function getRow(int $id){
        // 1. получаем драйвер DB
        // 2. получаем из переменных окружения credentials (DB_NAME, DB_USER, DB_PASSWORD)
        // 3. устанавливаем соединение с БД
        // 4. отправляем SQL-запрос
        // 5. Форматируем ответ
        // 6. Возвращаем ответ
        return $row;
    }
}