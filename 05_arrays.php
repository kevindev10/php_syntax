<?php

// Create array




$pets = ['cat', 'dog', 'lizard', 'parrot', 'turtle'];


// Print the whole array

var_dump($pets);

// Make var_dump prettier

echo '<pre>';
var_dump($pets);
echo '<pre>';

// Get element by index
echo $pets[0].'<br>';

// Set element by index
    $pets[0] ='monkey';
    echo '<pre>';
    var_dump($pets);
    echo '<pre>';

// Check if array has element at index 4
   echo $pets[4].'<br>';
   echo isset($pets[4]).'<br>'.'<br>';

// Append element
       $pets[] = ('chicken');
        echo '<pre>';
        var_dump($pets);
        echo '<pre>';

// Print the length of the array

echo count($pets).'<br>';
    

// Add element at the end of the array

// Remove element from the end of the array

// Add element at the beginning of the array

// Remove element from the beginning of the array

// Split the string into an array

// Combine array elements into string

// Check if element exist in the array

// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays