<?php

require_once __DIR__ . "/Menu.php";
require_once __DIR__ . "/Item.php";
require_once __DIR__ . "/Group.php";

// создаем меню
$subMenu1 = new Group;
$subMenu1->add(new Item('Second level item 1'));
$subMenu1->add(new Item('Second level item 2'));

$subMenu2 = new Group;
$subMenu2->add(new Item('Third level item 1'));
$subMenu2->add(new Item('Third level item 2'));

$subMenu1->add($subMenu2);

$menu = new Group;
$menu->add(new Item('First level item 1'));
$menu->add(new Item('First level item 2'));
$menu->add($subMenu1);
$menu->add(new Item('First level item 3'));

// выводим все меню одним вызовом
$menu->render();