<?php
//delete all php code
$con = mysqli_connect('localhost', 'root', '', 'toto');
if(!$con){

    header('Refresh: 0; URL=fail.php');
    die('');
}else{
    if(isset($_POST['deleteAll'])){
        $sql = "DELETE FROM person"; 
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
