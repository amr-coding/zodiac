<?php
//delete php code 
$con = mysqli_connect('localhost', 'root', '', 'toto');
if(!$con){
    header('Refresh: 1; URL=fail.php');
    die('');
}else{
    echo '<h4 class="container">Ready to delete?</h4>';
    if(isset($_POST['udelete'])){
        $id = $_POST["uid"];
        //    DELETE FROM `person` WHERE `person`.`ID` = 29"
        $sql = "DELETE FROM `person` WHERE `person`.`ID` = '" . $_POST["uid"] . "'";
        if(mysqli_query($con, $sql)){
            echo  '<div class="container alert alert-success" v-show="successsMsg">
                Success Message
                <button class="btn-close float-right" @click="successsMsg=true">
                    </button>
            </div>';
            //    
        }else{

        }
    }

}
?>