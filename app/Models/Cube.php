<?php

namespace App\Models;

class Cube{

	private $cube;

	const MIN_VALUE = -1000000000;
	const MAX_VALUE = 1000000000;
	const MAX_SIZE = 100;

	public function __construct($size, $value = 0){
		if($size > self::MAX_SIZE){
			throw new \Exception(sprintf("El tamaño debe ser igual o menor a %d", self::MAX_SIZE));

		}
		$this->cube = array_fill(0, $size, array_fill(0, $size, array_fill(0, $size, 0)));
	}

	// Hace update a las coordenadas según $value.
	public function update($x, $y, $z, $value){

		if(!$this->validate_coordinates($x, $y, $z)){
			throw new \Exception(sprintf("x, y & z tienen que ser en un rango de 1 - %d", count($this->cube)), 2);

		}
		if(!$this->validate_value($value)){
			throw new \Exception(sprintf("Debe ser un rango entre %d y %d", self::MIN_VALUE, self::MAX_VALUE));
		}

		// Define (1,1,1)
		$x = $this->less_one($x);
		$y = $this->less_one($y);
		$z = $this->less_one($z);

		$this->cube[$x][$y][$z] = $value;
		return $this;
	}


	  //Caclula la suma de los valores segun sus cordenadas x1, x2 , y1 , y2 etc..
	public function query($x1, $y1, $z1, $x2, $y2, $z2){

		if(! $this->validate_range($x1, $y1, $z1, $x2, $y2, $z2)){
			throw new \Exception("El rango no es valido");
		}

		$x1 = $this->less_one($x1);
		$y1 = $this->less_one($y1);
		$z1 = $this->less_one($z1);
		$x2 = $this->less_one($x2);
		$y2 = $this->less_one($y2);
		$z2 = $this->less_one($z2);

		$sum = 0;

		for($i = $x1; $i <= $x2; $i++){
			for($j = $y1; $j <= $y2; $j++){
				for($k = $z1; $k <= $z2; $k++){
					$sum += $this->cube[$i][$j][$k];
				}
			}
		}
		return $sum;
	}
