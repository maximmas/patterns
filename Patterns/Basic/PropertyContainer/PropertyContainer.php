<?php

class PropertyContainer implements PropertyContainerInterface
{

    /**
     * Ассоциативный массив свойств, имя->значение
     * @var array
     */
    protected array $properties;


    /**
     * Установка значения свойства
     *
     * @param string $name имя свойства
     * @param mixed $value значение свойства
     * @return void
     */
    public function setProperty(string $name, mixed $value): void
    {
        $this->properties[$name] = $this->properties[$name] ?? $value;
    }


    /**
     * Получение значения свойств
     *
     * @param string $name имя свойства
     * @return mixed
     *
     */
    public function getProperty(string $name): mixed
    {
        return $this->properties[$name] ?? null;
    }


    /**
     * Удаление свойства
     *
     * @param string $name имя свойства
     * @return void
     */
    public function deleteProperty(string $name): void
    {
        if(isset($this->properties[$name])){
            unset($this->properties[$name]);
        }
    }


    /**
     * Обновление свойства
     *
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function updateProperty(string $name, mixed $value): void
    {
        if(isset($this->properties[$name])){
            $this->properties[$name] = $value;
        }
    }
}