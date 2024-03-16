<?php

// Видео 12. ЗАДАНИЕ:
//1. перечислить любимые 4-5 хобби (создать классы)
//2. создать объекты классов
//3. вывести результаты выполнения созданных методов

//class Hobby_1 {
//    public $name = 'swimming';
//
//    public $agePractice = 2;
//
//    public  $haveCoach = false;
//
//    public function ExpressYourImpress()
//    {
//        echo 'Swimming is my life!';
//    }
//}
//
//class Hobby_2 {
//    public $name = 'dancing';
//
//    public $agePractice = 0.1;
//
//    public  $haveCoach = true;
//
//    public function ExpressYourImpress()
//    {
//        echo 'I can really dance';
//    }
//}
//
//class Hobby_3 {
//    public $name = 'lenitca';
//
//    public $agePractice = 33;
//
//    public  $haveCoach = false;
//
//    public function ExpressYourImpress()
//    {
//        echo 'Ya proffesionalny lenivec';
//    }
//}
//
//class Hobby_4 {
//    public $name = 'Carving';
//
//    public $agePractice = 1;
//
//    public  $haveCoach = true;
//
//    public function ExpressYourImpress()
//    {
//        echo 'Wood carving calms me down';
//    }
//}

//$hobby1 = new Hobby_1();
//echo $hobby1->name;
//echo $hobby1->agePractice;
//echo $hobby1->haveCoach;
//$hobby1->ExpressYourImpress();
//
//$hobby2 = new Hobby_2();
//echo $hobby2->name;
//echo $hobby2->agePractice;
//echo $hobby2->haveCoach;
//$hobby2->ExpressYourImpress();
//
//$hobby3 = new Hobby_3();
//echo $hobby3->name;
//echo $hobby3->agePractice;
//echo $hobby3->haveCoach;
//$hobby3->ExpressYourImpress();
//
//$hobby4 = new Hobby_4();
//echo $hobby4->name;
//echo $hobby4->agePractice;
//echo $hobby4->haveCoach;
//$hobby4->ExpressYourImpress();


// Видео 13. ЗАДАНИЕ:
//1. Описать 4-5 животных (создать классы)
//2. Придумать Имя и "засетить" его
//3. Вывести на экран

//class Animal{
//    public $animalType = 'Croc';
//    public $animalAge = 56;
//    public $animalColor = 'green';
//
//    public function setAnimalType($animalType)
//    {
//        $this->animalType = $animalType;
//    }
//    public function setAnimalAge($animalAge)
//    {
//        $this->animalAge = $animalAge;
//    }
//    public function setAnimalColor($animalColor)
//    {
//        $this->animalColor = $animalColor;
//    }
//}


//$animal = new Animal();
//$animal2 = new Animal();
//$animal3 = new Animal();
//$animal4 = new Animal();
//
//$animal2->setAnimalType('horse');
//$animal2->setAnimalColor('black');
//$animal->setAnimalType('dog');
//
//$animal3 = $animal;
//
//echo $animal->animalType;
//echo $animal->animalColor;
//echo $animal2->animalType;
//echo $animal2->animalColor;
//echo $animal3->animalType;
//
//$animal4->setAnimalType('cat');
//
//echo $animal4->animalType;


// Видео 14. ЗАДАНИЕ:
//1. создать 5 точек ресторанов быстрого питания
//2. каждому ресторану описать 5 видов блюд для меню

//class FastFood{
//    public $soup;
//    public $whatMeat;
//    public $vegan;
//    public $drink;
//    public $desert;
//
//    public function __construct($soup, $whatMeat, $vegan, $drink, $desert)
//    {
//        $this->soup = $soup;
//        $this->whatMeat = $whatMeat;
//        $this->vegan = $vegan;
//        $this->drink = $drink;
//        $this->desert = $desert;
//    }
//
//}
//
//$fastFood = new FastFood('Борщ', 'Курица карри', 'Кукуруза','Вода','Мороженое');
//$fastFood2 = new FastFood('Щи', 'Рулька', 'Рис с капустой','Чай','Мороженое');
//$fastFood3 = new FastFood('Рассольник', 'Ребрышки', 'Фалафель','Кофе','Шоколадный фондан');
//$fastFood4 = new FastFood('Уха', 'Крылышки', 'нет блюд для веганов','Вода','Пироженое');
//$fastFood5 = new FastFood('нет супов', 'нет мясных блюд', 'Катофельное пюре','Кола','Банан');


