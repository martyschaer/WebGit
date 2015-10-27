<?php
	$weekday = ["Monday",
				"Tuesday",
				"Wednesday",
				"Thursday",
				"Friday",
				"Saturday",
				"Sunday"];
	foreach ($weekday as $key => $value) {
		echo($value . " -> " . $key . "<br>");
	}

	echo(count($weekday));
?>