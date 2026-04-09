<?php
abstract class Figure{
	protected float $square;
	protected string $color;
	protected int $sideCount;

	abstract public function infoAbout(); 
}
?>