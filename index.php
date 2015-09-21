<!DOCTYPE html>
<html>
<head>
	<title>PHP Practice</title>
</head>
<body>
<?php echo $float =3.2; ?><br>
<?php echo $float =3.2+7; ?><br>
<?php echo $float =4/3; ?><br>
<?php //echo $float =4/0; ?> 
<hr>
<?php echo round($float, 1); ?><br>
<?php echo ceil($float); ?><br>
<?php echo floor($float); ?><br>
<hr>
<?php $integer = 3; ?>
<?php echo "Is {$integer} integer? ". is_int($integer); ?><br>
<br>
<?php echo "Is {$integer} float? ". is_float($integer); ?><br>
<?php echo "Is {$float} float? ". is_float($float); ?><br>
<br>
<?php echo "Is {$integer} numeric? ". is_numeric($integer); ?><br>
<?php echo "Is {$float} numeric? ". is_numeric($float); ?><br>
<h4>More Math in PHP <a target="_blank" href="http://php.net/manual/en/ref.math.php">Here</a></h4>

</body>
</html>