<?php
	$t = <<<EOF
	Line 1
	Line 2
	Line 3
	so on
	so forth
EOF;
	$f = fopen("mydata.txt", "w");
	fwrite($f, $t);
	fclose($f);

	$f1 = fopen("mydata.txt", "r");
	echo $f1;
	while($line = fgets($f1)){
		echo $line;
	}
	fclose($f1);

	echo str_replace("\n", "<br>", file_get_contents("mydata.txt"));
?>