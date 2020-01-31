<?php
include_once('config.php');
?>
<?php
    if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
        
    $sql = "INSERT INTO `users` (name, age, contact, email)
    VALUES ('$username', '$age', '$contact', '$email')";
        
    if(mysqli_query($conn, $sql)){
        echo 'Data inserted successfully...';
    }
        else{
            echo 'Data insertion failed...'.mysqli_error($conn) ;
        }
}
else{
    echo "Please go back to Input Page.";
}
?>