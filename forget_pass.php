<?php
// session_start();

if(isset($_POST['forget_pass'])){
    $userName = $_POST['userName'];
    $passWord = $_POST['NewPass'];
}   
// DELETE FROM tablename  WHERE id = 1;
// DELETE * FROM tablename;

require_once("devdb_conn.php");

$changePass = " UPDATE devschool_tb SET 
passWord = '$passWord'
WHERE userName = '$userName' " ;

$run = mysqli_query($con, $changePass);

if($run){
    echo "Password changed successfully";
} else {
    echo "Error changing password: " . mysqli_error($con);
}   


?>