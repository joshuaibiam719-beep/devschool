
<html>
<link rel="stylesheet" href="select.css">
<h2 class="head"><a href="index.html">DevSchool</a><span class="sp"> -Learn Coding the Smart Way !!.</span></h2>
</html>

<?php
error_reporting(E_ALL);

require_once("devdb_conn.php");

$query = " SELECT * FROM devschool_tb ";

$run_query = mysqli_query($con, $query);

if(mysqli_num_rows($run_query)> 0){

    while($row = mysqli_fetch_assoc($run_query)){
        echo "<table border='1'><tr><td>" . 
        $row["fname"] ."</td><td>". 
        $row["email"] ."</td><td>" .
        $row["dob"] ."</td><td>". 
        $row["address"] ."</td><td>" . 
        $row["gender"] ."</td></tr> <table>";


    }


}

mysqli_close($con);




?>
