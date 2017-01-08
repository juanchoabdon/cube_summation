<?php

//use App\Models;

class CubeTest extends TestCase {

	function test1(){
		$cube = new App\Models\Cube(4);

		$cube->update(2, 2, 2, 4);
		$this->assertEquals(4, $cube->query(1, 1, 1, 3, 3, 3));
	}

	function test2(){
		$cube = new App\Models\Cube(4);

		$cube->update(2, 2, 2, 4);
		$cube->update(1, 1, 1, 23);

		$this->assertEquals(4, $cube->query(2, 2, 2, 4, 4, 4));
	}


	function test3(){
		$cube = new App\Models\Cube(4);

		$cube->update(2, 2, 2, 4);
		$cube->update(1, 1, 1, 23);

		$this->assertEquals(27, $cube->query(1, 1, 1, 3, 3, 3));
	}

	function test4(){
		$cube = new App\Models\Cube(4);

		$cube->update(2, 2, 2, 1);

		$this->assertEquals(0, $cube->query(1, 1, 1, 1, 1, 1));
	}

	
}
