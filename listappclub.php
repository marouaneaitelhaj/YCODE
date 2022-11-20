
<?php
    
    session_start();

    require  'connection.php';
    include_once('index.php');
    
 


?>
<link rel="stylesheet" href="./style.css">
    <div class="container mt-4">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Club Details
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nom Club</th>
                                    <th>Logo</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * from club";
                                    $query_run = mysqli_query($connection, $query);
                                    $_SESSION['count'] = mysqli_num_rows($query_run);
                                    
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $club)
                                        {
                                                                   
                                            ?>
                                            <tr>
                                                <td><?= $club['nom']; ?></td>
                                                <td>
                                                <?php echo '<img style="width: 50px; height: 50px;" src="data:image/jpeg;base64,'.base64_encode($club['logo']).'"/>'; ?>
                                                </td>
                                                <td><?= $club['date']; ?></td>
                                                <td><?= $club['description']; ?></td>
                                                <?php  $id  = $club['id'] ; ?>
                                                <td>
                                                
                                                    <a href="edit club.php?id=<?= $club['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    
                                                    <form action="indexApp.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_club" value="<?=$club['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
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
    