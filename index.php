<?php 

	$directory = __DIR__ . "\\test";
	
	if (file_exists( $directory)) {
		echo "$directory : EXISTs<br>";
	}else{
		echo "Not exist<br>";
		mkdir($directory);
		echo "$directory : Created succesfuly.<br>";
	}
$file = $directory."/file.php";
file_put_contents($file , "DATA");
// change permission
chmod($file, 0444); echo "Mode Changed to [0444]<br>";

if (is_writable($file)) {
	file_put_contents($file, "something");
}else{
	// rechange permission
	chmod($file, 0744); echo "Mode Changed to [0744]<br>";
	file_put_contents($file, "Congratulation You finished the Exercice");
	include($file);
}
