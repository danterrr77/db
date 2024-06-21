<?php

require 'bd_1.php';

if (!$dbc)
{
    die('Error: connection failed');
}


$zagolovok = $_POST['zagolovok'];
$soderjanie= $_POST['soderjanie'];


$sql = "INSERT INTO `forum` ( `zagolovok`, `soderjanie`) VALUES ( '$zagolovok', '$soderjanie')";
mysqli_query($dbc, $sql);


$posting_contents = mysqli_query($dbc, "SELECT * FROM `post`");
$fetch_contents = mysqli_fetch_assoc($posting_contents);
$_SESSION['fetch_contents'] = [

    "zagolovok" => $fetch_contents['zagolovok'],
    "soderjanie" => $fetch_contents['soderjanie'],
];
?>

