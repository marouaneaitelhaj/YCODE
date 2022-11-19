<?php

include('connection.php');
include('index.php');


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Edit</title>
</head>
<body>
  
    <div class="container mt-5">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Club Edit 
                            <a href="indexApp.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">


                            <?php
                        if(isset($_GET['id'])){
                            $app_id = mysqli_real_escape_string($connection, $_GET['id']);

                            $query = "SELECT * FROM club WHERE id ='$app_id' ";
                            $query_run = mysqli_query($connection, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $app = mysqli_fetch_array($query_run);
                                // print_r($app);
                                ?>

<form action="addclubdb.php" method="POST" enctype="multipart/form-data"> 
                        <div class="mb-3">
                            <label>Club Name</label>
                            <input type="text" value="<?=$app['nom'];?>" name="ClubName" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Club Description</label>
                            <input type="text" value="<?=$app['description'];?>" name="ClubDescription" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Club Description</label>
                            <input type="date" value="<?=$app['date'];?>"  name="date" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label>Club Cover</label>
                            <!-- <img src="/images/youcode.jpg" name="photo"  class="form-control"> -->
                            <input type="file" value="<?=$app['logo'];?>"name="clubcover" class="form-control">
                        </div>
                        <div class="mb-3">
                        <button type="submit" name="club-edit" class="btn btn-primary">Add Club</button>
                        </div>
                    </form>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                               
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>