<?php
	/* echo date("Y:m:d H:i:s"); // дата */
	
	 $h = date("H"); // h - маленькая от 0 до 12. H - большое от 0 до 24
	
	if($h >= 6 && $h < 12)
		$img = 'morning';
	elseif($h >= 12 && $h < 18)
		$img = 'day';
	elseif($h >= 18 && $h < 24)
		$img = 'evening';
	else
		$img = 'night';
	
	
	
	$h = date("H");
	$i = date("i");
	if(($h == 1) || ($h == 21))
		$hs = 'час';
	elseif(($h <= 4) || ($h >= 22))
		$hs = 'часа';
	else
		$hs = 'часов';
	if($i < 10)
		$i0 = $i;
	else
		$i0 = ($i % 10);
	if(($i >= 10) && ($i <= 20))
		$is = 'минут';
	elseif($i0 == 1)
		$is = 'минута';
	elseif($i0 >= 2 && $i0 <= 4)
		$is = 'минуты';
	else
		$is = 'минут';
?>