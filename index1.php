<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical statements and loops
    </title>
</head>
<body>
<?php
//ex1
// $year=2022;
// if($year%4==0){
//     echo "The year is leap";
// }else{
//     echo "The year is not leap";
// }

//ex2
// $tempreature=27;
// if($tempreature<=20){
//     echo "Winter";
// }else
// echo "summer";

//ex3
// function sum($num1, $num2) 
// {
//     return $num1 == $num2 ? ($num1 + $num2)*3 : $num1 + $num2;
// }
// echo sum(2,2);

//ex4
// $num1=10;
// $num2=10;
// $sum=$num1+$num2;
// if($sum==30){
//     echo $sum;
// }else {
//     echo "false";
// }

//ex5
// $num=20;
// if($num>0){
//     if ($num%3==0){
//         echo "true";}
//     else {echo "false";}
//     }

//ex6
// $num1=50;
// if($num1>=20&&$num1<=50){
//     echo "True";
// }else{
//     echo "False";
// }

//ex7
// $num1=3;
// $num2=9;
// $num3=7;
// if($num1>$num2&&$num1>$num3){
//     echo "Larget is $num1";
// }else{
//     if($num2>$num1&&$num2>$num3){
//         echo "The largest is $num2";
//     }else{
//         echo "The largest is $num3";
//     }
// }

//ex8

//ex9
// function calculator($n1,$n2,$operation){
//     if($operation === "addition"){
//         echo $n1 + $n2;
//     } elseif($operation === "subtraction"){
//         echo $n1 - $n2;
//     } elseif($operation === "multiplication"){
//         echo $n2 * $n1;
//     } elseif($operation === "division"){
//         echo $n1 / $n2;
//     } else{
//         echo "operation is not clear";
//     }
// }
// calculator(4,7,"division");



//ex10
// $age=15;
// if ($age<18){
//     echo "Not eligible";
// }else{
//     echo "Eligible";
// }

//ex11
// function values($a){
//     if($a>0){
//         echo "positive";
//     }else if($a<0){
//         echo "negative";
//     }
// else {echo "zero";}}
// values(-5);

//ex12
// function Grade($average){
//     $Grades=[75,65,55,77,90];
//     $average=array_sum($Grades)/5;
//     if($average<60){
//         echo "F";
//     }else {
//         if($average>=60 && $average<70){
//             echo"D";
//         }else{
//             if($average>=70 && $average<80){
//                 echo"C";
//             }
//         }
//     }
// }
// Grade(65);
//loops
//ex1

// for($i=1; $i<=10; $i++)
// {
//  if($i< 10)
//  {
//  echo "$i-";
//  }
//  else
//   {
//  echo "$i";
//   }
// }

//ex2
// $sum=0;
// for($i=0;$i<=30;$i++){
// $sum=$sum+$i;
// }
// echo $sum;

//ex3

//ex4

//ex5

//ex6
// $n = 5;
// $x = 1;
// for($i=1;$i<=$n-1;$i++)
// {
//  $x*=($i+1); 
// }
// echo "The factorial of  $n = $x";

//ex7

//ex8
// echo substr_count("Orange coding academy","c");

//ex9
// <table align="left" border="1" cellpadding="3" cellspacing="0">

// for($i=1;$i<=6;$i++)
// {
// echo "<tr>";
// for ($j=1;$j<=5;$j++)
//   {
//   echo "<td>$i * $j = ".$i*$j."</td>";
//   }
//   echo "</tr>";
//   }

// </table>

//ex10
// for ($i = 1; $i <= 100; $i++)
// {
//   if ( $i%3 == 0 && $i%5 == 0 )
//    {
//      echo $i . " FizzBuzz"."\n" ;
//    }
//   else if ( $i%3 == 0 ) 
//    {
//      echo $i. " Fizz"."\n";
//    }
//      else if ( $i%5 == 0 ) 
//    {
//      echo $i. " Buzz"."\n";
//    }
//      else
//    {
//      echo $i."\n";
//    }
//  }


//ex11
// $n = 5; 

// echo "n = " . $n . "\n";
// $count = 1;
// for ($i = $n; $i > 0; $i--) 
// {
//   for ($j = $i; $j < $n + 1; $j++) 
//    {
//      printf("%4s", $count);
//      $count++;
//    } 
// 	echo "\n";
//    }





































?>
</body>
</html>