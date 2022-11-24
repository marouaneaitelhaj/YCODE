<?php

include('connection.php');  
session_start();
if (isset($_SESSION['sid'])){
  header('location: dashboard.php');
}
include 'connection.php';
if (isset($_POST['submit']) && (!empty($_POST['name'])) && (!empty($_POST['password']))) {
    $user = $_POST['name'];
    $pass = $_POST['password'];
    $usernam_list = "SELECT user FROM adminn;";
    $password_list = "SELECT pass FROM adminn;";
    $list = mysqli_query($connection,$usernam_list);
    $list2 = mysqli_query($connection,$password_list);
    while ($result = mysqli_fetch_row($list) and $passss = mysqli_fetch_row($list2)){
      if($user == $result[0] and $pass == $passss[0]){
        session_start();
        $_SESSION['sid']=session_id();
        header('location: dashboard.php');
      } else{
            echo '<script> cleartext(); </script>';
            $errorr = "The password or username is incorrect";
          }
        
      
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
    <link rel="preconnect" href="https://fonts.gstatic.com">  
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@700&family=Pacifico&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Mono&family=Space+Mono:wght@700&display=swap" rel="stylesheet">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/loginstyle.css?v=<?php echo time();?>">
</head>
<body>

<section class="login py-5 ">
    <div class="contaner cont">
        <div class="row g-0 rowto" id="form-to">
            <div class="col-lg-5">
                <img src="images/logo-youcode-ma.png">
            </div>
            <div class="col-lg-7 text-center py-5">
              <h1>Welcome <span class="back">Back</span></h1>
              
              <form action="" method="POST">
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
                     <button type="submit" class="btn1" name="submit">Login</button>
                  </div>
                </div>

              </form>
              
            </div>
        </div>
    </div>
  </section>
  


  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>

 