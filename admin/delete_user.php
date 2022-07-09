<?php
session_start();
include('includes/config.php');



    $id = $_GET['user_id'];

    $query = "DELETE FROM users WHERE user_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        echo "<script>window.location.href='users.php'</script>";
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }


?>
