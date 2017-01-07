<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Cube;

class CubeCtrl extends Controller
{

   // Acción que ejecuta las operaciones según el input  y retorna un json con el output
	public function  summation(Request $input){

		$output = "";
	foreach($input->input('inputs') as $inputs){
			$cube = new Cube($inputs["n"]);


			foreach($inputs["operations"] as $operation){

				$params = explode(" ", $operation["params"]);

				if($operation["operation_name"] == "query"){
					$output = $cube->query($params[0], $params[1], $params[2], $params[3], $params[4], $params[5]) . ",";
				}
				elseif($operation["operation_name"] == "update"){
					$cube->update($params[0], $params[1], $params[2], $params[3]);
				}
			}
		}
 
		return response()->json(["output" => $output]);
	}
}
