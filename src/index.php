<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
require('functions.inc.php');

$output = array(
	"error" => false,
	"string" => "",
	"answer" => 0,
	"author" => "Ross Stewart"
);

$x = $_REQUEST['x'];
$y = $_REQUEST['y'];



if(is_null($x) || is_null($y)){
	if(is_null($x) && is_null($y)){

		http_response_code(400);
				$output['string']= "value of x and y are both null";
				$output['error']=true;
				$output['answer']=null;
		echo json_encode($output);

	}else{
		if(is_null($x)){

			http_response_code(400);
				$output['string']= "value of x is null";
				$output['error']=true;
				$output['answer']=null;
			echo json_encode($output);

		}
		if(is_null($y)){

			http_response_code(400);
				$output['string']= "value of y is null";
				$output['error']=true;
				$output['answer']=null;
			echo json_encode($output);
		}
	}
}else{
	if(is_numeric($x) && is_numeric($y)){
		http_response_code(200);
			$answer=add($x,$y);
			$output['string']=$x."+".$y."=".$answer;
			$output['answer']=$answer;
		echo json_encode($output);

	}else{
		if(is_numeric($x) == false && is_numeric($y) == false ){

			http_response_code(400);
					$output['string']= "values x and y are not data type: int";
					$output['error']=true;
					$output['answer']=null;
				echo json_encode($output);

		}else{

			if(is_numeric($x) == false){
				http_response_code(400);
					$output['string']= "value of x is not data type: int";
					$output['error']=true;
					$output['answer']=null;
				echo json_encode($output);
			}
	
			if(is_numeric($y) == false){
				http_response_code(400);
					$output['string']= "value of y is not data type: int";
					$output['error']=true;
					$output['answer']=null;
				echo json_encode($output);
			}

		}
		
	}
}


exit();