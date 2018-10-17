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
   /*.search-bar:hover{
    width: 50%;
   }*/
  </style>

</head>

<?php
// will check whether user login or not

// this code will check whether user login or not 
session_start();
if(!isset($_SESSION['MKohaanlaisd'])){
  echo "login please";
  return;
}
session_write_close();


?>
<?php include 'code/inc.home.php'; ?>
<body>
<!-- nav here -->

<?php nav();?>
  

<!-- nav ends here -->

<div class=" w3-margin-top">
  <div class="row content" id="mainbody">
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







<script type="text/javascript">
counter=0;
function searchpeople(input) {
  str=input.value;
    if(str.length>1){
    $.get("../async/searchpeople.php?query="+str,function(data,status){
      document.getElementById('hint').innerHTML=data;
      // alert(status);
      
    });
    }else{
      document.getElementById('hint').innerHTML="";
    }
}


function requestForConnect(str,obj){
  console.log(str);
  $.get("../async/connect-request.php?agent="+str,function(data,status){
    obj.innerHTML=data;
  });
}


function requestCancel(str,obj){
  if(confirm("Are you sure?")){
    $.get("../async/cancel-request.php?agent="+str,function(data,status){
    obj.innerHTML=data;
  });
  }
  // alert("modkhalid");
}

var not=document.getElementById('showNotification');
not.onclick = ()=>{

  block=document.getElementById('notification');
  if(counter%2==0){
    block.style.display="block";
    block.style.transition="3s";
    counter=1;
  }else{
    block.style.display="none";
    counter=0;
  }
  

}

var bod=document.getElementById('mainbody');
bod.onclick=()=>{
  document.getElementById('notification').style.display="none";
  counter=0;
  document.getElementById('hint').innerHTML="";
}

</script>
</html>