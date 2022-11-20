

<?php
     
     session_start();
     include ('index.php');
     include  ('connection.php');
?>


        <main>
            <center><h1>Welcome To You<span id="code">Code</span> Clubs</h1></center> 
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1><?php 
                            
                            $query = "SELECT id_pr FROM apprenant ORDER BY id_pr";
                            $query_run = mysqli_query($connection,$query);

                            $row = mysqli_num_rows($query_run);
                            echo  $row;
                             
                            ?>
                        </h1>
                        <span>Apprenants</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

            
                <div class="card-single">
                    <div>
                        <h1><?php 
                            
                            $query = "SELECT id FROM club ORDER BY id";
                            $query_run = mysqli_query($connection,$query);

                            $row = mysqli_num_rows($query_run);
                            echo  $row;
                             
                            ?>
                        </h1>
                        <span>clubs</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>
           
           
                
                    
            </div>
        </main>