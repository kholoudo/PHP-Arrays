<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
//ex1
// $colors=['red','green','white'];
// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"

//ex2
// $colors=['red','green','white'];

//ex3
// $cities=array("Italy"=>"Rome","france"=>"Paris","Germany"=>"Berlin","Greece"=>"Athens");
// foreach($cities as $country=>$capital){
//     asort($cities);
//     echo "The capital of $country is $capital"."\n";
// }

//ex4
// $colors=array("Green","Red","White");
// echo $colors[0];

//ex5
// $myarray = array( '1','2','3','4','5' );

// foreach ($myarray as $new) 

// $insert = '$';
//  array_splice( $myarray, 3, 0, $insert ); 

//  foreach ($myarray as $new) 
// {echo "$new ";}

//ex6
// $fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");

//ex7
// $recorded_temp="78,56,78,89,45,67,87,78,90,65,79,89,67,55,66,88,89";
// $temp_arr=explode(',',$recorded_temp);
// $total_temp = 0;
// $temp_arr_length = count($temp_arr);
// foreach($temp_arr as $temp)
// {
//  $total_temp += $temp;
// }
// $avg_high_temp = $total_temp/$temp_arr_length;
//  echo "$avg_high_temp."
// ; 

//ex8
// $array1=array("color"=>"red",2,4);
// $array2=array("a","b","color"=>"green","shape"=>"trapezoid",4);
// $array3=array_merge($array1,$array2);
// print_r($array3);

//ex9
// $colors = array("red","blue","white","yellow"); 
// $name_convert = array_map("strtoupper", $colors); 
// foreach( $name_convert as $NewArray ) { echo $NewArray . '</br>' ; }

//ex10
// $colors = array("RED","BLUE","WHITE","YELLOW");
// $name_convert = array_map("strtolower", $colors); 
//  foreach( $name_convert as $NewArray ) { echo $NewArray . '</br>' ; }

//ex11
// echo implode(",",range(200,250,4));

//ex12

// $words = array("abcd","abc","de","hjjj","g","wer");
// $new_array = array_map('strlen', $words);
// echo "The shortest array length is " . min($new_array) .
// ". The longest array length is " . max($new_array).'.';

//ex13
// $n=range(11,20);
// shuffle($n);
// for ($i=0; $i< 10; $i++)
// {
// echo $n[$i].' ';
// }

//ex14
// $array1=array(2,0,10,12,6);























    ?>





</body>
</html>