<!DOCTYPE html>

<html>

    <head>

        <title> PHP DELETE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="deleteQuery.php"  method="post">

            ID TO DELETE:&nbsp;<input type="text" name="id" required><br><br>

            <input type="submit" name="delete" value="Clear Data">

        </form>

    </body>

</html>
<?php

require_once "connection.php";


if(isset($_POST['delete'])){
$id = $_POST['id'];

$query = "DELETE FROM `web` WHERE `id` = $id";
    
    $result = mysqli_query($conn, $query);
    
    if($result)
    {
        echo 'Data Deleted';
         header("location: showDB.php");
            exit();
    }else{
        echo 'Data Not Deleted';
    }
 $conn->close();
}
?> 
    
 