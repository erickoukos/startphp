<?php

/* -------- Loops & Iteration ------- */
// Loops execute a statement or a block of code or statements multiple times until and unless a given condition is met
/*
1. for loop
2. while loop
3. do-while loop
4. foreach loop

 */
/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
for ($x = 0; $x <= 10; $x++) { 
  // echo "Number: $x <br>";
}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$i = 1;
while ($i <= 10) {
  // echo "Number: $i <br>";
  $i++;
}



/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$a = 2;
do {
  // echo "Number: $a <br>";
  $a += 2;
} while ($a <= 10);



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array
$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $number) {
  // echo "Number: $number <br>";
}


// Use the indexes within the loop

$posts = ['Post One', 'Post Two', 'Post Three', 'Another Post'];
foreach ($posts as $index => $post) {
  // echo "${index} - ${post} <br>";
}


// Use the keys within the loop for an associative array
$person = [
  'first_name' => 'John',
  'last_name' => 'Doe',
  'email' => 'johndoe@yahoo.com'
];


// Get the Keys
foreach ($person as $key => $value) {
  // echo "${key} > ${value} <br>";
}

// Write a script in php to construct the following pattern
/*

*
**
***
****
*****

 */


 for ($m = 1; $m <= 5; $m++) { 
  for ($n = 1; $n <= $m ; $n++) { 
    echo "*";
    if($n < $m){
      echo " ";
    }
  }
  echo "<br>";
 }

//  Exercise
 // Write a script in php to construct the following pattern

 /*
 1
 2 3
 4 5 6
 7 8 9 10
   */

  //  hint: printf();
