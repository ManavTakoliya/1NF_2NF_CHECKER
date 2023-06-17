<?php 
	
	require_once("../inc/connection.php");

    extract($_POST);

    $fds  = array();
	$fds = explode(",", $txtfd);

	$matched = array();

	print_r($fds);

	$keys_char_array = array();

	$keys_char_array = str_split($txtkeys);

	print_r($keys_char_array);

	for($i=0; $i<count($fds); $i++){

		$ans = explode("->",$fds[$i])[0];

		for($j=0; $j<count($keys_char_array); $j++){

			if(strpos(strtolower($ans), strtolower($keys_char_array[$j])) !== false){

	    		 if (!(in_array(strtolower($ans), $matched)))
				  {
				    array_push($matched,$ans);
				  }

			}
				
		}
	}		

	// if(strtolower($ans) == strtolower($txtkeys)){
	// 	array_push($matched,$ans);
	// }else{
	// 	array_push($unmatched,$ans);
	// }

	print_r($matched);

	$is_valid = true;

	for($i=0; $i<count($matched); $i++){
		if(!($matched[$i] == $txtkeys)){
			$is_valid = false;
		}
	}

	if($is_valid == false){
		header("location:../dashboard.php?msg=Not valid Normal Form");
	}else{
		header("location:../dashboard.php?msg=Valid 2 Normal Form");
	}

?>