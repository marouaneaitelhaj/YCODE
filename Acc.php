<?php
include('connection.php');
?>
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <div class="container-x">
<?php
$query = "select * from club";
$query_run = mysqli_query($connection, $query);
foreach($query_run as $club)
{
    ?>
    

<div class="row">
    <div class="list-club">
        <div class="card" style="width: 30rem;margin: 1rem;">
        <?php echo '<img class="card-img-top"  src="data:image/jpeg;base64,'.base64_encode($club['logo']).'"/>'; ?>
            <div class="card-body">
                <h5 class="card-title">
                    <?php
                echo $club["nom"];
                ?>
                    </h5>
                    <p class="card-text">
                    <?php
                echo $club["description"];
                ?>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>  
            </div>
            <?php
        }
        ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>