<?php
// echo "test";
if(isset($_POST['key'])){
if($_POST['key']=="x124sr3sQQ2d"){
include './connection.php';
$sql = mysqli_query($dbconnect,'SELECT*FROM states WHERE status="1"');
$query = mysqli_num_rows($sql);
if ($query>0){
    $query = mysqli_fetch_assoc($sql);
    $json = array("status"=>0, "id"=>$query['id']);
}else{
    $json = array("status"=>1, "id"=>'');
}
echo json_encode($json);
}
}