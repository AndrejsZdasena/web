<?php
require_once "connection.php";

$email = $_POST['email'];
$sql = "INSERT INTO web (email)
VALUES ('$email')";
if(mysqli_query($conn, $sql)){
echo "Records updated successfully.\r\n";


} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}




$conn->close();
require_once "searchData.php";
?>
