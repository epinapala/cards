<?php
/*************************************************************
 * This script is developed by Eswar Rajesh Pinapala aka epinapala,  
 * Fee free to distribute and modify code, but keep reference to its creator
 *
 * Here is an example of dealing cards for game called "Durak"
 * With 36 (starting from 6 to A) standard cards and to make it more
 * complicated plus 3 jokers (red, black and colorful jokers)
 * It's just an example, real rules may differ
 * More information about the game:
 * http://en.wikipedia.org/wiki/Durak
 *
 *************************************************************/
 //car strength
$strength = array("6","7","8","9","10","J","Q","K","A");
//suit of cards
$suit = array("C","D","H","S");
//joker types
$joker = array("joker");

//inlcude class and create card deck
include("./card_deck.php");
$deck = new card_deck();

//add type with strength property and values from array
//and get id of type
$id = $deck->add_type("strength", $strength);

//add suit property to same type by providing id
$deck->add_type("suit", $suit, 1, $id);

//add new type with property joker and value joker 
//(3 for cards for each type)
//$deck->add_type("jokers", $joker, 3);

//shuffle cards
$deck->shuffle();


//deal cards for 4 people, 6 cards for each
echo "<p>Player 1: ";
$arr = $deck->deal(6);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("", $val);
}
echo implode(" ", $arr);
echo "</p>";

echo "<p>Player 2: ";
$arr = $deck->deal(6);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("", $val);
}
echo implode(" ", $arr);
echo "</p>";

echo "<p>Player 3: ";
$arr = $deck->deal(6);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("", $val);
}
echo implode(" ", $arr);
echo "</p>";

echo "<p>Player 4: ";
$arr = $deck->deal(6);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("", $val);
}
echo implode(" ", $arr);
echo "<p>";

echo "<p>Trump suit: ";
$arr = $deck->deal(1);
echo implode("", current($arr));
echo "</p>";

?>
