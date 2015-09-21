<!DOCTYPE html>
<html>
<head>
	<title>PHP Practice</title>
</head>
<body>
<?php 
	$a =3;
	$b = 4;
 ?>
 <strong>Basic Math: </strong> <?php echo ((1+2+$a)*$b)/2-5; ?><br>

 <strong>Absolute Value: </strong> <?php echo abs(0-300); ?><br>
 <strong>Exponental: </strong> <?php echo pow(2, 8); ?><br>
 <strong>Squire Root: </strong> <?php echo sqrt(100); ?><br>
 <strong>Modulo: </strong> <?php echo fmod(20, 7); ?><br>
 <strong>Random Number: </strong> <?php echo rand(); ?><br>
 <strong>Random (Min-Max): </strong> <?php echo rand(1000,9000); ?><br>
 <hr>
 <strong>+: </strong> <?php $b+=4; echo $b; ?><br>
 <strong>-: </strong> <?php $b-=4; echo $b; ?><br>
 <strong>*: </strong> <?php $b*=4; echo $b; ?><br>
 <strong>/: </strong> <?php $b/=4; echo $b; ?><br>
 <br>
 <strong>Incriment: </strong> <?php $b++; echo $b; ?><br>
 <strong>Decriment: </strong> <?php $b--; echo $b; ?><br>

</body>
</html>