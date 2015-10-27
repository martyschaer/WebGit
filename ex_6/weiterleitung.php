<?php
	foreach ($_POST as $key => $value) {
		echo $key . " => " . $value . "<br>";
	}
/**
	$_GET
		Is passed in the url as parameters.
		Can be bookmarked.
	$_POST
		Is passed invisibly. Suitable for passwords and such.
		Cannot be bookmarked.
*/

?>