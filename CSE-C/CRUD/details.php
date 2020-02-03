<?php
include('config.php');
?>

<?php
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
     echo $row['id'].' ';
     echo $row['name'].' ';
     echo $row['age'].' ';
     echo $row['contact'].' ';
     echo $row['email'].'<br>';
    }
}
?>