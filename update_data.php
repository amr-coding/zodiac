<?php
//update php code
$con = mysqli_connect('localhost', 'root', '', 'toto');
if(!$con){
    header('Refresh: 1; URL=fail.php');
    die('');
}else{
    if(isset($_POST['updateBtn'])){
        $Name = $_POST["updateName"];
        $upID = $_POST["updateId"];
        $Email = $_POST["updateEmail"];
        $Salary = $_POST["Salary"];
        $sql = "UPDATE person SET Name='$Name', Email='$Email', Salary='$Salary' WHERE ID= $upID";     
        if(mysqli_query($con, $sql)){
            echo  '<div class="container alert alert-success" v-show="successsMsg">
                Success Message
                <button class="btn-close float-right" @click="successsMsg=true">
                    </button>
            </div>';
            header("Location: success.php/");
        }else{
            echo  '<div class="alert alert-danger animate__animated animate__headShake" v-if="errorMsg">
                Error Message
            </div>';
        }  
    }

}
?>