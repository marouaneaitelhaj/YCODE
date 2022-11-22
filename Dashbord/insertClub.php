


<?php
 
 include_once('index.php');

 

?>


    <div class="container"  style="margin-top: 100px";>

    
        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> Yess
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> -->

         
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>Club Add 
                        <a href="indexApp.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="indexApp.php" method="POST"> 
                        <div class="mb-3">
                            <label>Club Logo</label>
                            <input type="file" name="logo" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Club Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Date de Création</label>
                            <input type="date" name="date-creation" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea type="email" name="description" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                        <button type="submit" name="save-club" class="btn btn-primary">Save Club</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


 <!-- </div>  -->
 
</body>
</html>