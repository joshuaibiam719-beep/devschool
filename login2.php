<?php
session_start();

//Connect to database
require_once("devdb_conn.php");

//Collect input from HTML form 
if(isset($_POST["submit"])){

$userName = $_POST['userName'];
$passWord = $_POST['passWord'];


//Select existing credential data from the database for comparison
        $query = " SELECT * FROM devschool_tb  WHERE 
        
        userName = '$userName' AND  
        passWord = '$passWord' 
        
        ";

        $run_query = mysqli_query($con, $query);

        //Validate the user
        if(mysqli_num_rows($run_query)> 0){
            $user = mysqli_fetch_assoc($run_query);

            //Store the session
            $_SESSION['fname'] = $user['fname'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['userName'];

//Upon successful login, we redirect to the dashboard

        header("Location:learn.php");
        }else{
            echo "Invalid login credentials";
        }
//Close database connection.
    mysqli_close($con);

}

?>