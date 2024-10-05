<?php

require_once dirname(__FILE__) . '/Place.php';
require_once dirname(__FILE__) . '/Places.php';
require_once dirname(__FILE__) . '/PlacesDefaultIterator.php';
require_once dirname(__FILE__) . '/PlacesCustomIterator.php';

$place1 = new Place(['id' => 345, 'name' => 'Location1']);
$place2 = new Place(['id' => 678, 'name' => 'Location2']);
$place3 = new Place(['id' => 901, 'name' => 'Location3']);

/**
 * Пример 1.
 * В классе PlacesDefaultIterator стандартная реализация методов интерфейсов.
 */
$iterator1 = new PlacesDefaultIterator;
$iterator1->addPlace($place1);
//$iterator1->addPlace($place2);
//$iterator1->addPlace($place3);


/**
 * При итерация через foreach в place попадает возврат метода current(), который по умолчанию возвращает элемент коллекции.
 * В данном случа будет перебор значений свойства 'places', 3 итерации, в $n - индекс, в $place - свойства объекта Place
 */
echo "Пример 1 ================" . PHP_EOL;
foreach ($iterator1 as $n => $place) {
//    echo $place->getLocationName() . PHP_EOL;
    echo $n . PHP_EOL;
    var_dump($place);
}

// аналог - итерация через for
for($iterator1->rewind(); $iterator1->valid(); $iterator1->next()) {
    echo $iterator1->key() . PHP_EOL;
    var_dump($iterator1->current());
}


/**
 * Пример 2.
 * В классе PlacesCustomIterator методов current() переобпределен и возвращает свойство объекта, а не сам объект.
 */
$iterator2 = new PlacesCustomIterator;
$iterator2->addPlace($place1);
$iterator2->addPlace($place2);
$iterator2->addPlace($place3);

echo "Пример 2 ================" . PHP_EOL;
foreach ($iterator2 as $place) {
    // будет ошибка, так как current() возвращает не объект, а значение его свойства.
    //echo $place->getLocationName() . PHP_EOL;

    echo $place . PHP_EOL;
}

// аналог через for
for($iterator2->rewind(); $iterator2->valid(); $iterator2->next()) {
//    echo $iterator2->key() . ' ' . $iterator2->current() . PHP_EOL;
}

// Перебор коллекции без реализации интерфейса Iterator (дефолтное поведение PHP)

$iterator3 = new Places;
$iterator3->addPlace($place1);
$iterator3->addPlace($place2);
$iterator3->addPlace($place3);

// перебор свойств класса Places
// здесь будет 1 итерация, n - имя свойства 'places', $v = массив объектов Place (3 элемента)
foreach ($iterator3 as $n => $place) {
    echo $n . PHP_EOL;
    var_dump($place);
}