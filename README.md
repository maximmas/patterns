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
- [Простая Фабрика (Simple Factory)](#простая-фабрика-simple-factory)
- [Абстрактная Фабрика (Abstract Factory)](#абстрактная-фабрика-abstract-factory)
- [Фабричный Метод (Factory Method)](#фабричный-метод-factory-method)
- [Строитель (Builder)](#фабричный-метод-factory-method)
- [Прототип (Prototype)](#прототип-prototype)
- [Одиночка (Singleton)](#одиночка-singleton)

Поведенческие (Behavioral)
- [Цепочка обязаностей (Chain of Responsibility)](#цепочка-обязаностей-chain-of-responsibility)
- [Команда (Command)](#команда-command) 
- [Итератор (Iterator)](#итератор-iterator)
- [Посредник (Mediator)](#mediator)
- [Хранитель (Memento)](#memento)
- [Наблюдатель (Observer)](#наблюдатель-observer)
- [Посетитель (Visitor)](#посетитель-visitor)
- [Стратегия (Strategy)](#стратегия-strategy)
- [Состояние (State)](#состояние-state)
- [Шаблонный метод (Template Method)](#шаблонный-метод-template-method)

Структурные (Structural)
- [Адаптер (Adapter)](#адаптер-adapter)
- [Мост (Bridge)](#мост-bridge)
- Компоновщик (Composite) 
- [Декоратор (Decorator)](#декоратор-decorator)
- Фасад
- Приспособленец
- Заместитель

SOLID
- SRP
- OCP
- LSP
- IS
- DI

CQRS

## Принципы проектирования
- Выделите то, что изменяется и отделите от того, что остается постоянным.

------------------------------------------------------------------------------------------------------------------
## Порождающие (Creational) шаблоны
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
В отличие от Фабричноего Метода, позволяет создавать не один продукт, а семейства связанных объектов-продуктов.
В базовом классе фабрики есть несколько абстрактных создающих методов, которые реализуются в подклассах и 
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

------------------------------------------------------------------------------------------------------------------
## Поведенческие (Behavioral) шаблоны
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

`foreach($obj as $n => $v){
 // $n - имя свойства
 // $v - его значение
}`

Если сделать итератор, то этот foreach будет эквивлентен такому for:

`for($iterator->rewind(); $iterator->valid(); $iterator->next()) {
   echo $iterator->key() . PHP_EOL;
   var_dump($iterator->current());
}`

Таким образом, в методах итератора можно переопределять, по каким значениям будет идти итерация.
Если переопределение возвращаемого значения не нужно, то можно не реализовывать интерфейс Iterator и использовать дефолтное поведение PHP.  

Пример: Перебор списка неких географических мест (достопримечательности, пункты на карте и т.д.)
- Класс Place - объект локации
- Класс PlacesIterator - итератор локаций, содержит массив объектов типа Place и реализует интерфейсы SPL Iterator и Countable, 
которые добавляют методы current(), next(), key(), valid(), rewind(), count()

### Посредник (Mediator)
Обеспечивает связь между объектами. В объект, взаимодействующий с остальными, передается экземпляр класса-посредника, в котором 
находится метод, реализующий связь. Таким образом объекты не взаимодействуют друг с другом напрямую, а обшщяются через посредника.
Пример:
Аукцион. Участники сообщают о своих ставках посреднику - ведущему аукциона, при этом информация может передаваться в разном виде - 
кто-то поднимает табличку с номером, кто то просто кивает головой, можно участвовать заочно - делать ставку по телефону или онлайн.
Ведущий получает инофрмацию и публикует ее в определенном, всем понятном формате. 

### Стратегия (Strategy)
Стартегия - это алгоритим, реализующий какое-либо действие. Шаблон позволяет использовать разные алгоритмы (стратегии) в зависимости 
от условий.
Пример: Есть клиентский код, выполняющий какие-то действия. В определенных местах кода необходимо логгировать данные. 
В зависимости от состояния окружения (development/production), лог может сохранятся в файл или выводится на экран.

### Состояние (State)
Шаблон Состояние похож на Стратегию, более гибкая ее реализация.
В отличие от Стратегии, в которой экземпляр конкретной стратегии можно передавать только в конструктор использующего ее клиентскоого класса
и для реализаций разных стратегий необходимо создавать разные экземпляры клиентского класса, в шаблоне Состояние у клиентского класса есть 
метод-сеттер, меняющий стратегию. Таким образом, можно создать один экземпляр клиентского класса, передать в конструктор стратегию по умолчанию, а
в дальнейшем, при неоходимости смены стратегии - передать новую в метод (сеттер) этого-же экземпляра клиентского класса.

Пример: Тот же, что и в шаблоне Стратегия - разные способы логгирования данных. В данном примере в логгер передается дефолтная стратегия 
(запись в файл), а при определенных условиях (счетчик > 5) стратегия меняется на вывод на экран. При этом экземпляр логгера остается тот-же. 

### Шаблонный Метод (Template Method)
Шаблонный метод - метод, позволяющий выполнять действия в определенном, неизменном порядке. Внутри метода последовательно вызываются 
другие методы класса, выполняющие какой-то этап общего алгоритма.

Пример:
Отправка уведомлений, можно отправлять разными каналами - email, мессенджеры, смс, пуши и т.д.
Но в каждом способе отправки есть определенный одинаковый набор действий: добавление адресата, добавление заголовка сообщения, 
добавление темы сообщения, отправка сообщения. Все эти действия вызываются последовательно в шаблонном методе send(). 

### Хранитель (Memento)
В паттерне для сохранения состояния объекта используется не свойства, а другой специальный объект - хранитель.
Пример:
Класс ApplicationFormHandler - в него поступают (например, через Inertia или Livewire) данные из заполняемой на 
фронтенде формы заявки. На сервере эти данные обрабатываются, например, проверяется орфография или валидируются поля 
через сторонние API. Периодически данные надо сохранять, даже если форма еще недозаполнена.
Данные сохраняются как массив объектов ApplicationFormMemento. 

### Наблюдатель (Observer)
Шаблон позволяет объектам подписываться (наблюдать) и реагировать на события, происходящие в других объектах.
Пример: 
В блоге публикуются записи (посты). После каждой публикации необходимо выполнить ряд действий: очистить кэш, 
отправить в гугл сигнал об индексации, добавить пост в рассылку и т.д.
Есть класс записи Post, в нем свойство subscribers - массив объектов-подписчиков (наблюдателей), которые должны что-то выполнить после
публикации записи. 
Классы подписчиков реализуют интерфейс PostPublishListeners, в котором указан метод postPublished, обрабатывающий событие публикации.  
В классе Post метод addSubscriber добавляет подписчика (наблюдателя), метод notifySubscribers уведомляет подписчиков о событии (публикации записи) 
путем вызова у каждого подписчика метода postPublished.

### Посетитель (Visitor)
Шаблон позволяет классам реализовывать некий дополнительный, не свойственный им функционал, выполняющийся в отдельных классах-посетителях.
Есть классы-клиенты, выполняющие определенную, специфическую задачу. Необходимо седелать так, что бы они реализовали новую, 
не свойственную им задачу. Можно просто добавить соответствующие методы в каждый клиент, но это не всегда приемлемо (нарушение SRP, OCP и т.д.).
В этом случае делаем новый класс - посетитель, в котором есть реализующий требуемый функционал метод.
В классе-кленте добавляем новый метод, в который передаем как параметр объект посетитителя и вызываем у него реализующий метод.
Таким образом, в клиент вносятся минимальные изменения (принимающий метод), а весь долнительный функционал реализуется в отдельном классе (посетителе).
Пример:
Есть CRM, в которой разные типы записей - account, client, product, supplier и т.д., у каждой записи своя структура.
Необходимо добавить экспорт всех записей в файл. 
Для этого для каждого типа записи создается отдельный посетитель, реализующий интерфейс Visitor с классом export.
В класс запси добавляется метод accept, принимающий параметром объект посетителя и вызывающий его метод export.
В клиентском коде при экспорте у каждого экземпляра записи вызавается метод accept.
Таким образом, всю работу по экспорту делает не запись, а посетитель, запись лишь вызывает его метод.
В данном примере в классах клинтов метод accept можно вынести в базовый класс, так как у него общая для всех клиентов 
реализация, но в реальности, это не всегда подходит и требуется реализовывать метод в каждом классе.   

------------------------------------------------------------------------------------------------------------------
## Структурные (Structural) шаблоны
Предназначены для определения иерархиии классов

### Декоратор (Decorator)
Используется, когда нужно в класс добавить новый фунционал.
Декоратор создает новый класс-обертку над базовым классом, в обертку передается экземпляр базового класса  
и в ней уже имплементируется новая функциональность.
Таким образом вместо наследования (можно было сделать подкласс вместо обертки) используется композиция (класс использует
экземпляр другого класса).

Пример: 
В проекте есть класс `Filter`, фильтрующий определенным образом массив данных (метод `applyFilter`).
Появилась необходимость добавить новый виды фильтрации, например advancedFilter.
Как можно сделать: 
1. Добавить новые методы в класс `Filter`. Это нарушение OCP.
2. Создать для каждого типа фильтрации подкласс, расширяющий `Filter` и в нем переопределить метод фильтрации.
3. Создаем новый класс `DataFilterDecorator`, в который передаем экземпляр базового фильтра и новый фильтр делаем декоратором - 
- новым методом `applyAdvancedFilter`

### Адаптер (Adapter)
Шаблон используется для создания возможности взаимодействия классов с разными интерфейсами,
путем создания дополнительного класса-обертки (адаптора).

Пример: 
Есть некое серверное API, принимющее данные из контактных сайтов в определенном формате (имена и тип полей).
Было выпущенно мобильное приложение, использующее другой формат данных.
Необходимо, что бы API обрабатывало данные так-же и от мобильного приложения.

Решение: 
Данные от мобильного приложения сначала передаются в класс-адаптор, там они переформатируются, а потом уже передаются в обработчик.

### Мост (Bridge)
Наследование заменяется композицией. Если нужно добавить характеристику объекту, то вместо того, что бы создать новый подкласс , 
характеристика передается как экземпляр соответвующего класса. Есть объекты - фигуры (круг, квадрат и т.д.).
Им добавляются цвета. Вместо того, что бы создавать новые подклассы (Круг->КрасныйКруг, Квадрат->ЧерныйКвадрат), цвет передается 
как параметр в конструктор (Круг(Черный), Квадрат(Красный)).

Пример: 
Интернет-магазин, на страницах выводится информация о товаре - описание, цена, валюта, способ доставки и т.д.
Для разных стран информация различается.
Без шаблона нужно делать под каждую страну отдельную страницу.
Используя шаблон Мост можно вынести информацию в отдельный класс - локаль, в котором информация выводится в соответствующем формате. 

### Компоновщик (Composite)
Шаблон используется в тех случаях, когда иерархия классов является древовидной структурой, каждый узел которой может быть 
как отдельным элементом (листом), так и группой элементов (веткой). 
Компоновщик позволяет обращаться к такой структуре как к одному объекту.
Пример: 
На сайте есть динамическое меню (ссылки на страницы), редактируемое из панели администратора. 
Каждый элемент меню может быть как ссылкой, так и группой ссылок (вложенным меню).
Все элементы меню (и ссылки и группы) реализуют общий интерфейс, в котором есть метод render, выводящий элемент на экран.
Группа хранит ссылки как массив и в своем методе render перебирает этот массив и вызывает render у каждого элемента.
Создаем группы ссылок (подменю), отдельные ссылки, добавляем это все в общую группу и вызываем у нее render()
Таким образом, все меню отобразится одним вызовом.

## Ссылки
https://refactoring.guru/ru/design-patterns
https://www.dailycomputerscience.com/post/decorator-design-pattern-in-php