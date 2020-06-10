<?php

function ms()
{
	$mt = explode(' ', microtime());
	return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
}

?>
