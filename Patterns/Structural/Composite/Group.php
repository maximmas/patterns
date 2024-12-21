<?php

class Group implements Menu
{
    protected array $menuItems;

    public function render(): void
    {
        foreach ($this->menuItems as $menuItem) {
            $menuItem->render();
        }
    }

    public function add(Menu $menuItem): void
    {
        $this->menuItems[] = $menuItem;
    }

    public function remove(Menu $menuItem): void
    {
        // remove item from menuItems[]
    }




}