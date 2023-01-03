<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
  AND && OR ||
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
echo 'IF CONDITION<br>';
echo '##################<br>';
echo '';

$age = 15;
if ($age >= 18) {
  echo 'You are old enough to vote';
} elseif ($age >= 90) {
  echo 'Sorry, you are too old to vote! Please stay at home.';
}elseif($age < 18){
  echo 'Sorry, you are too young to vote!';
}else{
  echo 'This is not a value!<br>';
}

echo '<br>';
echo 'IF CONDITION AND DATES<br>';
echo '##################<br>';
echo '';

// $today = date("F j, Y, g:i a");
// echo $today;

$t = date('H');

if ($t < 12) {
  echo 'Good morning!';
}elseif($t < 17){
  echo 'Good afternoon!';
}else {
  echo 'Good evening!';
}

echo '<br>';
echo 'IF CONDITION AND ARRAYS<br>';
echo '##################<br>';
echo '';

// Check if an array is empty
// we'll use the isset() function, the empty() 

$posts = [];
if (!empty($posts[0])) {
  echo $posts[0];
}else{
  echo 'There are no posts in this blog!';
}

echo '<br>';
echo 'IF CONDITION and && & || <br>';
echo '##################<br>';
echo '';


/*
$a && $b = true iff $a and $b are both true
$a || $b = true so long one of them is true
*/

$a = false;
$b = false;

// echo $a || $b;

$gender = 'M';
$height = 126;
$local = true;

if ($gender == 'M' && $height == 123) {
  echo 'You can climb a tree!';
}elseif($gender == 'F' && $local == true){
  echo 'You come from around, go for it!';
}elseif($gender == 'M' && $local == false){
  echo 'We don\'t do that here!';
}else{
  echo 'Hello, I didn\'t quite get that! Try again.';
}


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

/*
$posts = [];
if (!empty($posts[0])) {
  echo $posts[0];
}else{
  echo 'There are no posts in this blog!';
}
*/
echo '<br>';
echo 'IF CONDITION with the Ternary Operator <br>';
echo '##################<br>';
echo '';

echo !empty($posts[0]) ? $posts[0] : 'There are no posts in this blog! <br>';

$first_post = !empty($posts[0]) ? $posts[0] : 'There are no POSTS!';
echo $first_post;

/* -------- Switch Statements ------- */

echo '<br>';
echo 'SWITCH STATEMENT<br>';
echo '##################<br>';
echo '';

$favorite_color = 'Green';
switch ($favorite_color) {
  case 'Red':
    echo 'Your favorite color is red!';
    break;
  case 'Blue':
    echo 'Your favorite color is blue!';
    break;
  case 'Magenta':
    echo 'Your favorite color is magenta!';
    break;
  default:
    echo 'Your favorite color is not red, blue nor magenta';
}





