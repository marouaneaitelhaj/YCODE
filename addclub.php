<?php
 
 include('index.php');
include('connection.php');
 

?>

<div class="container"  style="margin-top: 100px";>
<div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>Student Add 
                        <a href="indexApp.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
<form action="addclubdb.php" method="POST" enctype="multipart/form-data"> 
                        <div class="mb-3">
                            <label>Club Name</label>
                            <input type="text" name="ClubName" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Club Description</label>
                            <input type="text" name="ClubDescription" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Club Description</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label>Club Cover</label>
                            <!-- <img src="/images/youcode.jpg" name="photo"  class="form-control"> -->
                            <input type="file" name="clubcover" class="form-control">
                        </div>
                        <div class="mb-3">
                        <button type="submit" name="club-add" class="btn btn-primary">Add Club</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>