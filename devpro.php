<?php
require_once("devdb_conn.php");

if (isset($_POST["sub_btn"])) {
  $fname = $_POST["fname"];
  $email = $_POST["email"];
  $dob = $_POST["dob"];
 $address = $_POST["address"];
 $gender = $_POST["gender"];
 $userName =$_POST["userName"];
 $passWord =$_POST["passWord"];

  $query = "INSERT INTO `devschool_tb`(fname,email,userName,passWord,dob,address,gender)
  VALUES('$fname' , '$email','$userName','$passWord','$dob','$address','$gender') ";

  $run_query = mysqli_query($con, $query);
  
    if($run_query){
        echo "Form submitted successful.";
    }else{
        echo "Submission failed.";
    }
}

 



?>