# Design Patterns

Коллекция примеров шаблонов проектирования на PHP.

Общие
- Контейнер Свойств
- Делегирование
- Внедрение зависимостей
- Объект передачи данных
- Репозиторий
- Data Mapper
- Active Records

Порождающие (Creational)
- Простая Фабрика (Simple Factory)
- Абстрактная Фабрика (Abstract Factory)
- Фабричный Метод (Factory Method)
- Строитель (Builder)
- Прототип (Prototype)
- Одиночка (Singleton)

Поведенческие (Behavioral)
- Цепочка оюбязаностей (Chain of Responsibility)
- Команда
- Итератор
- Посредник
- Хранитель
- Наблюдатель
- Посетитель
- Стратегия
- Интрепретатор
- Состояние
- Шаблонный метод

Структурные (Structural)
- Адаптер
- Мост
- Компоновщик
- Декоратор
- Фасад
- Приспособленец
- Заместитель

SOLID
- S
- O
- L
- I
- D

CQRS

## Принципы проектирвания
- Выделите то, что изменяется и отделите от того, что остается постоянным.
- TODO


## Порождающие (Creational) шаблоны
https://refactoring.guru/ru/design-patterns/creational-patterns
Предназначены для создания объектов.

## Фабрики 
Фабрика - классы, содержащий созадющий метод, которые создает и возвращает другие объекты, в зависимости от входящих параметров.
Используются, когда нужно отделить логику создания объекта от остального кода.
Есть 3 щаблона фабрик: простая фабрика, абстрактная фабрика, фабричный метод. 

### Простая фабрика (Simple Factory)
Простая фабрика - один класс, который содержит один метод, который принимает входящие параметры и в зависимости от значений этих параметров 
создает и возвращает экземпляр нужного класса. 
Упрощенный вариант паттерна Фабричный Метод, не является классическим шаблоно, скорее некий принцип.
Не входит в паттерны GoF.

### Фабричный метод (Factory Method)
В отличие от Простой Фабрики, есть базовый класс фабрики и его подклассы.

Класс продукта - это то, что нужно вернуть в клиентский код. Продукт реализует интерфейс.
Есть базовый абстрактный класс фабрики с создающим методом (может быть абстрактным), который возвращает экземпляр интерфейса. 
В подклассах фабрики создаюший метод переопределяется, что бы возвращать специфические для каждого подкласса продукты.

В примере:
продукты - классы TeslaCar, ToyotaCar, реализуют интерфейс Car.
У Теслы есть дополнительные свойства и методы.
Базовая фабрика AutoFactory, подклассы TeslaFactory, реализуют каждый по своему метод create() + делаю что-то еще.

### Абстрактная фабрика (Abstract Factory)
В отличие от Фабричноего Метода, позаоляет создавать не один продукт, а семейства связанных объектов-продуктов.
В базовомо классе фабрики есть несколько абстрактных создающих методов, которые реализуются в подклассах и 
возвращают логически связанные между собой продукты.
В примере - фабрика возращает 2 продукта - автомобиль и комплект запчастей к нему.

### Строитель (Builder)
Упрощаяет создание объектов, которые требуют большого количества параметров в конструкторе.
Проблема таких объектов в том, что в конструкторе необходимо указывать все входящие параметры, которые могут потенциально быть
использованы, но во первых это громоздко (назвается "телескопический конструктор"), во вторых часть параметров часто не используется.

Решение:
Продукт принимает в конструкторе на вход только экземпляр класса строитель и заполняет значения свойств вызывая методы строителя.  
Есть класс строитель, который имеет те же свойства, что и продукт, в конструкторе им присваивается значения по умолчанию.
У строителя на каждое свойство есть сеттер, возвращающий текущий объект (текучий интерфейс).
У строителя есть создающий метод, в котором создается и возвращается экземпляр продукта, в конструктор которого передается сам строитель.
В клиентском коде создается экземпляр строителя и вызываются необходимые сеттеры и в конце создающий метод.
Преимущество: у строителя можно вызывать только те сеттеры, которые нужны. Удобно когда у продукта много параметров, которые не всегда нужно
менять при создании. Иначе при создании продукта нужно передавать много параметров, если некоторые не нужны - указывать null.
Использовать именновнные праметры.

