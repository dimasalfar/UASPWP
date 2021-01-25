<?php
// include database connection file
include_once("UASspp.php");
 
// Get id from URL to delete that user

if(isset($_GET['id'])) {
    $NIM = $_GET['id'];

    echo $NIM;
    // Delete user row from table based on given id
    $result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE NIM='$NIM'");
 
}

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:datamahasiswa.php");
?>