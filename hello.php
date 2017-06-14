<?php 
$var = "<!DOCTYPE html><head>
	<title>test</title>
</head><body><ul class='main_ul'><li class='thisli'><div class='thisdivclass'><div class='internalclass'>hellofskdf</div></div></li><li class='thisli'><span>hi</span></li><li class='thisli'><span>okay</span></li><li class='thisli'><span>bye</span></li></ul></body></html>";
//echo $var;
$ulpos = strpos($var,'main_ul');
$ulsubstring = substr($var, $ulpos);
//print_r($ulsubstring);
 //$liexplode = explode('<li>','', $ulsubstring);
 //print_r($liexplode);
$ps = array();
$data = array();
 $count = preg_match_all('/<li[^>]*>(.*?)<\/li>/is', $ulsubstring, $matches);
for ($i = 0; $i < $count; ++$i) {
    $ps[] = $matches[0][$i];
}
//print_r($ps);
for ($i=0; $i < count($ps) ; $i++) { 
	$lipos = strpos($ps[$i],'<span>');
	$endlipos = strpos($ps[$i],'</span>');
	$data1 = substr($ps[$i], $lipos, $endlipos-$lipos);
	$data[] = array('name' => $data1);
}

echo "<pre>";
print_r($data);
echo "</pre>";
?>