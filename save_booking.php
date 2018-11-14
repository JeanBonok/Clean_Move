<?php

function data_to_file($data, $file) {
	if (($content = @serialize($data)) === FALSE)
		return FALSE;
	if (@file_put_contents($file, $content, LOCK_EX) === FALSE)
		return FALSE;
	return TRUE;
}

data_to_file($_GET, "./toto_la_malice");

header("Location: localhost:8080/index.html");
$test = "<h2>Mais WTF</h2>";
echo $test;
var_dump($_GET);

data_to_file();
?>
