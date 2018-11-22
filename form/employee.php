<?php

function data_to_file($data, $file) {
	if (($content = @serialize($data)) === FALSE)
		return FALSE;
	if (@file_put_contents($file, $content, LOCK_EX) === FALSE)
		return FALSE;
	return TRUE;
}

$handle = fopen("employee_result.csv", "a");

$fields = $_POST;

# fields needs to be an array of values.
fputcsv($handle, $fields);

fclose($handle);

header("Location:../page/thanks.html");
exit;

?>
