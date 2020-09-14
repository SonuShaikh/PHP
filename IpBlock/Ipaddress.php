<?php
	/* $browser = get_browser(null,true);
	print_r($browser); */
    @$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
	@$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
	$remot_addr = $_SERVER['REMOTE_ADDR'];
	$ip_address;
	if(!empty($http_client_ip)){
		$ip_address = $http_client_ip;
	}
	else if (!empty($http_x_forwarded_for)){
		$ip_address = $http_x_forwarded_for;
	}
	else{
		$ip_address = $remot_addr;
	}
	echo $ip_address; 
?>