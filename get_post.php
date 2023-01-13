<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) {
//  echo '<h3>' . $_GET['username'] . '</h3>';
echo '<h3>' . $_POST['username'] . '</h3>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMPLE FORM</title>
</head>
<body>
<!-- Pass data through a link -->

<a href="<?php echo $_SERVER['PHP_SELF'] ?>?username=erickoukos">Link</a>
<br><br>


<!-- // Pass data through a form -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <label for="Username">Username:</label>
    <input type="text" name="username" id="userName">
    <br> <br>
    <label for="Password">Password:</label>
    <input type="password" name="password" id="pwd">
    <br><br>
    <input type="submit" value="submit">
    <input type="reset" value="Clear Form">
  </form>
</body>
</html>