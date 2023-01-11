<?php
/*
https://www.php.net/manual/en/ref.strings.php
 */

$string = 'Buenas tough Programmers';

// Get the length of a string
// echo strlen($string);

// Find the position of the first occurrence of a substring in a string

// echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
// echo strrpos($string, 'o');

// Reverse a string
// echo strrev($string);

// Convert to lowercase
// echo strtolower($string);

// Convert to UPPERCASE
// echo strtoupper($string);

// Convert to title case
// echo ucwords($string);

// Replacing strings
// echo str_replace('World', 'Everyone!', $string);

// Return the portion of a string specified by the offset and length
// echo substr($string, 5);

// starts with
if (str_starts_with($string, 'Hello')) {
    // echo 'YES, it does!';
}else{
    // echo 'NO! Kindly check again.';
}


// ends with
if (str_ends_with($string, 's')) {
    // echo "Yes, it actually does!";
}else{
    // echo 'NO! Sorry, we couldn\'t see that';
}

// contains (write your code below and submit file only)

# your code here


// HTML Entities
$string2 = "<h1> Hello Class</h1>";
// echo htmlentities($string2);

// Formatted strings
// printf('%s is a %s', 'Tommy', 'great comedian');

printf('1 + 1 = %f', 1 + 1); // float

echo '<br>';

$string3 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga modi nobis dolorem corrupti ea quam stupid reiciendis ut labore quo in delectus, earum explicabo nesciunt iusto inventore consectetur aliquam vero. Molestias.";

echo str_word_count($string3);
echo '<br>';

if (str_contains($string3, 'stupid')) {
    echo 'Your response is too vulgar!';
}else{
    echo "Proceed!";
}
// echo strlen($string3);



