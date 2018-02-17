<?php
class Car
{
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice()
    {
        echo $this->price;
    }
}
$audi = new Car('audi', 10000);
$volvo = new Car('volvo', 5000);
echo $audi->name;
echo ': ';
$audi->getPrice();
echo '<br>';
echo $volvo->name;
echo ': ';
$volvo->getPrice();
echo '<br>----------<br>';
/*-------TV---------*/
class TV
{
    public $model;
    public $resolution;
    public $diagonal;
    public function getTV()
    {
        echo $this->model . ' ' . $this->resolution . ' ' . $this->diagonal;
    }
}
$tvLG = new TV();
$tvLG->model = 'LG';
$tvLG->resolution = '4K';
$tvLG->diagonal = 'black';
$tvLG->getTV();
echo '<br>';
$tvSony = new TV();
$tvSony->model = 'Sony';
$tvSony->resolution = 'FULL HD';
$tvSony->diagonal = 'white';
$tvSony->getTV();
echo '<br>----------<br>';
/*-------Pen---------*/
class Pen
{
    public function __construct($model, $collection, $color) {
        $this->model = $model;
        $this->collection = $collection;
        $this->color = $color;
    }
    public function getPen()
    {
        echo $this->model . ': ' . $this->collection . ' ' . $this->color;
    }
}
$penParker = new Pen('Parker', 'Jotter', 'blue');
$penParker->getPen();
echo '<br>';
$penPero = new Pen('Pero','Caran','red');
$penPero->getPen();
echo '<br>----------<br>';
/*------Duck-------*/
class Duck
{
    public $breed;
    public $dwelling;
    public function __construct($breed, $dwelling) {
        $this->breed = $breed;
        $this->dwelling = $dwelling;
    }
}
$duckChina = new Duck('Пекинская утка', 'Китай');
echo $duckChina->breed;
echo "<br>";
$duckRussia = new Duck('Русская утка', 'Россия');
echo $duckRussia->dwelling;
echo '<br>----------<br>';
/*------Goods-------*/
class Goods
{
    public $name;
    public $category;
    public $price;
    public function getGoods()
    {
        echo $this->name . ' ' . $this->category . ' ' . $this->price;
    }
}
$goodsApple = new Goods();
$goodsApple->name = 'iPhone 7S';
$goodsApple->category = 'Телефон';
$goodsApple->price = 25000;
echo $goodsApple->name;
echo "<br>";
$goodsSamsung = new Goods();
$goodsSamsung->name = 'Samsung S8';
$goodsSamsung->category = 'Телефон';
$goodsSamsung->price = 24000;
echo $goodsSamsung->category;
