<?php
$expid=$_GET['expid'];
$filename="../exp" . $expid . "/tasks";
$tasks=file_get_contents($filename);
$convert = explode("\n", $tasks); 
for ($i=0;$i<count($convert);$i++) 
{
	print '<pre>';
    print $convert[$i]; //write value by index
	print "\n";
	print'</pre>';
}
?>
