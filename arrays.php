<?php
/* ----------- Arrays ----------- */

// Data structures that store one or more similar type of values in a single variable

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// Simple array of numbers

$numbers = [1, 2, 3, 4, 5];
echo $numbers[2];

echo "<br>";
echo "######################### <br>";

var_dump($numbers);
echo "<br>";
print_r($numbers);
echo "<br>";

// Simple array of Strings

$colors = ['red', 'blue', 'green'];
print_r($colors);
echo "<br>";
echo "######################### <br>";
echo $numbers[2];

echo "<br>";
echo "######################### <br>";

echo $numbers[1] + $numbers[3];


echo "<br>";
echo "######################### <br>";



/* Associative Arrays
Allow us to use named keys to identify values
*/

$colors = [
  1125 => 'Grace Mukami',
  2345 => 'Amos Kimani',
  3897 => 'Erick Kennedy'
];

echo $colors[3897];

echo "<br>";
echo "######################### <br>";

// Strings as keys
// RGB

$hex = [
  'red' => '#FF0000',
  'green' => '#00FF00',
  'blue' => '#0000FF'
];

echo $hex['green'];
echo "<br>";
echo "######################### <br>";

var_dump($hex);

echo "<br>";
echo "######################### <br>";

/* Multi-Dimensional Arrays
often used to store data in a table format
 */

 $person1 = [
  'first_name' => 'John',
  'last_name' => 'Doe',
  'email' => 'johndoe@yahoo.com'
 ];

// An array of people
$people = [
  $person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'johndoe@yahoo.com'
  ],

  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'janedoe@yahoo.com'
],

[   'first_name' => 'Amos',
    'last_name' => 'Kim',
    'email' => 'kamos@yahoo.com'
],

];

var_dump($people);
echo "<br>";
echo "######################### <br>";
print_r($people);


echo "<br>";
echo "######################### <br>";

// Encoding in JSON (JavaScript Object Notation)

var_dump(json_encode($people));
echo "<br>";
echo "######################### <br>";
print_r(json_encode($people));


// ASSIGNMENT

/*

1. Write a PhP script that displays "My name is Kelcy, I'm 20years old and 126cm tall" from an array below.

$kelcy = [
  $name => 'Kelcy',
  $age => 20,
  $height => 126 
];



2. Write a PHP Script that decodes the following JSON string

{"Title": "The Double Sword",
"Author": "Robert Jenk",
"Detail": {
  "Publisher": "Little Brown"
}}


send to my email -  erick@riconets.com
 */

 echo "<br>";
 echo "######################### <br>";
$kelcy = [
  $name = 'Kelcy',
  $age = '20',
  $height = '126' 
];
echo"<br>";
print_r($kelcy);
echo"<br>";
echo "My name is $kelcy[0], I'm $kelcy[1]years old and $kelcy[2]cm tall";

echo "<br>";
echo "######################### <br>";


/*
$book = [
  $Detail = ["Publisher" => "Little Brown"],
  ["Title" => "The Double Sword"],
  ["Author" => "Robert Jenk"]
   
  ];
  */

  function toDecode($value, $key){
    echo "$key : $value"."\n";
  }

  $book = '{"Title": "The Double Sword",
    "Author": "Robert Jenk",
    "Detail": {
      "Publisher": "Little Brown"
    }}';

    $b = json_decode($book, true);
    array_walk_recursive($b, "toDecode");
  
  // echo"<br>";
  // var_dump($book);
  
  // echo"<br>";
  // var_dump(json_encode($book));
  
 
  // ARRAY FUNCTIONS
  echo "<br>";
  echo "######################### <br>";

  $fruits = array('apple', 'banana', 'orange', 'grape');

  // Get the array length
  echo count($fruits);
  
  echo "<br>";
  echo "######################### <br>";

  // Search array

  echo in_array('banana', $fruits);

  echo "<br>";
  echo "######################### <br>";

  // Adding elements into an array

array_push($fruits, 'mango', 'pepper');

var_dump($fruits);


// Adding an element at the beginning

echo "<br>";
echo "######################### <br>";

array_unshift($fruits, 'kiwi');
var_dump($fruits);

// Remove an element in an array

echo "<br>";
echo "######################### <br>";

array_pop($fruits); //Removes the last element
var_dump($fruits);

echo "<br>";
echo "######################### <br>";

array_shift($fruits); //Removes the first element
print_r($fruits);

echo "<br>";
echo "######################### <br>";


// Remove a specific element in an array
unset($fruits[3]);
print_r($fruits);


echo "<br>";
echo "######################### <br>";

// Split into chunks of 2
$chunkedArray = array_chunk($fruits, 2);
print_r($chunkedArray);

echo "<br>";
echo "###########CONCATENATE############## <br>";


// Concatenate arrays

$arr1 = array(1, 2, 3);
$arr2 = array(4, 5, 6);
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);

// using spread

echo "<br>";
echo "###########SPREAD############## <br>";

$arr4 = [...$arr1, ...$arr2];
print_r($arr4);


// Combine Keys and Values
echo "<br>";
echo "############KEYS & VALUES############# <br>";

$n = ['Green', 'Red', 'Yellow'];
$m = ['Raw Pepper', 'Apple', 'Banana'];
$k = array_combine($n, $m);
print_r($k);

echo "<br>";
echo "############KEYS############# <br>";
$keys = array_keys($k);
print_r($keys);


echo "<br>";
echo "############FLIP KEYS WITH VALUES############# <br>";

$flipped = array_flip($k);
print_r($flipped);


echo "<br>";
echo "############ARRAY WITH A RANGE############# <br>";

$newNumbers = range(1, 20);
print_r($newNumbers);

echo "<br>";
echo "###########MAPPING############## <br>";


$mappedNumbers = array_map(function($number){
  return "Number {$number}";
}, $newNumbers);

print_r($mappedNumbers);


echo "<br>";
echo "###########FILTER AN ARRAY############## <br>";

$lessThan10 = array_filter($newNumbers, fn($number) => $number < 10);

print_r($lessThan10);


echo "<br>";
echo "###########CHANGE KEY CASE############## <br>";

$seasons = array('summer' => '1000', 'winter' => '2000', 'spring' => '3000', 'autumn' => '4000');

print_r(array_change_key_case($seasons, CASE_UPPER));


echo "<br>";
echo "###########COUNT############## <br>";

echo count($seasons);

echo "<br>";
echo "###########SORTING ARRAYS############## <br>";

$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
sort($days);


foreach($days as $day){
  echo "$day<br>";
}

echo "<br>";
echo "###########REVERSE ARRAYS############## <br>";

$reversedDays = array_reverse($days);

foreach($reversedDays as $reversedDay){
  print_r($reversedDay . "<br>");
}

echo "<br>";
echo "###########SEARCH ARRAYS############## <br>";

// searches for a specified value in an array, and returns the key if the search is successful 

$animals = array('cat', 'dog', 'goat', 'rat');
$key = array_search('dog', $animals);
echo $key;


echo "<br>";
echo "###########INTERSECT ARRAYS############## <br>";

$team1 = array('John', 'Janet', 'Joseph', 'Val');
$team2 = array('James', 'Val', 'Linet', 'John');

$intersectedArrays = array_intersect($team1, $team2);

foreach($intersectedArrays as $intersectedArray){
  echo "$intersectedArray<br>";
}

































