//foreach ($fastFood as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($fastFood2 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($fastFood3 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($fastFood4 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($fastFood5 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}

// Видео 15. ЗАДАНИЕ:
//1. создать Человека (класс)
//2. придумать 10 разновидностей профессий и "отнаследоваться" от Человека

//class Person{
//    public $name = 'Mark';
//    public $age = 35;
//    public $job = 'Developer';
//    public function sayHello()
//    {
//        echo 'Hello';
//    }
//}
//
//class CEO extends Person {
//    public function work()
//    {
//        echo 'CEO is working';
//    }
//}
//class President extends Person {
//    public function work()
//    {
//        echo 'President is working';
//    }
//}
//class TeamLead extends Person {
//    public function work()
//    {
//        echo 'TeamLead is working';
//    }
//}
//class AccountManager extends Person {
//    public function work()
//    {
//        echo 'AccountManager is working';
//    }
//}
//class MiddleManager extends Person {
//    public function work()
//    {
//        echo 'MiddleManager is working';
//    }
//}
//class AuditControl extends Person {
//    public function work()
//    {
//        echo 'AuditControl is working';
//    }
//}
//class Accountant extends Person {
//    public function work()
//    {
//        echo 'Accountant is working';
//    }
//}
//class Designer extends Person {
//    public function work()
//    {
//        echo 'Designer is working';
//    }
//}
//class Journalist extends Person {
//    public function work()
//    {
//        echo 'Journalist is working';
//    }
//}
//class Lawyer extends Person {
//    public function work()
//    {
//        echo 'Lawyer is working';
//    }
//}
//class FinanceManager extends Person {
//    public function work()
//    {
//        echo 'FinanceManager is working';
//    }
//}

//$lawyer = new Lawyer();
//echo $lawyer->name;


// Видео 16. ЗАДАНИЕ:
//1. создать классы 6-8 растений
//2. придумать "старший\общий класс", туда записать все общие свойства
//3. создать объекты растений и вывести свойства

//class Plant{
//    public $kingdom;
//    public $family;
//    public $genus;
//
//    public function __construct($kingdom, $family, $genus)
//    {
//        $this->kingdom = $kingdom;
//        $this->family = $family;
//        $this->genus = $genus;
//    }
//}
//
//class Chamomilla extends Plant {
//    public function textAbout()
//    {
//        echo 'Chamomile is a flowering plant.'. "\n";
//    }
//}
//class Rose extends Plant {
//    public function textAbout()
//    {
//        echo 'Rose is a flowering plant.'. "\n";
//    }
//}
//class Marattiaceae extends Plant {
//    public function textAbout()
//    {
//        echo 'Marattiaceae is a none-flowering plant.'. "\n";
//    }
//}
//class Ambuchanania extends Plant {
//    public function textAbout()
//    {
//        echo 'Ambuchanania is a none-flowering plant.'. "\n";
//    }
//}
//
//$chamomilla = new Chamomilla('Plantae', 'Asteraceae', 'Matricaria');
//$rose = new Rose('Plantae', 'Rosaceae', 'Rosa');
//$marattiaceae = new Marattiaceae('Plantae', 'Marattiaceae', '-');
//$ambuchanania = new Ambuchanania('Plantae', 'Ambuchananiaceae', 'Ambuchanania');

