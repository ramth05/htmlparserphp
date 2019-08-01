<?php
error_reporting(0);

const VERSION = "1.9.7"
/*
// Create a stream
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

//reuired because site using cookies
$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$html = file_get_contents('https://journals.sagepub.com/home/VRT', false, $context);


$dom = new domDocument; 
   
// load the html into the object
$dom->loadHTML($html); 

// discard white space
$dom->preserveWhiteSpace = false; 

//*** the table by its tag name ***
$aElements = $dom->getElementsByTagName('a');

//echo "<pre>";

foreach($aElements as $t){
	if($t->textContent == "Submit Paper"){
		//print_r($t);
		//fetch the URL of "href" attribute
		foreach($t->attributes as $a){
			if($a->name ==="href"){
				echo $a->value;
				break;
			}
		} 
		break;
	}	
} 
*/
?>
