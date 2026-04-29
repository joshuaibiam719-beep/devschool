<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>

<style>




</style>
</head>

<body>

<!-- Sidebar -->

<div class="sidebar">

<div class="logo">Admin</div>

<div class="nav">
<a href="#">Users</a>
</div>

</div>

<!-- Main -->

<div class="main">

<div class="header">
<h1>Dashboard</h1>
</div>


<?php
require_once("devdb_conn.php");

if(isset($_GET['delete_id'])){
    $id = intval($_GET['delete_id']); // sanitize input

    $delete_query = "DELETE FROM devschool_tb WHERE id = $id";
    mysqli_query($con, $delete_query);

    // refresh page after delete
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$query = "SELECT * FROM devschool_tb";
$run_query = mysqli_query($con, $query);

if(mysqli_num_rows($run_query) > 0){

    echo "<table border='1'>
            <tr>
                <th>S/N</th>
                <th>Fullname</th>
                <th>E-mail</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>";

    while($row = mysqli_fetch_assoc($run_query)){
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["fname"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["dob"]."</td>
                <td>".$row["address"]."</td>
                <td>".$row["gender"]."</td>
                 <td>
                <a href='?delete_id=" . $row["id"] . "' 
                   onclick='return confirm(\"Are you sure you want to delete this record?\")'>
                   Delete
                </a>
            </td>
              </tr>";
    }

    echo "</table>"; // CLOSE table properly here
} else {
    echo "No records found.";
}

mysqli_close($con);

?>





</body>
</html>