//$chamomilla->textAbout();
//echo 'Kingdom:' . $chamomilla->kingdom . "\n";
//echo 'Family:' . $chamomilla->family . "\n";
//echo 'Genus:' . $chamomilla->genus . "\n";
//
//$rose->textAbout();
//echo 'Kingdom:' . $rose->kingdom . "\n";
//echo 'Family:' . $rose->family . "\n";
//echo 'Genus:' . $rose->genus . "\n";
//
//$marattiaceae->textAbout();
//echo 'Kingdom:' . $marattiaceae->kingdom . "\n";
//echo 'Family:' . $marattiaceae->family . "\n";
//echo 'Genus:' . $marattiaceae->genus . "\n";
//
//$ambuchanania->textAbout();
//echo 'Kingdom:' . $ambuchanania->kingdom . "\n";
//echo 'Family:' . $ambuchanania->family . "\n";
//echo 'Genus:' . $ambuchanania->genus . "\n";


// Видео 17. ЗАДАНИЕ:
//1. создать еще одну должность
//2. добавить свойство "зарплата"
//3. "определить его в конструкторе"


//class Person{
//    public $name;
//    public $age;
//    public $job;
//
//    public function __construct($name, $age, $job)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->job = $job;
//    }
//}
//
//class TopManager extends Person {
//    public $salary;
//
//    public function __construct($name, $age, $job, $salary)
//    {
//        parent::__construct($name, $age, $job);
//        $this->salary = $salary;
//    }
//
//    public function work()
//    {
//        echo 'TopManager is working';
//    }
//}
//
//$topManager = new TopManager('Tony','45','Top', '5000');
//echo $topManager->salary;
//print_r($topManager);


// Видео 18. ЗАДАНИЕ:
//1. создать абстрактный класс "Здание" со свойствами: кол-во этажей, жилое здание или нет, улица, на которой находится (можно придумать + свои свойства)
//2. создать от абстрактного класса классы-наследники (5-6 классов)
//3. вывести свойства объектов


abstract class Bilding
{
    public $bildingGroup;
    public $florAmount;
    public $wallMaterial;
    public $yearOfConstruction;
    public $buro;

    public function __construct($bildingGroup, $florAmount, $wallMaterial, $yearOfConstruction, $buro)
    {
        $this->bildingGroup = $bildingGroup;
        $this->florAmount = $florAmount;
        $this->wallMaterial = $wallMaterial;
        $this->yearOfConstruction = $yearOfConstruction;
        $this->buro = $buro;
    }
}

class Public_Bilding extends Bilding
{
    public $publicType;

    public function __construct($bildingGroup, $florAmount, $wallMaterial, $yearOfConstruction, $buro, $publicType)
    {
        parent::__construct($bildingGroup, $florAmount, $wallMaterial, $yearOfConstruction, $buro);
        $this->publicType = $publicType;
    }
}

class Industrial_Bilding extends Bilding
{
    public $industrialType;

    public function __construct($bildingGroup, $florAmount, $wallMaterial, $yearOfConstruction, $buro, $industrialType)
    {
        parent::__construct($bildingGroup, $florAmount, $wallMaterial, $yearOfConstruction, $buro);
        $this->industrialType = $industrialType;
    }
}

class Gov_Bilding extends Bilding
{
    public $GovType;

    public function __construct($bildingGroup, $florAmount, $wallMaterial, $yearOfConstruction, $buro, $GovType)
    {
        parent::__construct($bildingGroup, $florAmount, $wallMaterial, $yearOfConstruction, $buro);
        $this->GovType = $GovType;
    }
}

class Pet_Bilding extends Bilding
{
    public $PetType;

    public function __construct($bildingGroup, $florAmount, $wallMaterial, $yearOfConstruction, $buro, $PetType)
    {
        parent::__construct($bildingGroup, $florAmount, $wallMaterial, $yearOfConstruction, $buro);
        $this->PetType = $PetType;
    }
}

$sohoHouse = new Public_Bilding('residential', 15, 'concrete', '2010', 'Morgan Ltd', 'residential');
$angelHospital = new Public_Bilding('public', 3, 'brick', '1956', 'ArchiGroup Ltd', 'hospitals');
$kotelnaya = new Industrial_Bilding('Industrial', 2, 'concrete', '1985', 'ArchiGroup Ltd', 'workshops');
$kotelnaya34 = new Industrial_Bilding('Industrial', 3, 'concrete', '2001', 'ArchiGroup Ltd', 'workshops');
$bolshoyTheatre = new Public_Bilding('public', 4, 'brick', '1990', 'S&R Ltd', 'theaters');
$ippodrom = new Pet_Bilding('public', 1, 'wood', '1999', 'LoyalHorse Ltd', 'Horse');

