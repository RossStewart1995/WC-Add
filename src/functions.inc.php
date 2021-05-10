<?php
// Calculator Add Function - no error checking
function add($x, $y)
{

	if(is_null($x) || is_null($y)){
		if(is_null($x) && is_null($y)){
			return "both x and y are null";
		}else{
			if(is_null($x)){
				return "x is null";
			}
			if(is_null($y)){
				return "y is null";
			}
		}
	}

	if(is_numeric($x) == false || is_numeric($y) == false){
		if(is_numeric($x) == false && is_numeric($y) == false){
			return "both x and y are not of data type: int";
		}else{
			if(is_numeric($x) == false){
				return "x is not of data type: int";
			}
			if(is_numeric($y) == false){
				return "y is not of data type: int";
			}
		}
	}


	return $x+$y;
}
