<?php
include('config.php');
?>
<?php $id=$_GET['id'];
?>

<?php
    $sql = "SELECT * FROM `users` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $username = $data['name'];
    $age = $data['age'];
    $contact = $data['contact'];
    $email = $data['email'];
?>

<?php
if(isset($_POST['btn'])){
    $username = $_POST['username'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $sql = "UPDATE `users` SET name='$username', age='$age', contact='$contact', email='$email' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
    }
    else{
        echo "Updation Failed...Try Again";
    }
}
else{
    echo "Please click update button";
}
?>

<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form action="edit.php?id=<?php echo $id ?>" method="post">
      Name: <input type="text" name="username" value="<?php echo $username; ?>"><br>
      Age:<input type="text" name="age"  value="<?php echo $age; ?>" placeholder="Enter Age"><br>
      Contact:<input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="Enter Age"><br>
      Email: <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Age"><br>
      <input type="submit" name='btn' value="Update">
    </form>
    </body>
</html>