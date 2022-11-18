


<?php
 
 include_once('index.php');
 include('connection.php');

 

?>


    <div class="container"  style="margin-top: 100px";>

    
        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> Yess
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> -->

         
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>Student Add 
                        <a href="indexApp.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="indexApp.php" method="POST" enctype="multipart/form-data"> 
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Age</label>
                            <input type="number" name="Age" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Classroom</label>
                            <input type="text" name="Classroom" class="form-control">
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
                        <button type="submit" name="save-apprenant" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


 </div> 
 
</body>
</html>