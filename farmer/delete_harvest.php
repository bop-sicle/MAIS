<?php
session_start();
include('includes/config.php');



    $id = $_GET['id'];

    $query = "DELETE FROM harvest WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        echo "<script>window.location.href='harvest.php'</script>";
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }


?>
