
<?php
    
    session_start();

    require  'connection.php';
    include_once('index.php');
    
 


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student CRUD</title>
</head>
<body>
  
    <div class="container mt-4">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details
                            <a href="apprenants.php" class="btn btn-primary float-end">Add Students</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nom Apprenant</th>
                                    <th>Classroom</th>
                                    <th>Age</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                    <th>Club</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "select * from apprenant";
                                    $query_run = mysqli_query($connection, $query);
                                    $_SESSION['count'] = mysqli_num_rows($query_run);
                                    
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                                                   
                                            ?>
                                            <tr>
                                                <td><?= $student['nom']; ?></td>
                                                <td><?= $student['classe']; ?></td>
                                                <td><?= $student['age']; ?></td>
                                                <td><?= $student['role']; ?></td>
                                                <?php  $id_fr  = $student['id_fr'] ; ?>
                                                <td>
                                                
                                                    <a href="editApp.php?id=<?= $student['id_pr']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="indexApp.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_App" value="<?=$student['id_pr'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                                    <?php
                                                    $sqlresult = mysqli_fetch_row(mysqli_query($connection, "SELECT nom FROM `club` WHERE id = $id_fr;"));
                                                    ?>
                                                <td><?= $sqlresult[0]?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }

                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
