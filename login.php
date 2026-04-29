<?php

require_once("devdb_conn.php");

if(isset($_POST["submit"])){

$fname = $_POST['fname'];
$email = $_POST['email'];


        $query = " SELECT * FROM devschool_tb  WHERE 
        
        fname = '$fname' AND 
        email = '$email' 
        
        ";

        $run_query = mysqli_query($con, $query);

        if(mysqli_num_rows($run_query)> 0){

        header("Location:learn.php");
        }else{
            echo "Invalid login credentials";
        }

    mysqli_close($con);

}

?>