<?php
 echo 'hello';
 $a = 2;
 $b = 3;
 $sum = $a + $b ;
 echo $sum;
 echo 'The sum is $sum';
 echo "The sum of $a and $b is $sum";   

 //conditions
 $num1 = 5;
 $num2 = '5';
 if($num1 == $num2)
 {
    echo "Same number";
 }
 else
 {
    echo "Not Same number";
 }

 //function 
 function myfunction()
 {
    echo "<br>Hello from function";
 }

 myfunction();

 //function with parameter
 function myfunction2($data)
 {
    echo "The data is $data";
 }
 myfunction2('Hello Again');

 //function with return value;
 function myfunction3($x,$y)
 {
    return $x+$y;
 }

 $i = 5;
 $j = 6;
 $total = myfunction3($i,$j);
 echo "The sum of $i and $j is $total";


?>