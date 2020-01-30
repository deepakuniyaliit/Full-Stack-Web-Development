<?php
if(isset($_POST['submit'])){
    echo 'ID - '.$_POST['id'].'<br>';
    echo 'UserName - '.$_POST['username'].'<br>';
    echo 'Age - '.$_POST['age'].'<br>';
    echo 'Contact - '.$_POST['contact'].'<br>';
    echo 'Email - '.$_POST['email'].'<br>';
}
else{
    echo "Welcome, Guest!";
}
?>

<html>
<head><title>Input Data</title></head>

<body>
    <form action="input.php" method="post">
      ID - <input name="id" type="text" placeholder="Enter ID"><br>
      UserName - <input name="username" type="text" placeholder="Enter Username"><br>
      Age - <input name="age" type="text" placeholder="Enter Age"><br>
      Contact - <input name="contact" type="text" placeholder="Enter Contact"><br>
      EMail - <input name="email" type="email" placeholder="Enter E-Mail"><br>
      <input name="submit" type="submit">
    </form>
</body>
</html>