<?php
$DATABASE_HOST = 'ID362508_SortingHat.db.webhosting.be';
$DATABASE_USER = 'ID362508_SortingHat';
$DATABASE_PASS = 'Daniel01';
$DATABASE_NAME = 'ID362508_SortingHat';

$link = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>