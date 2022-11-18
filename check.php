<?php
include('connection.php');  
if(isset($_POST['submit'])){
    $user = "SELECT user FROM `admin`;";
    $pass = "SELECT pass FROM `admin`;";
    $name = $_POST['name'];
    $password = $_POST['password'];
    if($name == $user && $password == $pass){
        echo "hhhhhhh";
    }
}