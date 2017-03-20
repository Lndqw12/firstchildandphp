<?php
	echo date("Y:m:d H:i:s"); // дата
	
	$h = date("H"); // h - маленькая от 0 до 12. H - большое от 0 до 24
	
	if($h >= 6 && $h < 12)
		$img = 'morning';
	elseif($h >= 12 && $h < 18)
		$img = 'day';
	elseif($h >= 18 && $h < 24)
		$img = 'evening';
	else
		$img = 'night';
?>