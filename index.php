<?php
include "conn.php";
//echo "hi";		
$name = $_POST['name'];
$password = $_POST['password'];
$query1 = "CREATE TABLE sample(username VARCHAR(20) NOT NULL, password CHAR(15) NOT NULL);";
mysqli_query($connection, $query1);
/*$query = " INSERT INTO sample VALUES(?, ?); " ;
//mysqli_query($connection, $query);
$initialize = mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize, $query))
{
    mysqli_stmt_bind_param($initialize, "ss", $name, $password);
    mysqli_stmt_execute($initialize);
}*/
$query2 = "INSERT INTO sample VALUES('$name','$password');";
if(mysqli_query($connection,$query2)){

    echo "<h4 style='color:grey'>Record Inserted</h4><br>";
}
else			
{
    echo "<h4 style='color:blue'>Record Not Inserted</h4><br>";
}
?>
