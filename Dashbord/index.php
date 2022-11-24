<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <title>Document</title>
</head>
<body>
  <!-- Page content holder -->
 <div class="overlayy" id="overlayy"></div>

<div class="page-content p-5" id="content">
  <!-- Toggle button -->
  <div class="main-content">
    <div>
            <h2>
                <label id="sidebarCollapse" for=""><span class="las la-bars"></span></label> You <span id="code">Code</span>
            </h2>
            </div>  
              <div class="search-wrapper">
                  <span class="las la-search"></span>
                  <input type="search" name="" placeholder="Search here">
              </div>
            <div class="user-wrapper">
                
                
            <a href="logout.php"  class="d-inline">
                <button type="submit" class="btn btn-outline-primary me-2">Logout</button>
</a>
            
    </div>
        </div>
  </div>
    <!-- Vertical navbar -->
<div class="vertical-nav" id="sidebar">
  <div class="py-4 px-3 mb-4">
    <div class="media d-flex align-items-center">
      <div class="media-body">
        <h4 class="m-0 text-white las la-laptop-code">YouCode</h4>
        <p class="font-weight-light font-weight-normal mb-0">Gestion des club</p>
      </div>
    </div>
  </div>
  <ul class="nav flex-column  mb-0">
                <li>
                    <a href="dashboard.php" class="nav-link  font-italic"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="acceuil.php" class="nav-link  font-italic"><span class="las la-home"></span>
                    <span>Acceuil</span></a>
                </li>
                <li>
                    <a href="addclub.php" class="nav-link  font-italic"><span class="las la-clipboard-list"></span>
                    <span>Add Clubs</span></a>
                </li>
                <li>
                    <a href="displayClub.php" class="nav-link  font-italic"><span class="las la-clipboard-list"></span>
                    <span>Clubs</span></a>
                </li>
                <li>
                    <a href="apprenants.php" class="nav-link  font-italic"><span class="las la-users"></span>
                    <span>Add Apprenants</span></a>
                </li>
                <li>
                    <a href="displayApp.php" class="nav-link  font-italic"><span class="las la-users"></span>
                    <span>Apprenants</span></a>
                </li>
  </ul>
  
</div>
<!-- End vertical navbar -->



  
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="css/main.js"></script>

<?php
     
    

?>


</html>

