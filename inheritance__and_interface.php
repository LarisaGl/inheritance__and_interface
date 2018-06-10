<?php

    echo "1. Полиморфизм- это взаимозаменяемость объектов с одинаковым классом или интерфейсом. Полиморфизмом является свойство унаследованных классов иметь одинаковые методы, которые будут работать по-разному в контексте объектов. Полиморфизм позволяет родительском классу определять общее поведение всех своих потомков. Мы используем один и тот же код для объектов разных классов, в последствии потомки могут переопределять эти методы, т.е. задавать индивидуальное поведение данных методов."."<br>"."Наследование - это свойство классов расширяться. Дочерний класс наследует все public и protected методы и объекты родительского класса. Эти методы и объекты могут быть переопределены, или они могут сохранять свое исходное значение. В дочерний класс можно добавлять дополнительные объекты и методы, тем самым расширяя функциональность класса-родителя."."<br>";

    echo "2. Интерфейс похож на класс, но он не может содержать код. Интерфейс может определять имена методов и аргументов, но не содержание методов. Один класс может реализовать несколько интерфейсов. Также и абстрактные классы могут содержать лишь описание абстрактных методов. Абстрактные методы не имеют тела или реализации (как интерфейсы), они лишь описывают, что должен уметь делать объект, а как он это будет делать – проблема наследников абстрактного класса."."<br>"."В абстрактном классе можно объявлять и обычные методы, которые могут быть унаследованы. Интерфейс, в отличие от абстрактного класса, не может содержать методы, имеющие реализацию (public) – он описывает только чистый функционал в виде методов, которые должны реализовать его наследники."."<br>"."В интерфейсах нет наследования. В интерфейсах есть функционал имплементации."."<br>"."Если в классе, который реализует интерфейс, не реализованы все методы интерфейса, то он должен быть абстрактным. Соответственно, интерфейс может быть 'надстройкой' абстрактного класса."."<br>"."Интерфейс нужен обычно когда описывается только протокол (порядок) взаимодействия. А абстрактный класс нужен, когда нужно семейство классов, у которых есть много общего."."<br>";

    interface mainInt {
        public function  __construct($name, $price, $discount);
        public function getPrice ();	
    }

    interface carInt extends mainInt {
    	public function setCountry($country);
    	public function setSpeed($speed);
    }

    interface tvInt extends mainInt {
    	public function setSize($size);
    }

    interface penInt extends mainInt {
    	public function setColor($color);
    }

    interface duckInt extends mainInt {
    	public function setWeight($weight);
    }

    interface prodInt extends mainInt {
    	public function setSeasons($season);
    }

    class Main
    {
        public $name;
        public $price;
        public $discount;

        public function  __construct($name, $price, $discount)
        {
            $this->name=$name;
            $this->price=$price;
            $this->discount=$discount;
        }

        public function getPrice () {
            return round ($this->price - ($this->price * $this->discount / 100));
        }
    }

    class Car extends Main implements carInt
    {
        public $country;
        public $speed;

        public function setCountry($country)
        {
            $this->country=$country;
            return $this;		
        }

        public function setSpeed($speed)
        {
            $this->speed=$speed;
            return $this;
        }
    }

    $bmw = new Car ('BMW M3', 7000000, 10);
    $bmw->setCountry('German')->setSpeed(350);
    echo "<pre>";
    print_r($bmw);
    echo "</pre>";
    echo "Ваша цена:".$bmw->getPrice();

    $mazda = new Car ('Mazda 3',  1500000, 15);
    $mazda->setCountry('Japan')->setSpeed(220);
    echo "<pre>";
    print_r($mazda);
    echo "</pre>";
    echo "Ваша цена:".$mazda->getPrice();

    class TV extends Main implements tvInt
    {
        public $size;

        public function setSize($size)
        {
            $this->size=$size;
            return $this;		
        }
    }

    $lg = new TV ('LG', 35000, 5);
    $lg->setSize(40);
    echo "<pre>";
    print_r($lg);
    echo "</pre>";
    echo "Ваша цена:".$lg->getPrice();

    $samsung = new TV ('Samsung', 50000, 15);
    $samsung->setSize(45);    
    echo "<pre>";
    print_r($samsung);
    echo "</pre>";
    echo "Ваша цена:".$samsung->getPrice();

    class Pen extends Main implements penInt
    {
        public $color;

        public function setColor($color)
        {
            $this->color=$color;
            return $this;		
        }
    }

    $colop = new Pen ('Colop', 30, 3);
    $colop->setColor('white');
    echo "<pre>";
    print_r($colop);
    echo "</pre>";
    echo "Ваша цена:".$colop->getPrice();

    $parker = new Pen ('Parker',  1000, 7);
    $parker->setColor('black');    
    echo "<pre>";
    print_r($parker);
    echo "</pre>";
    echo "Ваша цена:".$parker->getPrice();

    class Duck extends Main implements duckInt
    {
        public $weight;

        public function setWeight($weight)
        {
            $this->weight=$weight;
            return $weight;		
        }
    }

    $one = new Duck ('fried', 450, 1);
    $one->setWeight(1500);
    echo "<pre>";
    print_r($one);
    echo "</pre>";
    echo "Ваша цена:".$one->getPrice();

    $two = new Duck ('braised', 300, 2);
    $two->setWeight(1000);    
    echo "<pre>";
    print_r($two);
    echo "</pre>";
    echo "Ваша цена:".$two->getPrice();

    class Product extends Main implements prodInt
    {
        public $season;

        public function setSeasons($season)
        {
            $this->season=$season;
            return $season;
        }
    }

    $guess = new Product ('Guess', 15000, 20);
    $guess->setSeasons ("2017/2018");
    echo "<pre>";
    print_r($guess);
    echo "</pre>";
    echo "Ваша цена:".$guess->getPrice();

    $dkny = new Product ('DKNY', 22000, 25);
    $guess->setSeasons ("2018/2019");    
    echo "<pre>";
    print_r($dkny);
    echo "</pre>";
    echo "Ваша цена:".$dkny->getPrice();

?>