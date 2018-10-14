<!DOCTYPE html>
<html>
<head>
  <title>Code Chain | Home</title>
 <?php include '../common/common-code.php'; topHeader(); ?>
<link rel="icon" type="image/gif" href="../img/logo.png">
  <style type="text/css">
  .mod-margin{
    margin-top: 50px;
  }
  
  .mod-margin2{
    margin-top: 30px;
  }
  .list-group-item{
    border: 0px solid white;
    margin-left: 0px;
    padding-left: 0px;
    cursor: pointer;
  }
  .mod-underlin{
    text-decoration: underline;
  }
  .list-group{
    margin-left: 0px;
    padding-left: 0px;
  }
  
   .mod-line{
    line-height: 0.5;
  }
  .center{
      text-align: center;
   }
   .card-body{
    color: gray;
   }
   .content{
    padding-left: 20px;
    padding-right: 20px;
   }
   .likes i {
    margin-right: 6px;
   }
  </style>

</head>
<?php include 'code/inc.home.php'; ?>
<body>
<!-- nav here -->

<?php nav();?>
  

<!-- nav ends here -->

<div class=" w3-margin-top">
  <div class="row content">
    <!-- bio and online people div start -->
    <div class="col-md-3" style="height: 600px;overflow: auto;">
      <?php lefthome();  ?>
    </div>


    <!-- bio ends here -->
    <div class="col-md-9" style="height: 600px;overflow:auto;">
   
      <?php righthome(); ?>

    </div>
  </div>
</div>




</body>
</html>