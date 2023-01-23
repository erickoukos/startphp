<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'resources/class.txt';

if (file_exists($file)) {
    // Returns content and number of bytes read from the on success, or FALSE on failure
    // echo readfile($file);
}

// File Open, Read, Write, Close
if(file_exists($file)){
    // fopen() gives more control on the file
    // Modes: r, w, a, x, r+, w+, x+
    $handle = fopen($file,'r');
    // fread() reads content of a file as a string
    $content = fread($handle, filesize($file));
    // fclose() closes the file resource on success
    fclose($handle);
    echo $content;
} else {
    // Create the file
    $handle = fopen($file, 'w');
    // PHP_EOL - End of Line
    $content = 'Brenda' . PHP_EOL . 'Moreen' . PHP_EOL . 'Sam' . PHP_EOL . 'Sharon';
    // fwrite() - writes content to the file and return the number of bytes written on success
    fwrite($handle, $content);
    fclose($handle);


}







/*
r	- Open a file for read only. File pointer starts at the beginning of the file
w	- Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	- Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	- Creates a new file for write only. Returns FALSE and an error if file already exists
r+ -	Open a file for read/write. File pointer starts at the beginning of the file
w+ -	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ -	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	- Creates a new file for read/write. Returns FALSE and an error if file already exists
*/