### Прототип (Prototype)
Создание клона (копии) существующего объекта. 
В PHP клонирование можно реализовать через ключевое слово clone и при необходимости использовать магический метод __clone().
См примеры

### Одиночка (Singleton)
Гарантирует, что у класса есть только один экземпляр и дает к этому экземпляру точку доступа.
Как работает: 
- Скрывается конструктор (делается приватным), так как конструктор всегда возвращает новый объект.
- Создается приватная статическая переменная, в которой хранится экземпляр класса.
- Создается публичный статический метод, так как к статическому методу доступ есть всегда, если доступен класс.
   Из этого метода возварщается значение статической переменной.
   Этот метод и есть точка доступа к экземпляру класса. 
   В нем проверяется переменная, если пустая - в нее записывается новый экземпляр класса через new self() 
- Что бы избежать клонирования обявляются приватными пустые магические методы __clone() и __wakeup()

## Поведенческие (Behavioral) шаблоны
https://refactoring.guru/ru/design-patterns/behavioral-patterns
Предназначены для определения взаимодействия между объектами.

### Цепочка обязаностей (Chain of Responsibility)
Объекты-обработчики по цепочке передают объект, который надо обработать. 
Каждый обработчик хранит с свойстве следующий обработчик.
2 варианта реализации - обработчик всегда передает объект дальше или не передает, если он может его обработать (т.е. обработка оставнавливается).
Пример: middleware. Есть объект запроса и он проходит по очереди по всем обработчкам перед попаданием в контроллер (фильтарция).
Каждый посредник после обработки передает объект следующему.

### Команда (Command)
Решает задачу разделения слоев, например, UI и бизенс-логики. 
Часто компоненты UI напрямую взаимодействуют с логикой, например, из шаблона отправляются данные в контероллер. 
Можно сделать взаимодействие через посредника - объект команды.
Как работет: 
Есть объект команды, реализующий интерфейс, в котором есть метод execute(), который взаимодействует с логикой.
В компонент UI, например, кнопку, передается объект команды (точнее объект типа интерфейса).
Кнопка не знаяет, что именно нужно делать при нажатии, она просто вызывает метод execute() команды.
Таким образом UI отделен от логики слоем абстракции - командой.

### Итератор (Iterator)
Решает задачу по перебору элементов коллекции способом, не зависящим от устройства коллекции.
Есть некая коллекция - набор объектов, связанных между собой, функционально или тематически.
Есть объект - итератор, который реализует перебор коллекции определенными способом, так как перебор можно осуществлять разными способами 
(например, по дереву можно двигаться сверху вниз слева направо).
Коллекция не знает про способы перебора, она просто содержит метод, принимающий объект итератора.
У итератора есть методы пребора - next, rewind и т.д.
В PHP паттерн Iterator реализуется с помощью интерфейса Iterator библиотеки SPL.
https://www.php.net/manual/ru/class.iterator.php

Для чего используется: 
Для создания собственного способа перебора коллекции. 
При переборе объекта через foreach перебираются открытые (public) свойства объекта.
foreach($obj as $n => $v){
 // $n - имя свойства
 // $v - его значение
}

Если сделать итератор, то этот foreach будет эквивлентен такому for:
for($iterator->rewind(); $iterator->valid(); $iterator->next()) {
   echo $iterator->key() . PHP_EOL;
   var_dump($iterator->current());
}

Таким образом, в методах итератора можно переопределять, по каким значениям будет идти итерация.
Если переопределение возвращаемого значения не нужно, то можно не реализовывать интерфейс Iterator и использовать дефолтное поведение PHP.  

Пример: Перебор списка неких географических мест (достопримечательности, пункты на карте и т.д.)
- Класс Place - объект локации
- Класс PlacesIterator - итератор локаций, содержит массив объектов типа Place и реализует интерфейсы SPL Iterator и Countable, 
которые добавляют методы current(), next(), key(), valid(), rewind(), count()