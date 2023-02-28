<?php

// What is a variable

$variable = 'A container that stores value';

// Variable types

  // string 
     $name= 'John';

  // integer
    $age= 39;

  // float
  $weight= 130.5;

 // boolean 
   $employed= false;
   $married= true;

 // null

    $salary= null;

 //  object
//    $diet ={
//        breakfast:'bread',
//        lunch:'ugali',
//        supper:'rice'
//    }

// Declare variables

echo $name;
echo $weight;
echo '<br>';


// Print the variables. Explain what is concatenation
echo '<br>'.$name.'<br>';
echo $weight.'kg';
echo $employed.'<br>';
echo $married.'<br>';
echo $salary.'<br>';



// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($weight).'<br>';
echo gettype($employed).'<br>';
echo gettype($married).'<br>';
echo gettype($salary).'<br>';


// Print the whole variable

var_dump($name, $age, $weight, $employed, $married, $salary);

// Change the value of the variable

$name = false;

// Print type of the variable
echo '<br>'.gettype($name).'<br>';
var_dump($name).'<br>';

// Variable checking functions
is_string($name);
is_integer($age);
is_bool($married);
is_float($weight);
is_double($weight);    

// Check if variable is defined

 isset($name);
 isset($address);

// Constants

define('bird', 'parrot');
echo '<br>'.bird.'<br>';


// Using PHP built-in constants

echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
