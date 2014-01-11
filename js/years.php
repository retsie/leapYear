<?php
$year = $_GET['years'];
$month = $_GET['months'];
$days = 0;
	if(($year % 4)==0){
		if (in_array($month, array('jan', 'mar', 'may','jul', 'aug', 'oct', 'dec'))) {
			$days = 31;
		} elseif (in_array($month, array('apr', 'jun', 'sep', 'nov'))) {
			$days = 30;
		}  elseif (in_array($month, array('feb'))) {
			$days = 29;
		}
	}else{
		if (in_array($month, array('jan', 'mar', 'may','jul', 'aug', 'oct', 'dec'))) {
			$days = 31;
		} elseif (in_array($month, array('apr', 'jun', 'sep', 'nov'))) {
			$days = 30;
		}  elseif (in_array($month, array('feb'))) {
			$days = 28;
		}
	}

if ($days !== false) {
	echo json_encode(
		array('years' => $year,
			  'months' => $month,
			  'days'	=> $days,
			  'result' => 'success'));
} else {
	echo json_encode(
		array('months' => $month,
			  'result' => 'failed'));
}