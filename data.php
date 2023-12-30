<?php
include "conn.php";
if ($connection) {
    echo "<h3 style='color:green'>Connection Established</h3>";
}else{
    echo "error".mysqli_error($connection);
}

$name = $_POST['name'];
$password = $_POST['password'];
/*$query = "CREATE TABLE IF NOT EXISTS sample (username VARCHAR(20) NOT NULL, password CHAR(15) NOT NULL);";
if(mysqli_query($connection, $query))
{
    echo "<h4 style='color:green'>Table Created </h4>";
}
else
{
    echo "<h4 style='color:red'>Table not Created . ".mysqli_error($connection)."</h4>";
}

$query1 = "INSERT INTO sample VALUES('$name','$password');";
if(mysqli_query($connection,$query1)){

    echo "<h4 style='color:grey'>Record Inserted</h4><br>";
}
else			
{
    echo "<h4 style='color:blue'>Record Not Inserted</h4><br>";
}
*/
$query2 = "SELECT * FROM sample;";
$check = mysqli_query($connection, $query2);
if(mysqli_num_rows($check))
{
    while($row = mysqli_fetch_assoc($check))
    {
        echo  "<b style='color:blue'>".$row["username"]."<b>"."   "."<b style='color:green'>".$row["password"]."<b><br>";
    }
}
?>
