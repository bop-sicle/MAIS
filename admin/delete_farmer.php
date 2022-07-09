<?php
session_start();
include('includes/config.php');



    $fid = $_GET['farmer_id'];

    $query = "DELETE FROM farmers WHERE farmer_id='$fid' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        echo "<script>window.location.href='farmers.php'</script>";
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }


?>
