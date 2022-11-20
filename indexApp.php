<?php
session_start();
include  ('connection.php');

if(isset($_POST['save-apprenant'])){
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $secondname=mysqli_real_escape_string($connection,$_POST['secondname']);
    // $email=mysqli_real_escape_string($connection,$_POST['email']);
    $class=mysqli_real_escape_string($connection,$_POST['Classroom']);
    $age=mysqli_real_escape_string($connection,$_POST['Age']);
    // $photo=mysqli_real_escape_string($connection,$_POST['photo']);
    $clubs=$_POST['selectClub'];
    $newquery = "SELECT id FROM `club` WHERE nom = '$clubs';";
    $result = mysqli_query($connection, $newquery);
    $ids = mysqli_fetch_row($result);
    $rolee=$_POST['rolee'];
    $query = "INSERT INTO apprenant (nom, classe, age, role,id_fr)
    VALUE('$name' , '$class', '$age', '$rolee', '$ids[0]')";

$query_run = mysqli_query($connection,$query);
if($query_run){
    echo "Student Created Successfully";
    header("Location: displayApp.php");
}
else{
   echo "Student Not Successfully";
   header("Location: apprenants.php");
}
}



if(isset($_POST['update_Apprenant']))
{
    $app_id = mysqli_real_escape_string($connection, $_POST['app_id']);
    
    
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $age=mysqli_real_escape_string($connection,$_POST['Age']);
    $classe=mysqli_real_escape_string($connection,$_POST['Classroom']);
    $role=mysqli_real_escape_string($connection,$_POST['rolee']);
    $clubs=$_POST['selectClub'];
    $newquery = "SELECT id FROM `club` WHERE nom = '$clubs'";
    $result = mysqli_query($connection, $newquery);
    $ids = mysqli_fetch_row($result);

    $query = "UPDATE apprenant SET nom='$name',  classe='$classe',age='$age', role='$role' , id_fr='$ids[0]' WHERE id_pr='$app_id' ";

    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo "Student Updated Successfully";
        header("Location: displayApp.php");
        exit(0);
    }
    else
    {
        echo "Student Not Updated";
        header("Location: apprenants.php");
        exit(0);
    }
}

if(isset($_POST['update_Apprenant']))
{
    $app_id = mysqli_real_escape_string($connection, $_POST['app_id']);
    
    
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $age=mysqli_real_escape_string($connection,$_POST['Age']);
    $classe=mysqli_real_escape_string($connection,$_POST['Classroom']);
    $role=mysqli_real_escape_string($connection,$_POST['rolee']);
    $clubs=$_POST['selectClub'];
    $newquery = "SELECT id FROM `club` WHERE nom = '$clubs'";
    $result = mysqli_query($connection, $newquery);
    $ids = mysqli_fetch_row($result);

    $query = "UPDATE apprenant SET nom='$name',  classe='$classe',age='$age', role='$role' , id_fr='$ids[0]'  ";

    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo "Student Updated Successfully";
        header("Location: displayApp.php");
        exit(0);
    }
    else
    {
        echo "Student Not Updated";
        header("Location: apprenants.php");
        exit(0);
    }
}



if(isset($_POST['delete_App']))
{
    $app_id = mysqli_real_escape_string($connection, $_POST['delete_App']);

    $query = "DELETE FROM apprenant ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "Student Deleted Successfully";
        header("Location: displayApp.php");
        exit(0);
    }
    else
    {
        echo "Student Not Deleted";
        header("Location: displayApp.php");
        exit(0);
    }
}
if(isset($_POST['delete_club']))
{
    $app_id = mysqli_real_escape_string($connection, $_POST['delete_club']);

    $query = "DELETE FROM club";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "Student Deleted Successfully";
        header("Location: listappclub.php");
        exit(0);
    }
    else
    {
        echo "Student Not Deleted";
        header("Location: listappclub.php");
        exit(0);
    }
}



?>