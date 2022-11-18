<?php
include('connection.php');
if(isset($_POST['club-add'])){
    $clubname = $_POST['ClubName'];
    $date = $_POST['date'];
    $ClubDescription = $_POST['ClubDescription'];

    $newquery = "INSERT INTO club (nom, date, description)
    VALUE('$clubname','$date','$ClubDescription')";
    mysqli_query($connection, $newquery);
}
?>