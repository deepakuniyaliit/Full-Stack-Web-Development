<table border="1">
<thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>    
</thead>
<tbody>

<?php
include('config.php');
?>

<?php
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);
?>

<?php
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['contact']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="delete.php">Delete</a></td>
    </tr>  
<?php    }
}
?>
</tbody>
</table>