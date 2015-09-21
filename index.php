<!DOCTYPE html>
<html>
<head>
	<title>PHP Practice</title>
</head>
<body>
<?php 
$a ="this boy want to go ";
$b = "to park after 2 hours. ";
$c = $a;
$c .= $b;

echo "<h3>$c</h3>";
?>
</br>
<strong>Lower Case: </strong><?php echo strtolower($c); ?> <br>
<strong>Upper Case: </strong><?php echo strtoupper($c); ?> <br>
<strong>Upper Case First: </strong><?php echo ucfirst($c); ?> <br>
<strong>Upper Case Word: </strong><?php echo ucwords($c); ?> <br>
<hr>
<strong>Lenth: </strong><?php echo strlen($c); ?> <br>
<strong>Find: </strong><?php echo strstr($c, "park"); ?> <br>
<strong>Trim: </strong><?php echo "A". trim(" B C D "). "E";?> <br>
<strong>Replace: </strong><?php echo str_replace("park", "<strong>school</strong>", $c);?> <br>
<hr>
<strong>Repeat: </strong><?php echo str_repeat($c, 3);?> <br>
<strong>Sub Strings: </strong><?php echo substr($c, 1,15);?> <br>
<strong>String Position: </strong><?php echo strpos($c, "park");?> <br>
<strong>Char Position: </strong><?php echo strchr($c, "b");?> <br>
<hr>
<p>New Practic</p>
<hr>
<strong>Word Rap: </strong><?php echo wordwrap($c, 10, "<br />");?> <br>
<strong>Word Count: </strong><?php echo str_word_count($c);?> <br>

</body>
</html>