//foreach ($sohoHouse as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($angelHospital as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($kotelnaya as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($kotelnaya34 as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($bolshoyTheatre as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}
//foreach ($ippodrom as $key => $item){
//    echo $key . ': ';
//    echo $item . "\n";
//}


//Видео 19.
//ЗАДАНИЕ:
//1. создать класс "Калькулятор"
//2. создать 10 статиических методов вычесления
//3. вызвать статические методы

class Calc
{
    public static function summa($a, $b)
    {
        echo $a + $b;
    }

    public static function division($c, $g)
    {
        echo $c / $g;
    }

    public static function sum_div($aa, $cc)
    {
        echo ($aa + $cc) / $cc;
    }

    public static function minus_rise($aa, $cc)
    {
        echo ($aa - $cc) ** $cc;
    }

    public static function rise_div($aa, $cc)
    {
        echo $aa ** $aa / $cc;
    }

    public static function div_rem($aa, $cc)
    {
        echo ($aa / $cc) % 2;
    }

    public static function sum_sqrt($aa, $cc)
    {
        echo sqrt($aa + $cc);
    }
}

//Calc::summa(10,30);
//Calc::division(60,5);
//Calc::sum_div(95,8);
//Calc::minus_rise(5,2);
//Calc::rise_div(5,3);
//Calc::div_rem(10,5);
//Calc::sum_sqrt(20,5);


//Видео 20.
//ЗАДАНИЕ:
//1. создать интерфейс для самолетов со списком методов
//2. создать классы-самолеты, реализующие интерфейс
//3. вывести на экран, что делает каждый самолет

interface Airplane
{
    public function zapravka();

    public function tehOsmotr();

    public function zagruzkaBagage();

    public function vzlet();

    public function posadka();
}

class Boing_Aeroflot implements Airplane
{

    public function zapravka()
    {
        echo 'Идет Заправка самолета Аэрофлот';
    }

    public function tehOsmotr()
    {
        echo 'Теххосмотр боинга проведен';
    }

    public function zagruzkaBagage()
    {
        echo 'Звгрузка багажа закончена';
    }

    public function vzlet()
    {
        echo 'Ожидается выход на взлетную полосу';
    }

    public function posadka()
    {
        echo 'Ожидается посадка на взлетную полосу';
    }
}

class Boing_S7 implements Airplane
{

    public function zapravka()
    {
        echo 'Идет Заправка самолета S7';
    }

    public function tehOsmotr()
    {
        echo 'Теххосмотр боинга проведен';
    }

    public function zagruzkaBagage()
    {
        echo 'Звгрузка багажа закончена';
    }

    public function vzlet()
    {
        echo 'Ожидается выход на взлетную полосу';
    }

    public function posadka()
    {
        echo 'Ожидается посадка на взлетную полосу';
    }
}

//$boing747 = new Boing_Aeroflot();
//$boing780 = new Boing_S7();
//echo $boing747->vzlet();
//echo $boing780->zapravka();

//Видео 21.
//ЗАДАНИЕ:
//1. своими словами привести примеры, когда нам следует использовать private, protected, public
//Private - нужно исспользовать когда мы устанавливаем свойства к которым ниукого ни у младших разрабов ни у пользователя не должно быть доступа на изменение, например банковский счет. его не могту изменять пользователи.
//Protected - дает доступ к свойствам класса подкласам. Думаю на примрее каталога можно использовать, когда структуру каталога можно дополнять на уровне подклассов, но пользоватеь не может менять Стурктуру и задавать новые значения..
//Public - Это доступ к свойствам на всех урвонях с возможностью внесения иземенений в переменные. Например поменять имя или возраст.

