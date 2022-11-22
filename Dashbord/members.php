
<?php
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
                        <h4>Members View
                            <a href="apprenants.php" class="btn btn-primary float-end">Add Members</a>
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
                                    <!-- <th>club</th> -->
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    // var_dump($_GET) ;
                                    $cb_id=$_GET['id'];
                                    $query="SELECT a.* FROM apprenant a WHERE a.id_fr=$cb_id;";
                                    $query_run = mysqli_query($connection, $query);
                                
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                                                   
                                            ?>
                                            <tr>
                                                <td><?= $student['nom']; ?></td>
                                                <td><?= $student['classe']; ?></td>
                                                <td><?= $student['age']; ?></td>
                                                <td><?php echo '<img   style="width: 80px; height: 80px; border-radius: 50px;" src="data:image/jpeg;base64,'.base64_encode($student['photo']).'"/>'; ?></td>
                                                <!-- <td><?= $student['club']; ?></td> -->
                                               
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

<?php
    include('footer.php');
    ?>
</html>
