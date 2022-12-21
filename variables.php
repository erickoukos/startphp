<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers 5.2
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ) 
- Variables are case-sensitive ($name and $NAME are two different variables)
*/



// Adding Strings to variables
$name = "Amos Kiprotich";
$age = 20;
$height = "128cm";

echo 'My name is ' . $name .',' . 'with ' . $height. ',' . 'I\'m ' .$age .'years old.';
// Using Double Quotes
echo "<br>";
echo "My name is $name,with $height, I'm $age years old.";

// Always do it this way
echo "<br>";
echo "My name is {$name}, with {$height}, I'm {$age} years old.";

// Concatenate incase of single quotes using . 

echo 'My name is ' . $name .',' . 'with ' . $height. ',' . 'I\'m ' .$age .'years old.';
// Arithmetic operators + - / * %
echo "<br>";
echo 5+5;
echo "<br>";
echo 10%2; // Modulus
echo "<br>";
echo 10 / 2;
// Constants - cannot be changed.
echo "<br>";
define('HOST', 'localhost');
define('USER', 'root');

var_dump(HOST);
