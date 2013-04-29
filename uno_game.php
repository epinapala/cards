<?php
/*************************************************************
 * This script is developed by Eswar Rajesh Pinapala aka epinapala,  
 * Fee free to distribute and modify code, but keep reference to its creator 
 *
 * Here is an example of dealing cards for game called "UNO"
 * UNO has special cards in 4 different colors (each card repeats 2 times, except 0) 
 * and some multi color cards (four of each)
 * More information about the game:
 * http://en.wikipedia.org/wiki/Uno_(card_game)
 *
 *************************************************************/
//car strength
$strength = array("1","2","3","4","5","6","7","8","9","reverse","block","+2");

//card color
$color = array("red","green","yellow","blue");
//as zeroes ar only cards theat are unique for each color
//we will define them separately
$zero = array("0");

//and multi color cards 4 each
$multi = array("color", "+4");

//inlcude class and create card deck
include("./card_deck.php");
$deck = new card_deck();

//add type with strength property and values from array
//and get id of type
$id = $deck->add_type("strength", $strength, 2);
//add color property to same type by providing id
$deck->add_type("color", $color, 1, $id);

//and then again creating new type, which will contain zeroes
$id = $deck->add_type("strength", $zero);
//and as this card is also available in different colors
//add color property to this type of card
$deck->add_type("color", $color, 1, $id);

//add new type - multi color cards
//(4 cards for each type)
$deck->add_type("multi", $multi, 4);

//shuffle cards
$deck->shuffle();

//deal cards for 4 people, 7 cards for each
echo "<p>Player 1: ";
$arr = $deck->deal(7);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("-", $val);
}
echo implode(" ", $arr);
echo "</p>";

echo "<p>Player 2: ";
$arr = $deck->deal(7);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("-", $val);
}
echo implode(" ", $arr);
echo "</p>";

echo "<p>Player 3: ";
$arr = $deck->deal(7);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("-", $val);
}
echo implode(" ", $arr);
echo "</p>";

echo "<p>Player 4: ";
$arr = $deck->deal(7);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("-", $val);
}
echo implode(" ", $arr);
echo "<p>";
?>
