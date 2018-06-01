<?php

echo "1. Полиморфизм- это взаимозаменяемость объектов с одинаковым классом или интерфейсом. Полиморфизмом является свойство унаследованных классов иметь одинаковые методы, которые будут работать по-разному в контексте объектов. Полиморфизм позволяет родительском классу определять общее поведение всех своих потомков. Мы используем один и тот же код для объектов разных классов, в последствии потомки могут переопределять эти методы, т.е. задавать индивидуальное поведение данных методов."."<br>"."Наследование - это свойство классов расширяться. Дочерний класс наследует все public и protected методы и объекты родительского класса. Эти методы и объекты могут быть переопределены, или они могут сохранять свое исходное значение. В дочерний класс можно добавлять дополнительные объекты и методы, тем самым расширяя функциональность класса-родителя."."<br>";

echo "2. Интерфейс похож на класс, но он не может содержать код. Интерфейс может определять имена методов и аргументов, но не содержание методов. Один класс может реализовать несколько интерфейсов. Также и абстрактные классы могут содержать лишь описание абстрактных методов. Абстрактные методы не имеют тела или реализации (как интерфейсы), они лишь описывают, что должен уметь делать объект, а как он это будет делать – проблема наследников абстрактного класса."."<br>"."В абстрактном классе можно объявлять и обычные методы, которые могут быть унаследованы. Интерфейс, в отличие от абстрактного класса, не может содержать методы, имеющие реализацию (public) – он описывает только чистый функционал в виде методов, которые должны реализовать его наследники."."<br>"."В интерфейсах нет наследования. В интерфейсах есть функционал имплементации."."<br>"."Если в классе, который реализует интерфейс, не реализованы все методы интерфейса, то он должен быть абстрактным. Соответственно, интерфейс может быть 'надстройкой' абстрактного класса."."<br>"."Интерфейс нужен обычно когда описывается только протокол (порядок) взаимодействия. А абстрактный класс нужен, когда нужно семейство классов, у которых есть много общего."."<br>";

class Main
{
	public $name;
	public $price;

	public function  __construct($name, $price)
	{
		$this->name=$name;
		$this->price=$price;
	}
}

class Car extends Main
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

$bmw = new Car ('BMW M3', 7000000);
$bmw->setCountry('German')->setSpeed(350);
$mazda = new Car ('Mazda 3',  1500000);
$mazda->setCountry('Japan')->setSpeed(220);

echo "<pre>";
print_r($bmw);
echo "</pre>";
echo "<pre>";
print_r($mazda);
echo "</pre>";

class TV extends Main
{
	public $size;

	public function setSize($size)
	{
		$this->size=$size;
		return $this;		
	}
}

$lg = new TV ('LG', 35000);
$lg->setSize(40);
$samsung = new TV ('Samsung', 50000);
$samsung->setSize(45);


echo "<pre>";
print_r($lg);
echo "</pre>";
echo "<pre>";
print_r($samsung);
echo "</pre>";

class Pen extends Main
{
	public $color;

	public function setColor($color)
	{
		$this->color=$color;
		return $this;		
	}
}

$colop = new Pen ('Colop', 30);
$colop->setColor('white');
$parker = new Pen ('Parker',  1000);
$parker->setColor('black');

echo "<pre>";
print_r($colop);
echo "</pre>";
echo "<pre>";
print_r($parker);
echo "</pre>";

class Duck extends Main
{
	public $weight;

	public function setWeight($weight)
	{
		$this->weight=$weight;
		return $weight;		
	}
}

$one = new Duck ('fried', 450);
$one->setWeight(1500);
$two = new Duck ('braised', 300);
$two->setWeight(1000);

echo "<pre>";
print_r($one);
echo "</pre>";
echo "<pre>";
print_r($two);
echo "</pre>";

class Product extends Main
{
	public $season;

	public function setSeasons($season)
	{
		$this->season=$season;
		return $season;
	}
}

$guess = new Product ('Guess', 15000);
$guess->setSeasons ("2017/2018");
$dkny = new Product ('DKNY', 22000);
$guess->setSeasons ("2018/2019");

echo "<pre>";
print_r($guess);
echo "</pre>";
echo "<pre>";
print_r($dkny);
echo "</pre>";

?>