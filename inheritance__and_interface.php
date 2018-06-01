<?php

echo "1. Полиморфизм- это взаимозаменяемость объектов с одинаковым классом или интерфейсом. Полиморфизмом является свойство унаследованных классов иметь одинаковые методы, которые будут работать по-разному в контексте объектов. Полиморфизм позволяет родительском классу определять общее поведение всех своих потомков. Мы используем один и тот же код для объектов разных классов, в последствии потомки могут переопределять эти методы, т.е. задавать индивидуальное поведение данных методов."."<br>"."Наследование - это свойство классов расширяться. Дочерний класс наследует все public и protected методы и объекты родительского класса. Эти методы и объекты могут быть переопределены, или они могут сохранять свое исходное значение. В дочерний класс можно добавлять дополнительные объекты и методы, тем самым расширяя функциональность класса-родителя."."<br>";

echo "2. Интерфейс похож на класс, но он не может содержать код. Интерфейс может определять имена методов и аргументов, но не содержание методов. Один класс может реализовать несколько интерфейсов. Также и абстрактные классы могут содержать лишь описание абстрактных методов. Абстрактные методы не имеют тела или реализации (как интерфейсы), они лишь описывают, что должен уметь делать объект, а как он это будет делать – проблема наследников абстрактного класса."."<br>"."В абстрактном классе можно объявлять и обычные методы, которые могут быть унаследованы. Интерфейс, в отличие от абстрактного класса, не может содержать методы, имеющие реализацию (public) – он описывает только чистый функционал в виде методов, которые должны реализовать его наследники."."<br>"."В интерфейсах нет наследования. В интерфейсах есть функционал имплементации."."<br>"."Если в классе, который реализует интерфейс, не реализованы все методы интерфейса, то он должен быть абстрактным. Соответственно, интерфейс может быть 'надстройкой' абстрактного класса."."<br>"."Интерфейс нужен обычно когда описывается только протокол (порядок) взаимодействия. А абстрактный класс нужен, когда нужно семейство классов, у которых есть много общего."."<br>";

class Main
{
	public $model;
	public $price;

	public setModel($model)
	{
		$this->model=$model;
		return $this;		
	}

	public setPrice($price)
	{
		$this->price=$price;
		return $this;
	}
}

class Car extends Main
{
	public $color;
	public $speed;

	public setColor($color)
	{
		$this->color=$color;
		return $this;		
	}

	public setSpeed($speed)
	{
		$this->speed=$speed;
		return $this;
	}
}

$bmw = new Car ('BMW M3', 'blue', 350, 7000000);
$mazda = new Car ('Mazda 3', 'white', 220, 1500000);

echo "<pre>";
print_r($bmw);
echo "</pre>";
echo "<pre>";
print_r($mazda);
echo "</pre>";

class TV
{
	public $size;

	public function __construct($model, $size, $price)
	{
		$this->model=$model;
		$this->size=$size;
		$this->price=$price;
	}
}

$lg = new TV ('LG', 40, 35000);
$samsung = new TV ('Samsung', 45, 50000);

echo "<pre>";
print_r($lg);
echo "</pre>";
echo "<pre>";
print_r($samsung);
echo "</pre>";

class Pen
{
	public $color;

	public function __construct($model, $color, $price)
	{
		$this->model=$model;
		$this->color=$color;
		$this->price=$price;
	}
}

$colop = new Pen ('Colop', 'white', 30);
$parker = new Pen ('Parker', 'black', 1000);

echo "<pre>";
print_r($colop);
echo "</pre>";
echo "<pre>";
print_r($parker);
echo "</pre>";

class Duck
{
	public $weight;

	public function __construct($price, $weight)
	{
		$this->price=$price;
		$this->weight=$weight;
	}
}

$one = new Duck ('white', 450, 1500);
$two = new Duck ('black', 300, 1000);

echo "<pre>";
print_r($one);
echo "</pre>";
echo "<pre>";
print_r($two);
echo "</pre>";

class Product
{
	public $color;

	public function __construct($model, $color, $price)
	{
		$this->model=$model;
		$this->color=$color;
		$this->price=$price;
	}
}

$guess = new Product ('Guess', 'blue', 15000);
$dkny = new Product ('DKNY', 'red', 22000);

echo "<pre>";
print_r($guess);
echo "</pre>";
echo "<pre>";
print_r($dkny);
echo "</pre>";

?>