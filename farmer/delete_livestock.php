<?php
session_start();
include('includes/config.php');



    $id = $_GET['id'];

    $query = "DELETE FROM livestock WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        echo "<script>window.location.href='livestock.php'</script>";
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }


?>
