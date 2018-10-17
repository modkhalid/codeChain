<?php

function topHeader(){
	?>

 <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <script src="../js/main.js"></script>
<link rel="icon" type="image/gif" href="../img/logo.png">
  <!-- LOGO -->
  

	<?php
}


function topHeaderInner(){
  ?>

 <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="../../css/main.css">
  <script src="../../js/main.js"></script>
  <link rel="icon" type="image/gif" href="../../img/logo.png">

  <!-- LOGO -->
  

  <?php
}




function nav(){



  ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="index.php"><img src="../img/logo.png" width="30" height="30"> Code Chain</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav container justify-content-end">
      <li class="nav-item">
       <div class="row w3-margin-right">
      
          <div class="input-group "  style="width: 400px;" >
            
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" onkeyup="searchpeople(this)">

          </div>
          
           

      </div>
      <div class="row" style="position: absolute;z-index: 999;">
        <div style="max-height: 200px;width: 400px;background-color: white;border: 1px solid gray;overflow: auto;padding-left: 5px;" id="hint">
          
        </div>
        
      </div>
               
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../img/logo.png" width="27" height="27" style="border-radius: 50%;"> Mohammad Anas</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i> Profile</a>
           <a class="dropdown-item" href="#"><i class="fas fa-envelope"></i> Messages</a>
          <a class="dropdown-item" href="#"><i class="fas fa-sliders-h"></i> Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" id="showNotification"><i class="fas fa-globe"></i></a>
          <div class="container-fluid" style="position: absolute;z-index: 999;width: 400px;right: 0px;
          height: 400px;background-color: white;overflow: auto; margin-top: 10px; display: none;" id="notification">     
          <!-- <div class="row"> -->
            <div class="row" style="text-align: center;margin-top: 5px;">

              <div class="w3-card-2 btn-group mx-auto d-block">
                  <button type="button" class="btn btn-white">Apple</button>
                  <button type="button" class="btn btn-white">Apple</button>
                  <button type="button" class="btn btn-white">Apple</button>
                  <button type="button" class="btn btn-white">Apple</button>
                  <button type="button" class="btn btn-white">Apple</button>
              </div>
            </div>   

            <div class="row" id="freindrequest">
              
            </div>     
          
          </div>
      </li>

       <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i> Bells</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Bell 1</a>
          <a class="dropdown-item" href="#">Bell 2</a>
          <a class="dropdown-item" href="#">Bell 3</a>
      </li>
    </ul>
  </div>
</nav>



  <?php
}




function navInner(){



  ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="index.php"><img src="../../img/logo.png" width="30" height="30"> Code Chain</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav container justify-content-end">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../img/logo.png" width="27" height="27" style="border-radius: 50%;"> Mohammad Anas</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i> Profile</a>
           <a class="dropdown-item" href="#"><i class="fas fa-envelope"></i> Messages</a>
          <a class="dropdown-item" href="#"><i class="fas fa-sliders-h"></i> Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-globe"></i> About</a>
      </li>

       <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i> Bells</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Bell 1</a>
          <a class="dropdown-item" href="#">Bell 2</a>
          <a class="dropdown-item" href="#">Bell 3</a>
      </li>
    </ul>
  </div>
</nav>



  <?php
}

?>

