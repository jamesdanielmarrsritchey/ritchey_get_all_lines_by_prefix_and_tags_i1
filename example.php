<?php
# App.php
$location = realpath(dirname(__FILE__));
require_once $location . '/ritchey_get_all_lines_by_prefix_and_tags_i1_v1.php';
$return = ritchey_get_all_lines_by_prefix_and_tags_i1_v1("{$location}/temporary/Source File.txt", 'Content:', NULL, NULL);
if (@is_array($return) === TRUE){
	print_r($return);
} else {
	echo "FALSE" . PHP_EOL;
}
?>