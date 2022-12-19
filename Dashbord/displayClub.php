
<?php
    
    session_start();
    if (!isset($_SESSION['sid'])){
        header('location: login.php');
    }

    require  'connection.php';
    include_once('index.php');
    
 


?>

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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT c.id,c.nom,c.date,c.description,c.logo,COUNT(a.id_pr) as members from club c left join apprenant a on c.id = a.id_fr group by c.id";
                                    // $query="SELECT * FROM club";
                                    $query_run = mysqli_query($connection, $query);
                                                 
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $club)
                                        {
                                                                   
                                            ?>
                                            <tr>
                                                <td><?= $club['nom']; ?></td>
                                                <td>
                                                <?php echo '<img   style="width: 80px; height: 80px; border-radius: 50px;" src="data:image/jpeg;base64,'.base64_encode($club['logo']).'"/>'; ?>
                                                </td>
                                                <td><?= $club['date']; ?></td>
                                                <!-- <td><?= $club['description']; ?></td> -->
                                                <td class="club-desc" title='<?php echo $club['description']?>'><?php echo $club['description']?></td>     
                                                <td>
                                                <a href="members.php?id=<?= $club['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="editclub.php?id=<?= $club['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="indexClub.php" method="POST" class="d-inline">
                                                        <button type="submit" value="<?=$club['id'];?>"  name="delete_club" class="btn btn-danger btn-sm">Delete</button>
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


    <?php
    include('footer.php');
    ?>
    