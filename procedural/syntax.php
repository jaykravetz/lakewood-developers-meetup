<?php

// variables
$int = 1;

$string = 'Hello world';

$bool = true;

// Array
$oldArray = array(1, 2, 3, 'four', false);

// v5.4 and later
$newArray = [1, 2, 3, 'four', false];

// Associative Array
$assocArray = [
	'first' => 'jay',
	'last' => 'kravetz',
	'likes_pizza' => true
];

// Output
echo $string;

var_dump($bool);

print_r($oldArray);


// Controls
if($bool)
{
	// $bool is true
}
else
{
	// $bool is false
}


foreach ($newArray as $elem)
{
	// Do something with $elem
}


while($bool)
{
	// Do something
	break;
}


do
{
	// Do stuff
	break;
}
while($bool);

switch($int)
{
	case 1:
		// Do something
		break;
	case 2:
		// Do something else
		break;
	default:
		// Do the default thing
		break;
}

function saySomething($thingToSay)
{
	echo $thingToSay;
}

function sum($num1, $num2)
{
	return $num1 + $num2;
}

saySomething('hello world');

echo sum(4, 20); // --> 24

$anotherStr = 'Hello World';

var_dump(substr($anotherStr, 4, 3));

$keys = ['first','last', 'likes_pasta'];
$values = ['Jay', 'Kravetz', true];

var_dump(array_combine($keys, $values));

$numbers = [237, 15, 87, 1];

var_dump(array_sum($numbers));

$mapArray = ['A', 1, true];

array_map(function($elem) {
	var_dump($elem);
}, $mapArray);

foreach($mapArray as &$ary)
{
	$ary++;
}

var_dump($mapArray);



