<?php 

$array = array(
	array(
		'name' => 'Гоголь Н.В.', 
		'age' => '1809', 
		'email' => 'gogol@gogol.ru',
		'books' => array(
			array('book_name' => 'Мертвые души', 'date' => '1842'),
			array('book_name' => 'Вий', 'date' => '1835')
		)
	), 
	array(
		'name' => 'Пушкин А.С.', 
		'age' => '1799', 
		'email' => 'puskin@pushkin.ru',
		'books' => array(
			array('book_name' => 'Руслан и Людмила',	'date' => '1820'),
			array('book_name' => 'Евгений Онегин',	'date' => '1832'),
			array('book_name' => 'Сказка о рыбаке и рыбке',	'date' => '1835')
		)
	), 
	array(
		'name' => 'Дюма А.', 
		'age' => '1802', 
		'email' => 'duma@otec.ru',
		'books' => array(
			array('book_name' => 'Граф Монте-Кристо', 'date' => '1845')
		)
	)

);


for ($i=0; $i < count($array); $i++) { 
	echo $array[$i]['name'] . " --- " . $array[$i]['email'] . " --- " . $array[$i]['age'] . "<br>";
}

echo "<br>";

for ($i=0; $i < count($array) ; $i++) { 
	for ($j=0; $j < count($array[$i]['books']); $j++) { 
		echo $array[$i]['books'][$j]['book_name'] . " --- " . $array[$i]['name'] . " --- " . $array[$i]['books'][$j]['date'] . "<br>";
	}
}


?>