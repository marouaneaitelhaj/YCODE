<?php

session_start();
    if (!isset($_SESSION['sid'])){
        header('location: login.php');
    }
include('connection.php');



if(isset($_POST['club-add'])){

    $clubname = $_POST['ClubName'];
    $currentDateTime = new \DateTime();
    $dateTime = $currentDateTime->format('l j M Y H A');
    $date = $dateTime;
    $ClubDescription = $_POST['ClubDescription'];
    $image = addslashes(file_get_contents($_FILES['clubcover']['tmp_name']));
    $newquery = "INSERT INTO club (nom, date, description, logo)
    VALUE('$clubname','$date','$ClubDescription','$image')";
    mysqli_query($connection, $newquery);
    header('Location: displayClub.php');

}


if(isset($_POST['club-edit'])){

    $clb_id = mysqli_real_escape_string($connection, $_POST['clb_id']);

    $clubname = $_POST['ClubName'];
    $date = $_POST['date'];
    $ClubDescription = $_POST['ClubDescription'];
    $image = addslashes(file_get_contents($_FILES['clubcover']['tmp_name']));
    $newquery = "UPDATE club SET nom = '$clubname',date = '$date',description = '$ClubDescription',logo = '$image' where id = $clb_id ";

    mysqli_query($connection, $newquery);
    header('Location: displayClub.php');
}  


if(isset($_POST['delete_club']))
    {
        $clb_id = mysqli_real_escape_string($connection, $_POST['delete_club']);
        $query = "DELETE FROM club where id = $clb_id";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            echo "Student Deleted Successfully";
            header("Location: displayClub.php");
            exit(0);
        }
        else
        {
            echo "Student Not Deleted";
            header("Location: displayClub.php");
            exit(0);
        }
    }    
    
    

    
?>