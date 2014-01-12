<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	<style type="text/css">body, select {font-size: 30px;}</style>
</head>
	<body>
		year:
		<select name="year" id="years">
			   <?php for($i = 2014; $i >= 1980; $i--): ?>
				      	<option value="<?= $i ?>"><?= $i ?></option>
			   <?php endfor ?>
		 </select>
		 
		Month:
		<? $month = array('jan'=>'January','feb'=>'February',
				  'mar'=>'March','apr'=>'April',
				  'may' => 'May', 'jun' => 'June',
				  'jul' => 'July', 'aug' => 'August',
				  'sep' => 'September', 'oct' => 'October', 
				  'nov' => 'November', 'dec'=> 'December');
		echo'<select name="Words" id = "months">';  
		foreach($month as $let=>$word){ 
		    echo'<option value="'.$let.'">'.$word.'</option>'; 
		} 
			echo'</select>'; ?>
			
		days:
		<select name="day" id="days">
			   <?php for($i = 1; $i <= 31; $i++): ?>
				      	<option value="<?= $i ?>"><?= $i ?></option>
			   <?php endfor ?>
		 </select>
		<div id="print"></div>
		<script type="text/javascript" src="js/jquery.1.10.2.js"></script>
		<script type="text/javascript" src="js/year.js"></script>
	</body>
</html>
