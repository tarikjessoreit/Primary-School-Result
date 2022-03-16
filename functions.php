<?php 

function get_g($m){
	if ($m<33) {
		$gp = 'F';
	}else if ($m<40) {
		$gp = 'D';
	}else if ($m<50) {
		$gp = 'C';
	}else if ($m<60) {
		$gp = 'B';
	}else if ($m<70) {
		$gp = 'A-';
	}else if ($m<80) {
		$gp = 'A';
	}else if ($m<100) {
		$gp = 'A+';
	}

	return $gp;
}
function get_gp($m){
	if ($m<33) {
		$gp = '0';
	}else if ($m<40) {
		$gp = '1.0';
	}else if ($m<50) {
		$gp = '2.0';
	}else if ($m<60) {
		$gp = '3.0';
	}else if ($m<70) {
		$gp = '3.5';
	}else if ($m<80) {
		$gp = '4.0';
	}else if ($m<100) {
		$gp = '5.0';
	}

	return $gp;
}