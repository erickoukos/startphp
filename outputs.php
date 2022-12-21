<?php

// PHP - Hypertext Preprocessor
// Server side scripting language, manages dynamic content, databases, session tracking
// CRUD - Create, Read, Update, Delete
// Cookies and Sessions
/* Features of PhP
  - Simplicity
  - Efficiency
  - Security
  - Flexible
  - Familiarity
*/
/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. 
  There are multiple functions that can be used to output data to the browser.
*/
// single line comment
// echo - output strings, numbers, html, etc

echo 'Hello, Class!';
echo '<br>';
echo 123545;
echo '<br>';
echo 19 * 5;
echo '<br>';
echo '<h2> This is interesting</h2>';
echo '<br>';

echo 'Hallo Children';
echo '<br>';
echo "I'm going to school";
echo '<br>';
echo 'I\'m going to school';

// print - Similar to echo, but slower
echo '<br>';
print 'What\'s up guys';

// print_r - gives more info - usually for arrays
echo '<br>';
print_r('Hello people');
echo '<br>';
print_r([1, 2, 3, 4]);

// var_dump - even more info compared to print_r
echo '<br>';
var_dump('Welcome to PhP class');
echo '<br>';
var_dump([1, 2,"cat", 3, 4]);
// escaping chars using backslash

echo "I'm going to school";
echo '<br>';
echo 'I\'m going to school';

echo "<br>";
echo "Is this PhP?";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PhP inside Html</title>
</head>
<body>
  <p></p>

  <br>

  <?php 

echo "Is this PhP?";

   ?>
</body>
</html>
