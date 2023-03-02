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

array_push($pets,  'foo');

        echo '<pre>';
        var_dump($pets);
        echo '<pre>';


// Remove element from the end of the array

array_pop($pets);
        echo '<pre>';
        var_dump($pets);
        echo '<pre>';

// Add element at the beginning of the array
    array_unshift($pets, 'bar');
        echo '<pre>';
        var_dump($pets);
        echo '<pre>';

// Remove element from the beginning of the array
   array_shift($pets);
        echo '<pre>';
        var_dump($pets);
        echo '<pre>';


// Split the string into an array
    $names = 'james, jack, john, jude';
    $namesArray = explode(',', $names);
   
        echo '<pre>';
        var_dump($namesArray);
        echo '<pre>';
        


// Combine array elements into string
     $namesString = implode( ',', $namesArray);
        echo '<pre>';
        var_dump($namesString);
        echo '<pre>';

// Check if element exist in the array
          echo '<pre>';  
            var_dump(in_array('lion', $pets));
          echo '<pre>';
// Search element index in the array
          echo '<pre>';  
            var_dump(array_search('dog', $pets));
          echo '<pre>';
// Merge two arrays

    $wildlife = ['lion', 'elephant', 'cheetah', 'giraffe'];
//        $animals = array_merge($pets, $wildlife);
            $animals = [...$pets, ...$wildlife];
          echo '<pre>';  
            var_dump($animals);
          echo '<pre>';
        print_r ($animals);
// Sorting of array (Reverse order also)
    sort($animals);
        echo '<pre>';  
            var_dump($animals);
          echo '<pre>';

    rsort($animals);
        echo '<pre>';  
            var_dump($animals);
          echo '<pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

    $user = [

            'name' => 'Abdul',
            'age' =>  30,
            'sex' =>  'Male',
            'hobbies' => ['Tennis', 'Gaming', 'Football']

        
    ];

    
          echo '<pre>';  
            var_dump($user);
          echo '<pre>';
    
print_r($user);







// Get element by key
echo $user['name']. '<br>';

// Set element by key

$user['address'] = 123123;
 echo '<pre>';  
            var_dump($user);
          echo '<pre>';
    
// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays