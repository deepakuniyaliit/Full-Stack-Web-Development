<?php include('config.php'); ?>

<?php
$id = $_GET['id'];
?>


<?php
if(isset($_POST['update'])){
    $name = $_POST['username'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    
    $sql = "UPDATE `users` SET name='$name', age='$age',
    contact='$contact', email='$email' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        header("Location:details.php");
    }
    else{
        echo 'failed'.mysqli_error($conn);
    }
}
else{
    $sql = "SELECT * FROM `users` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $age = $row['age'];
    $contact = $row['contact'];
    $email = $row['email'];
}
?>


<html>
<head><title>Update Data</title></head>

<body>
    <form action="edit.php?id=<?php echo $id; ?>" method="post">
      UserName - <input name="username" type="text" value="<?php echo $name; ?>" placeholder="Enter Username"><br>
      Age - <input name="age" type="text" value="<?php echo $age; ?>" placeholder="Enter Age"><br>
      Contact - <input name="contact" type="text" value="<?php echo $contact; ?>" placeholder="Enter Contact"><br>
      EMail - <input name="email" type="email" value="<?php echo $email; ?>" placeholder="Enter E-Mail"><br>
      <input name="update" type="submit" value="Update">
    </form>
</body>
</html>