<?php
interface AreaCalculator
{
	public function getArea();
}

abstract class Figure
{
	protected float $square;
	protected string $color;
	protected int $sideCount;

	public function __construct(string $color, int $sideCount)
	{
		$this->color = $color;
		$this->sideCount = $sideCount;
		$this->square = 0;
	}

	abstract public function infoAbout(); 
}

class Rectangle extends Figure implements AreaCalculator
{
	private float $a;
	private float $b;
	private const SIDES_COUNT = 4;

	public function __construct(float $a, float $b, string $color)
	{
		parent::__construct($color, self::SIDES_COUNT);
		$this -> a=$a;
		$this -> b=$b;
	}

	public function getArea()
	{
		$this->square = $this->a * $this->b;
		return round($this->square, 2);
	}

	public function infoAbout()
	{
		return "Это класс прямоугольника. У него {$this->sideCount} стороны.";
	}
}

class Square extends Figure implements AreaCalculator
{
	private float $a;
	private const SIDES_COUNT = 4;

	public function __construct(float $a, string $color)
	{
		parent::__construct($color, self::SIDES_COUNT);
		$this -> a=$a;
	}

	public function getArea()
	{
		$this->square = $this->a * $this ->a;
		return round($this->square, 2);
	}

	public function infoAbout()
	{
		return "Это класс квадрат. У него {$this->sideCount} стороны.";
	}
}

class Triangle extends Figure implements AreaCalculator
{
	private float $a;
	private float $b;
	private float $c;
	private const SIDES_COUNT = 3;

	public function __construct(float $a, float $b, float $c, string $color)
	{
		parent::__construct($color, self::SIDES_COUNT);
		$this -> a=$a;
		$this -> b=$b;
		$this -> c=$c;
	}

	public function getArea()
	{
		$p = ($this->a + $this->b + $this->c) / 2;
		$this->square = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
		return round($this->square, 2);
	}
	
	public function infoAbout()
	{
		return "Это класс треугольник. У него {$this->sideCount} стороны.";
	}
}

$rect1 = new Rectangle(5, 10, "Красный");
$rect2 = new Rectangle(3, 7, "Синий");

$sqr1 = new Square(4, "Зеленый");
$sqr2 = new Square(6, "Желтый");

$trg1 = new Triangle(3, 4, 5, "Оранжевый");
$trg2 = new Triangle(5, 6, 7, "Фиолетовый");

$figures = [$rect1, $rect2, $sqr1, $sqr2, $trg1, $trg2];

foreach ($figures as $figure) 
{
	echo $figure->infoAbout() . "<br>";
	echo "Площадь: " . $figure->getArea() . "<br>";
}
?>