<!DOCTYPE html>
<html>
<head>
	<title>변수</title>
</head>
<body>
<?php
	// array 정의
	$people1 = array('sehoon','mike','sana');
	$people2 = ['sehoon','mike','sana'];

	// array 정의 (key-value)
	$people3 = ['sehoone', 11 => "iu"];

	// array 정의(문자열을 사용한 key-value)
	$people4 = [
		'twitter' => 'pratham',
		'web3' => 'vitto',
		'feedhive' => 'simon'
	];
?>
<p>people1 <?php echo $people1[0] ?>입니다.</p>
<p>people2 <?php echo $people1[1] ?>입니다.</p>
<p>people3 <?php echo $people3[11] ?>입니다.</p>
<p>people3 <?php echo $people4['twitter'] ?>입니다.</p>

</body>
</html>
