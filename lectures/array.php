<?php 

	// indexed arrays

	$peopleOne = ['shaun', 'crystal', 'ryu'];
	//echo $peopleOne[0];
   // echo $peopleOne[1];
   // echo $peopleOne[2];

	$peopleTwo = array('ken', 'chun-li');
	echo $peopleTwo[1];
    print_r($peopleTwo);

	$ages = [20, 30, 40, 50];

	print_r($ages);
    

	$ages[0] = 25;
	print_r($ages);

	$ages[] = 10;
	//array_push($ages, 70);
	//print_r($ages);

	//echo array_pop($ages);
	//print_r($ages);

	//echo count($ages);

	$peopleThree = array_merge($peopleOne, $peopleTwo);
	//print_r($peopleThree);

	// associative array (key & value pairs)

	$One = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
	//echo $One['mario'];
	//print_r($One);

	$Two = array('bowser' => 'green', 'peach' => 'yellow');
	//print_r($ninjasTwo);

	$Two['toad'] = 'pink';

	//echo count($ninjasTwo);




?>