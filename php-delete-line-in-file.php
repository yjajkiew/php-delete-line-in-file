<?php 
	
function deleteLineInFile($file,$string)
{
	$i=0; $j=0; $array=array();
	
	$read = fopen($file, "r") or die("can't open the file");
	
	while ($data = fgetcsv($read, 1024, ';')) {
		foreach($data as $d) 
		{
			if(!$j) $array[$i] .= $d;
			else $array[$i] .= ';' . $d;
			++$j;
		}
		$j=0;
		//$array[$i] = $data[0] . ';' . $data[1];
		++$i;
	}
	fclose($read);
	
	$write = fopen($file, "w") or die("can't open the file");
	
	foreach($array as $a) {
		if(!strstr($a,$string))
		{
			fwrite($write,$a);
			fwrite($write,PHP_EOL);
		}
	}
	fclose($write);
}

?>