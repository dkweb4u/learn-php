<?php

// =======================================  Number  ==============================================================

echo "<h2>Number</h2>";

echo rand();  // generate random number

echo "<hr>";

echo rand(1,10);   // between random number

echo "<hr>";

echo getrandmax();  // get max random value

echo "<hr>";

$data = "hello";

echo gettype($data); // get data type

echo "<hr>";

echo round(4.2); // get rounded value

echo "<hr>";

echo ceil(4.2); // get next rounded value

echo "<hr>";

echo floor(4.2); // get previous rounded value

echo "<hr>";

echo sqrt(4); //  squre root of value

echo "<hr>";

echo pi();   //  get pi value

echo "<hr>";

echo abs(-2364234);   //  absolute number like negatie number to passitive number

echo "<hr>";

echo max(1,2,3,4,5,6,7) ."<br>";  //  get maximum number

echo max([10,4,5,6,7]) ."<br>";   //  get maximum number in array

echo "<hr>";


echo min(1,2,3,4,5,6,7) ."<br>";  //  get minimum number

echo min([10,4,5,6,7]) ."<br>";   //  get minimum number in array

echo "<hr>";


echo number_format(1005.15862, 2 , ".",",") ;  //  number format (number, numberofdecimal, "point", "comama")

echo "<hr>";

// =======================================  String  ==============================================================

echo "<h2>String</h2>";

$string = "hellow world hello";

echo strlen($string);  // get length of string
 
echo "<hr>";

echo str_word_count($string);  // count the words of string
 
echo "<hr>";

echo strpos($string, 'world');  // get postion of string
 
echo "<hr>";

echo  $string[0] ;   //   get index of letter
 
echo "<hr>";

echo  substr($string, 7, 5) ;   //   substring(sting, startposition , numberofletter);  get the between string
 
echo "<hr>";


echo  str_replace("hello", "magic", $string);   //  str_replace("want_string_value", "replace_string", content_of_string);
 
echo "<hr>";

echo  strtolower($string);  //  string to lower
 
echo "<hr>";

echo  strtoupper($string);  //  string to upper
 
echo "<hr>";

echo  ucwords($string);  //  string to Capitalized
 
echo "<hr>";

echo  trim($string);  // remove unwanted space
 
echo "<hr>";

// =======================================  Date and Time  ==============================================================

echo "<h2>Date and Time</h2>";

// 'Y' - The year
// 'm' - The Month
// 'd' - The day 
// 'D' - The day of the week short name 
// 'l' - The full day of the week name 
// 'h' - The hour
// 'i' - The minute 
// 's' - The second 
// 'a' - AM/PM 

echo date('m', strtotime('1998-01-15'));  //date and string to time
echo "<hr>";

// ======================================= Array ==============================================================

echo "<h2>Array</h2>";

$array = [55,76,1,2,5,6,7,10,52];

unset($array[0]);              // remove value particuler index; but its remove that index

print_r($array);

echo "<hr>";

$array = array_values($array);  //  ordering or reordering the index of the array

print_r($array);

echo "<hr>";

$array[] =100;  // add value in the last index in array

print_r($array);

echo "<hr>";

$count =  count($array);  // array length

print_r($count);  

echo "<hr>";

sort($array); // sort and create new array

print_r($array);  

echo "<hr>";

rsort($array); // reverse sort and create new array

print_r($array);  

echo "<hr>";

array_push($array , 1000); // push value in array

print_r($array);  

echo "<hr>";

array_pop($array); // pop remove the last elemnt of array

print_r($array);  

echo "<hr>";

array_shift($array); // shift remove the First elemnt of array

print_r($array);  

echo "<hr>";

array_unshift($array,25); //  unshift  add  elemnt  the First of array

print_r($array);  

echo "<hr>";

$slice = array_slice($array,2,4); //  array_slice is create new array array_slice(array, startposition, length(number of elemnt))

print_r($slice);  

echo "<hr>";

array_splice($array,1,3,"hellow"); // array_splice is replce or change array values; array_splice(array, startposition, length , value);  

print_r($array);  

echo "<hr>";

array_sum($array); // addtion of all array values  

print_r(array_sum($array));  

echo "<hr>";

array_search("25",$array); // search value in array and find index ; array_search(value to search , array)

print_r(array_search("1",$array));  

echo "<hr>";

in_array("25",$array); // if check the value is there in array then retuns 1 otherwise null or empty

print_r(in_array("25",$array));  

echo "<hr>";

$strarry = 'hello magic tech channal';

explode(" ",$strarry); // Its string to array; explode("spliting letter space or comma", string);

print_r(explode(" ",$strarry));  

echo "<hr>";

$arrystr = [1,2,3,4,5,6,7,8,9,10];

implode(" ",$arrystr); // Its array to string; implode("adding spliting letter space or comma", array);

print_r(implode(" ",$arrystr));  

echo "<hr>";

$arraymerge = array_merge($arrystr, ['255', 520,720]); // merge array in array_merge(array, added array);

print_r($arraymerge);  

echo "<hr>";

$arrcountvalue = [1,2,3,4,5,1,2,4,4,4,5,6,7,9,10];

array_count_values($arrcountvalue); // array count values

print_r(array_count_values($arrcountvalue));  

echo "<hr>";

$arrcountvalue = [1,2,3,4,5,1,2,4,4,4,5,6,7,9,10];

$arrmap = array_map(function($num){return $num * $num;},$arrcountvalue); // array_map(call back dunction, array)

print_r($arrmap);  

echo "<hr>";