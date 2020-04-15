<?php
	$password = md5("12345");
	if(isset($_POST['uid']) && !empty($_POST['uid'])){
		$uid = $_POST['uid'];
		if(isset($_POST['pwd']) && !empty($_POST['pwd'])){
			$pwd = $_POST['pwd'];
			if($pwd==$password){
				$db = fopen("nodes.json", 'a');
				fputs($db, $uid.PHP_EOL);
				fclose($db);
				echo "Marked as verified! Account of the customer has been creator!";
			}else{echo "Incorrect Password! ";}			
		}else{echo 'Password cannot be empty. ';}
	}else{echo 'UID cannot be empty. ';}	
?>