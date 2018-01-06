<?php 
function testf($tgl1, $tgl2){
	$tg  = date_create($tgl1);
	$tg2 = date_create($tgl2);
	
	$df = date_diff($tg,$tg2);
	
	return $df;
}