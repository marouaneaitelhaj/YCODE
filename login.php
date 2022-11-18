<?php

include('connection.php');

session_start();

if(isset($_POST['submit'])){
    $name=htmlspecialchars(strtolower(trim($_POST['name'])));
    $pass=md5($_POST['password']);
    $query = "INSERT INTO users(name,password)VALUE('$name','$pass')";

    if(mysqli_query($connection,$query)){
        echo "Bienvenue";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/loginstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<section class="login py-5 ">
    <div class="contaner">
        <div class="row g-0"id="form-to">
            <div class="col-lg-5">
                <img src="images/logo-youcode-ma.png">
            </div>
            <div class="col-lg-7 text-center py-5">
              <h1>Welcome <span class="back">Back</span></h1>
              <form action="index.php" method="POST">
                <div class="form-row pt-3 pt-5">
                  <div class="offset-1 col-lg-10">
                     <input type="text" class="np px-3" name="name" placeholder="Username">
                  </div>
                </div>
                <div class="form-row pt-3">
                  <div class="offset-1 col-lg-10">
                     <input type="password" class="np px-3" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-row py-3">
                  <div class="offset-1 col-lg-10">
                     <button type="submit" class="btn1" name="submit">SingUp</button>
                  </div>
                </div>

              </form>
              <p>Or Login With</p>
              <span class="icon-fb"><ion-icon name="logo-facebook"></ion-icon></span>
              <span class="icon-gl"><ion-icon name="logo-google"></ion-icon></span>
            </div>
        </div>
    </div>
  </section>

</body>
</html>

 