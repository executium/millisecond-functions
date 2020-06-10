<?php

function ms()
{
	$mt = explode(' ', microtime());
	return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
}

$ms=ms();

echo 'PHP: '.$ms;

?>

<div id="output">Javascript (local): </div>

<script>


function ms()
{
  return new Date().getTime();
}

var out=ms();
document.getElementById('output').innerHTML += out+'<div>Difference PHP vs Javascript (local): '+(<?php echo $ms; ?>-out)+'</div>';

</script>
