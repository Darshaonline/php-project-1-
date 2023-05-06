<?php
$url = "https://google.com"; 

$source_code = file_get_contents($url);

$character_count = strlen($source_code);

echo "The Character count of ". $url. " is ".$character_count; 
?>




