  <?php
include('connection.php');
include('index.php');
?>
<?php
$query = "select * from club";
$query_run = mysqli_query($connection, $query);
foreach($query_run as $club)
{
    ?>
    <div class="list-club">
        <div class="card" style="width: 18rem;margin: 1rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
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
            <?php
        }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>