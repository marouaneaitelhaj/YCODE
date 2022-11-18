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

echo $clubs;


if(isset($_POST['update_Apprenant']))
{
    $app_id = mysqli_real_escape_string($connection, $_POST['app_id']);

    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $secondname=mysqli_real_escape_string($connection,$_POST['secondname']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $photo=mysqli_real_escape_string($connection,$_POST['photo']["tmp_name"]);
    $clubs=mysqli_real_escape_string($connection,$_POST['selectClub']);
    

    $query = "UPDATE apprenants SET nom='$name', prenom='$secondname', email='$email',club='$clubs', photo='$photo'  WHERE id='$app_id' ";

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

    $query = "DELETE FROM apprenants WHERE id='$app_id' ";
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



?>