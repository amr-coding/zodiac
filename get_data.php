<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toto";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$conn){

    header('Refresh: 1; URL=fail.php');
    die('');
}

$sql = "SELECT ID, Name, Email,Salary FROM person";
$result = mysqli_query($conn, $sql);
if(isset($_POST['getDB'])){
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Email"]. "<br>";
        }
    } else {
        echo "0 results";
    }

} 

mysqli_close($conn);
?>