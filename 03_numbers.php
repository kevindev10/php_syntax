<?php

// Declaring numbers
    $a = 164;
    $b = 293;
    $c = 738;
    
// Arithmetic operations
    echo $a + $b.'<br>';
    echo $a * $b.'<br>';
    echo $a / $b.'<br>';
    echo ($a * $b) / $c.'<br>';
    echo $a % $b.'<br>';

// Assignment with math operators
  
//    $a += $b;   echo $a.'<br>';
//    $a *= $b;   echo $a.'<br>';
//    $a /= $b;   echo $a.'<br>';
//    $a -= $b;   echo $a.'<br>';
//    $a *= $b;  $a /= $c; echo $a.'<br>';
 
// Increment operator
//       echo $a.'<br>';
//       echo $a++.'<br>'; 
//       echo $a.'<br>';
//       echo ++$a.'<br>';
//       echo $a.'<br>';

// Decrement operator
//         echo $a.'<br>';
//         echo $a--.'<br>'; 
//         echo $a.'<br>';
//         echo --$a.'<br>';
//         echo $a.'<br>';
 

// Number checking functions
    is_float(1.25); //true
    is_double(1.25); //true
    is_integer(2); // true
    is_integer(2.5); // false
    is_numeric('2.35'); // true
    is_numeric('2.35x'); // false

// Conversion
    
    $stringNumber = '37';
    $numbz = (int)$stringNumber;
    var_dump($numbz);
    
    echo '<br>';

    $stringDecimalNumber = '37.5';
    $numbz1 = (int)$stringDecimalNumber;
    var_dump($numbz1);
    
    echo '<br>';

    $stringDecimalNumber = '37.5';
    $numbz1 = (float)$stringDecimalNumber;
    var_dump($numbz1);

    echo '<br>';

    $stringDecimalNumber = '37.5';
    $numbz1 = intval($stringDecimalNumber);
    var_dump($numbz1);
    
    echo '<br>';

    $stringDecimalNumber = '37.5';
    $numbz1 = floatval($stringDecimalNumber);
    var_dump($numbz1);
    

// Number functions
    echo '<br>';
    echo 'abs(-15) = ' . abs(-15) .'<br>';
    echo 'pow(2, 3) = ' . pow(2, 3) .'<br>';
    echo 'sqrt(16) = ' . sqrt(16).'<br>';
    echo 'max(2, 3) = ' . max(2, 3) .'<br>';
    echo 'min(2, 3) = ' . min(2, 3) .'<br>';
    echo 'floor(2.7) = ' . floor(2.7) .'<br>';
    echo 'ceil(2.2) = ' . ceil(2.2) .'<br>';
    echo 'round(2.6) = ' . round(2.6) .'<br>';
    echo 'round(2.4) = ' . round(2.4) .'<br>';
// Formatting numbers
    $numba = 1234123123.12345;
    echo number_format($numba, 2, '.', ',' );

// https://www.php.net/manual/en/ref.math.php
