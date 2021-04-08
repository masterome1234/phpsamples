<?php
define('NAME','Yoshi'); //function
$a = 100; //variable declaration
$b = 200;
$c = $a+$b; //operations in php
$name = "variable";
$stringOne = 'My name is';
$stringTwo = 'Jerome alvez';



?>
<!DOCTYPE html>
<html>
<head>
<title>my first php</title>
</head>
<body>
<h1><?php echo'hell world';?></h1> 
<div><?php echo'hell world';?></div>
<div><?php echo NAME;?></div>
<div><?php echo $stringOne . $stringTwo;?></div>
<div><?php echo $name[1];
echo strlen($name);
echo strtoupper($name);
echo strtolower($name);
?></div>
</body>
</html>