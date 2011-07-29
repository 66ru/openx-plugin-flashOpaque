<?php

function Plugin_deliveryAdRender_flashOpaque_flashOpaque_delivery_postAdRender(&$code)
{
	$code = preg_replace('/(var\sox_swf\s=.*?$)/im', "\\1 ox_swf.addParam('wmode','opaque');", $code);
	
	return true;
}

?>
