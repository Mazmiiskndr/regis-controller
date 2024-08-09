<?php
$dbhost = 'localhost'; 
$dbuser = 'root';
$password = '';
$dbname = 'attendance_app';

$dbconnect = new mysqli($dbhost, $dbuser, $password, $dbname);

if ($dbconnect->connect_error) {
    die('Server Error');
}
?>