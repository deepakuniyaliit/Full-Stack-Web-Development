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