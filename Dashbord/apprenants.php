<?php
session_start();
if (!isset($_SESSION['sid'])){
    header('location: login.php');
}
include_once('index.php');
include('connection.php');


?>


<div class="container card-add">


    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> Yess
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> -->


    <div class="row">
        <div class="col-md-12">
            <div class="card-header text-h4">
                <h4>Student Add
                    
                </h4>
            </div>
            <div class="card-body">
                <form action="indexApp.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="text-label">Nom</label>
                        <input type="text" name="name" class="form-control" placeholder="Entrer votre nom" required>
                    </div>
                    <div class="mb-3">
                        <label class="text-label">Photo</label>
                        <input type="file" name="clubcover" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="text-label">Age</label>
                        <input type="number" name="Age" class="form-control" placeholder="Entrer votre age" required>
                    </div>
                    <div class="mb-3">
                        <label class="text-label">Classroom</label>
                        <select name="Classroom" value="5" class="form-control" required>
                            <option value="Ada Lovelace">Ada Lovelace</option>
                            <option value="Alan Turing">Alan Turing</option>
                            <option value="MARGARET HAMILTON">MARGARET HAMILTON</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="text-label">role</label>
                        <select name="rolee" id="" class="form-control">
                            <option value="member">member</option>
                            <option value="president">president</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="text-label">Choisir un club</label>
                        <select name="selectClub" class="form-control">
                            <?php
                            $result = mysqli_query($connection, "SELECT nom FROM club;");
                            while ($tables = mysqli_fetch_row($result)) {
                            ?>
                                <option value="<?php
                                                echo ($tables[0]);
                                                ?>
                                        ">
                                    <?php
                                    echo ($tables[0]);
                                    ?>
                                <?php
                            }
                                ?>
                                </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="save-apprenant" class="btn btn-primary">Save Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</div>

</body>

<?php
   
   include('footer.php');

?>

</html>