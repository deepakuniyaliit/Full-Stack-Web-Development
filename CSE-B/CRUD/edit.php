<?php
$id = $_GET['id'];
echo "Id to be updated is - ".$id;

?>

<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form action="edit.php" method="post">
      Name: <input type="text" name="username"><br>
      Age:<input type="text" name="age" placeholder="Enter Age"><br>
      Contact:<input type="text" name="contact" placeholder="Enter Age"><br>
      Email: <input type="email" name="email" placeholder="Enter Age"><br>
      <input type="submit" name='btn'>
    </form>
    </body>
</html>