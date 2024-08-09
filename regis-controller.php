<?php
include './connection.php';
$id = $_POST['id'];
$parameter = $_POST['parameter'];
if($id == "kontroler" && $parameter!=""){
    $sql = mysqli_query($dbconnect, "UPDATE states SET status='0', controller_notes='$parameter'");
    echo $parameter;
}

?>
