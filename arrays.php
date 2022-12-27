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





















