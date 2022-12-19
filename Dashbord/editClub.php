<?php
session_start();
if (!isset($_SESSION['sid'])){
    header('location: login.php');
}
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
                            <!-- <a href="indexApp.php" class="btn btn-danger float-end">BACK</a> -->
                        </h4>
                    </div>
                    <div class="card-body">


                            <?php
                        if(isset($_GET['id'])){
                            $clb_id = mysqli_real_escape_string($connection, $_GET['id']);

                            $query = "SELECT * FROM club WHERE id ='$clb_id' ";
                            $query_run = mysqli_query($connection, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $clb = mysqli_fetch_array($query_run);
                                // print_r($app);
                                ?>

                    <form action="indexClub.php" method="POST" enctype="multipart/form-data"> 

                        <input type="hidden" name=clb_id value="<?=$clb['id'];?>">
                        <div class="mb-3">
                            <label>Club Name</label>
                            <input type="text" value="<?=$clb['nom'];?>" name="ClubName" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label>Club Description</label>
                            <textarea type="text" value="" name="ClubDescription" class="form-control"><?=$clb['description'];?></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Date</label>
                            <input type="date" value="<?=$clb['date'];?>"  name="date" class="form-control">
                        </div>
                       
                        <div class="mb-3">
                            <label>Club Cover</label>                          
                            <input type="file" name="clubcover" class="form-control">
                        </div>

                        <div class="mb-3">
                        <button type="submit" name="club-edit" class="btn btn-primary">Edit Club</button>
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

<?php
    include('footer.php');
    ?>
</html>

