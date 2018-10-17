<?php

if(isset($_REQUEST['query'])){
	$query=$_REQUEST['query'];
	include '../common/connection.php';
	$sql="SELECT * FROM usermodl29 where username like '%$query%' or firstname like '%$query%' or lastname like '%$query%' ";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$user_id=setId($row['userid']);
			// $user_id=($user_id*5+300)*5;
			// $user_id=base64_encode($user_id);
			// $user_id=bin2hex($user_id);
			?>

			<div class="row w3-border-bottom " style="width: 100%;">
				
				<div class="col-8 w3-padding-left">
					<p style="font-size: 15px;"><b><?=$row['username']?></b> <small><?=$row['firstname']?> <?=$row['lastname']?></small></p>

				</div>
				<div class="col-4">
					<button class="w3-right w3-input" onclick="requestForConnect('<?=$user_id?>',this)">click me</button>
				</div>
			</div>



			<?php
		}
	}else{
		echo "user not found <b>$query</b>";
	}
}


?>