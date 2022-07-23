<?php
$x=34;
$y=21;

//$a=readline("enter between +,-,*,/");	
$a="-";

switch ($a) {
	case "+" :
		echo $x+$y;
		break;

	case "-" :
		echo $x-$y;
		break;

	case "*" :
		echo $x*$y;
		break;

	case "/" :
		echo $x/$y;
		break;	
	
	default:
		echo "enter the value between +,-,*,/";
		break;
}

?>