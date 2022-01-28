<?php

/**
 * Method 1
 */

// Declare an array
$arr = array("Welcome","to", "GeeksforGeeks",
	"A", "Computer","Science","Portal");
	
// Converting array elements into
// strings using implode function
echo implode(" ",$arr);



/**
 * Method 2
 */

// Declare multi-dimensional array
$value = array(
	"name"=>"GFG",
	array(
		"email"=>"abc@gfg.com",
		"mobile"=>"XXXXXXXXXX"
	)
);

// Use json_encode() function
$json = json_encode($value);

// Display the output
echo($json);

?>
