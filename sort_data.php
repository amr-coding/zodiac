<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toto";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {

    echo "header('Refresh: 1; URL=fail.php')";
    die("");
}
if(isset($_POST['sortDesc'])){
    $sql = "SELECT ID, Name, Email, Salary FROM person order by Salary desc";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $final_price = $row['Salary'] * 1.15;
            printf ( "<tbody>");
            printf ("<tr class='text-center'>");
            printf ("<td>{$row['ID']}</td>");
            printf ("<td>{$row['Name']}</td>");
            printf ("<td>{$row['Email']}</td>");
            printf ("<td>{$row['Salary']} > {$final_price} EGP</td>");
            printf ('<td><a href="#" class="text-success" @click="edit=true"><i class="fas fa-edit"></i></a></td>');
            printf ('<td><a href="#" class="text-danger" @click="trash=true"><i class="fas fa-trash"></i></a></td>');
        }
    } else {
        echo "<h4>Fill the table.</h4>";
    }


}
elseif(isset($_POST['sortID'])){
    $sql = "SELECT ID, Name, Email, Salary FROM person order by ID desc";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            printf ( "<tbody>");
            printf ("<tr class='text-center'>");
            printf ("<td>{$row['ID']}</td>");
            printf ("<td>{$row['Name']}</td>");
            printf ("<td>{$row['Email']}</td>");
            printf ("<td>{$row['Salary']}</td>");
            printf ('<td><a href="#" class="text-success" @click="edit=true"><i class="fas fa-edit"></i></a></td>');
            printf ('<td><a href="#" class="text-danger" @click="trash=true"><i class="fas fa-trash"></i></a></td>');
        }
    } else {
        echo "<h4>Fill the table.</h4>";
    }


}

else{

    $sql = "SELECT ID, Name, Email, Salary FROM person";
    $result = mysqli_query($conn, $sql);
    if(true){
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                printf ( "<tbody>");
                printf ("<tr class='text-center'>");
                printf ("<td>{$row['ID']}</td>");
                printf ("<td>{$row['Name']}</td>");
                printf ("<td>{$row['Email']}</td>");
                printf ("<td>{$row['Salary']}</td>");
                printf ('<td><a href="#" class="text-success" @click="edit=true"><i class="fas fa-edit"></i></a></td>');
                printf ('<td><a href="#" class="text-danger" @click="trash=true"><i class="fas fa-trash"></i></a></td>');
            }
        } else {
            echo "<h4>Fill the table.</h4>";
        }

    } 

    mysqli_close($conn);
}
?>
