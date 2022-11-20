<?php
include('connection.php');
if(isset($_POST['club-add'])){
    $clubname = $_POST['ClubName'];
    $date = $_POST['date'];
    $ClubDescription = $_POST['ClubDescription'];
    $image = addslashes(file_get_contents($_FILES['clubcover']['tmp_name']));
    $newquery = "INSERT INTO club (nom, date, description, logo)
    VALUE('$clubname','$date','$ClubDescription','$image')";
    mysqli_query($connection, $newquery);
    header('Location: listappclub.php');
}
if(isset($_POST['club-edit'])){
    $clubname = $_POST['ClubName'];
    $date = $_POST['date'];
    $ClubDescription = $_POST['ClubDescription'];
    $image = addslashes(file_get_contents($_FILES['clubcover']['tmp_name']));
    $newquery = "UPDATE club SET nom = '$clubname',date = '$date',description = '$ClubDescription',logo = '$image'";
    mysqli_query($connection, $newquery);
    header('Location: listappclub.php');
}       
?>