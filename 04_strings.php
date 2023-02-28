<?php

// Create simple string
$name = 'Kevin';
$name1 = "Tom";
$greeting = "Hello ";

echo $name.'<br>';
echo $name1.'<br>';
echo $greeting.$name.'<br>';


$string1 = 'Hello my name is $name.'; 
$string2 = 'Hello my name is '.$name.'.'; 

$string3 = 'Hello my name is '.$name.'.' .' I am 39 years old'; 
$string4 = "Hello my name is $name. I am 39 years old";   
    
echo $string1.'<br>';
echo $string2.'<br>';
echo $string3.'<br>';
echo $string4.'<br>';

// String concatenation
echo 'Hello '.'world. '.' The year is '. '2023. '.'<br>';

// String functions
$stringX = "        Hello World          ";

echo $stringX;

echo "1 - ". strlen($stringX).'<br>';
echo "2 - ". trim($stringX).'<br>';
echo "3 - ". ltrim($stringX).'<br>';
echo "4 - ". rtrim($stringX).'<br>';
echo "5 - ". str_word_count($stringX).'<br>';
echo "6 - ". strrev($stringX).'<br>';
echo "7 - ". strtoupper($stringX).'<br>';
echo "8 - ". strtolower($stringX).'<br>';
echo "9 - ". ucfirst('hello').'<br>';
echo "10 - ". lcfirst('Hello').'<br>';
echo "11 - ". ucwords('hello world').'<br>';
echo "12 - ". strpos($stringX,  'world').'<br>';
echo "13 - ". stripos($stringX,  'world').'<br>';
echo "14 - ". substr($stringX, 10).'<br>';
echo "15 - ". substr($stringX, 10, 3).'<br>';
echo "16 - ". str_replace('world', 'PHP',  $stringX).'<br>';
echo "17 - ". str_ireplace('world', 'PHP',  $stringX).'<br>';

// Multiline text and line breaks

$longText = "Hello, my name is Kevin. <br/>
             I am  39, <br/>
             I love my son.";
$longText2 = "Hello, my name is Kevin. 
             I am  39, 
             I love my son.";


    
echo $longText .'<br>';  
echo nl2br($longText2) .'<br>'; 


// Multiline text and reserve html tags
$longText3 = "Hello, my name is  <b> Kevin </b>. 
              I am  <b> 39 </b>, 
             I love my son.";

echo $longText3 .'<br>';
echo nl2br($longText3) .'<br>';
echo htmlentities($longText3) .'<br>';
echo nl2br(htmlentities($longText3)) .'<br>';

// https://www.php.net/manual/en/ref.strings.php