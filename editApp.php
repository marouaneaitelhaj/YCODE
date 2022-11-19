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
                        <h4>Student Edit 
                            <a href="indexApp.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">


                            <?php
                        if(isset($_GET['id'])){
                            $app_id = mysqli_real_escape_string($connection, $_GET['id']);

                            $query = "SELECT * FROM apprenant WHERE id_pr='$app_id' ";
                            $query_run = mysqli_query($connection, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $app = mysqli_fetch_array($query_run);
                                // print_r($app);
                                ?>

<form action="indexApp.php" method="POST" enctype="multipart/form-data"> 
                        <input type="hidden" name=app_id value="<?=$app['id_pr'];?>">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" value="<?=$app['nom'];?>" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Age</label>
                            <input type="number" value="<?=$app['age'];?>" name="Age" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Classroom</label>
                            <input type="text"  value="<?=$app['classe'];?>" name="Classroom" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label>role</label>
                            <select name="rolee" id="" class="form-control">
                                <option value="member">member</option>
                                <option value="president">president</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Choisir un club</label>
                            <select name="selectClub" class="form-control">
                                <?php
                                    $result = mysqli_query($connection, "SELECT nom FROM club;");
                                    while ($tables = mysqli_fetch_row($result)){
                                        ?>
                                        <option value="<?php
                                        echo($tables[0]);
                                        ?>
                                        ">
                                        <?php
                                        echo($tables[0]);
                                        ?>
                                        <?php
                                    }
                                    ?>
                                    </option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <button type="submit" name="update_Apprenant" class="btn btn-primary">updat Student</button>
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