<?php 

$items = array('where', 'is', 'my', 'money');
$sum = 0;

for ($i=0; $i <= 100 ; $i++) { 
	if ($i % 3 == 0) {
		echo "Not empty string <br>";
	}

	if ($i % 5 == 0) {
		$sum += $i;
	}

	if ($i % 3 == 0 && $i % 5 == 0) {
		shuffle($items);
	}
}

for ($i=0; $i < count($items); $i++) { 
	echo $items[$i] . " ";
}

 ?>