<?php

/* formatField */
function formatField($input) {
	$input = strip_tags($input);
	$input = str_replace(";", ":", $input);
	return trim($input);
}

/* Sanitize function */
function sanitize($dtype, $dlen, $data) {

	$data = stripslashes($data);
	$data = preg_replace("/x1a/",'', $data);
	$data = preg_replace("/x00/",'', $data);

	if($dlen != '0'){
		$data = substr($data, 0, $dlen);
	}

	if($dtype == '1'){
		// allow only numeric characters, space and '-'
		$data = preg_replace("/[^0-9\-\ ]/",'', $data);
	}
	
	if($dtype == '2'){
		// allow only alpha characters and space
		$data = preg_replace("/[^a-zA-Z~\ ]/",'', $data);
	}
	
	if($dtype == '3'){
		// allow only alphanumeric characters, space and '-'
		$data = preg_replace("/[^0-9a-zA-Z~\-\ ]/",'', $data);
	}
	
	if($dtype == '4'){
		// allow only alphanumeric characters w/ punctuation + carriage returns
		$data = preg_replace("|[^0-9a-zA-Z~@#$%=:;_,
\\n\\\!\^&\*\(\)\-\+\.\?\/\'\"]|",' ', $data);
	}

	$data = addslashes($data);

	return $data;
}


?>