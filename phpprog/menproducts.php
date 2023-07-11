<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin: *");
error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "~/php-error.log");

	
	$con = mysqli_connect("localhost","root","","finerthreads");
    if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	
	$result = mysqli_query(
		$con,
		"SELECT * FROM `menproducts`");
		$output = array();		
	if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$response = array();
			$response['id'] = $row['id'];
			$response['name'] = $row['name'];
			$response['img'] = $row['imageurl'];
			$response['price'] = $row['price'];
			array_push($output, $response);
		}
		$json_response = json_encode($output);
		echo $json_response;
		
		mysqli_close($con);
	}else{
		response(NULL, NULL, 200,"No Record Found");
		}

?>