<?php 
// comparision oprator
// == - equal to
$a=10;
$b="20";

if($a==$b){
    echo "same<br>";
}
else{
    echo "not same <br>";
}

// === - datatype is not equal to 

$x="10";
if ($a===$x) {
    echo "same <br>";
} else {
    echo "not same <br>";
}

// > greater than 

    if ($a>$b) {
        echo "a is big <br>";
    } else {
        echo "b is big <br>";
    }

//< less than <= lessthan and equal to

    if ($a<=$b) {
        echo "a is small <br>";
    } else {
        echo "b is samll <br>";
    }
    
// != not equall to    

    if($a!=$b){
        echo "a and b not equal to";
    }
    else{
        echo "a & b equal";
    }
?>