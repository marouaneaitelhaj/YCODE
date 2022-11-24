
<?php
    require  'connection.php';
    
    session_start();
    if (!isset($_SESSION['sid'])){
        include_once('headerlogin.php');
    }else{
        include_once('headerlogout.php');   
    }


?>
             <center><h1 class="title-acceuil">Présentation des clubs</h1></center>
    <div class="container howa cont-howa">
             
            <?php
              
                $query ="SELECT * FROM club";
                $query_run = mysqli_query($connection,$query);

                if(mysqli_num_rows($query_run) > 0){

                    foreach($query_run as $club){

                        ?>
                            <div class="card">
                            <img class="card-img-top"  src="<?= 'data:image/jpeg;base64,'.base64_encode($club['logo'])?>"/>
                                <div class="card-body">
                                <center><h5 class="card-title"><?= $club['nom']; ?></h5></center>
                                <p class="card-text txt-desc"><?= $club['description']; ?></p>
                                </div>
                                <div class="card-footer">Date de Creation:
                                <small type="date" class="text-muted"><?= $club['date']; ?></small>
                                </div>

                            </div>
                        <?php
                    }    
                }
                else{
                    echo "hhhhhhhhhhhhhhhhhhhhhhhhh";
                }  
                 

            ?>  
    </div>           
    
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
     


</html>

<?php
   
   include('footer.php');

?>