<?php
include('config.php');
?>

<?php 
if (isset($_POST['btn'])){
 echo "Dear, ".$_POST['username']." Your details are".'<br>';
 echo 'ID - '.$_POST['id'].'<br>';
 echo 'Username - '.$_POST['username'].'<br>';
 echo 'Age - '.$_POST['age'].'<br>';
 echo 'Contact - '.$_POST['contact'].'<br>';
 echo 'Email - '.$_POST['email']; 
}
else{
    echo "Welcome Guest";
}
?>