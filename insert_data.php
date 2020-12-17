<?php
//insert php code
$con = mysqli_connect('localhost', 'root', '', 'toto');
if(!$con){

    header('Refresh: 1; URL=fail.php');
    die('');
}else{
    if(isset($_POST['insert'])){
        $Name = $_POST["fname"];
        $Email = $_POST["uemail"];
        $Salary = $_POST["usalary"];
        $sql = "INSERT INTO person (Name,Email,Salary) VALUES ('$Name', '$Email','$Salary')"; 
        if(mysqli_query($con, $sql)){
            echo  '<div class="container alert alert-success" v-show="successsMsg">
                Success Message
            </div>';
        }else{
            echo  '<div class="alert alert-danger animate__animated animate__headShake" v-if="errorMsg">
                Error Message
            </div>';
        }  
    }

}

?>
