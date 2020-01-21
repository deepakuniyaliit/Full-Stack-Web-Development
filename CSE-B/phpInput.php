<?php  
echo 'Wecome'.' '.$_GET['username'];
?>
<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form action="phpInput.php" method="get">
      Name: <input type="text" name="username"><br>
      <input type="submit" name='btn'>
    </form>
    </body>


</html>
