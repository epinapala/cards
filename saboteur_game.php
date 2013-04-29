<?php
/*************************************************************
 * This script is developed by Eswar Rajesh Pinapala aka epinapala,  
 * Fee free to distribute and modify code, but keep reference to its creator 
 *
 * Here is an example of dealing cards for game called "Saboteur"
 * Here will be defined only couple of all possible road cards 
 * to simplify this example. Cards will be dealt for 5 people
 * (it means there will be 2 saboteurs and 4 gold diggers) 
 * each player will have 6 cards. This game will need multiple 
 * card decks with different card types. So each class instance 
 * represents card deck. 
 * (This is just an example, real card quantity might differ)
 * More information about the game:
 * http://www.zmangames.com/cardgames/files/saboteur/Saboteur_US_Rules.pdf
 *
 *************************************************************/
 //inlcude class
include("./card_deck.php");

//goal card with gold
$end_gold = array("gold");

//goal card with coal
$end_coal = array("coal");

$goal_deck = new card_deck();

//creating new card type, with gold property
$goal_deck->add_type("gold", $end_gold);

//creating card type, with coal property and 
//specifying that there will be 2 cards for each generated type
$goal_deck->add_type("coal", $end_coal, 2);

//shuffling goal cards
$goal_deck->shuffle();

//dealing goal cards
echo "<p>Goal cards: ";
$arr = $goal_deck->deal(3);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("", $val);
}
echo implode(" ", $arr);
echo "</p>";

//defining dwarf type cards
$dwarf_digger = array("gold digger");
$dwarf_saboteur = array("saboteur");

//creating card deck with dwarf cards
$dwarf_deck = new card_deck();

//creating new type with gold digger properties
// and specifying that there will be 4 cards for each generated type
$dwarf_deck->add_type("digger", $dwarf_digger, 4);

//creating new type with saboteur properties
// and specifying that there will be 2 cards for each generated type
$dwarf_deck->add_type("digger", $dwarf_saboteur, 2);

//shuffle dwarf cards
$dwarf_deck->shuffle();

//defining main playing cards
$deck = new  card_deck();

//define blocks
$block = array("pickaxe","lamp","wagon");
//addin block cards, 3 for each type
$deck->add_type("block", $block, 3);

//define unblocks same as block but only 2 cards
//we can use same block values, only define as new type and property
$deck->add_type("unblock", $block, 2);
//mixed type unblocks
$mixed = array("pickaxe/wagon", "lamp/wagon", "pickaxe/lamp");
//acreting new type with mixed unblock, 1 card each
$deck->add_type("unblock", $mixed);

//rock fall cards (3 of them)
$rock = array("rock fall");
$deck->add_type("rock fall", $rock, 3);

//map cards (6 of them)
$map = array("map");
$deck->add_type("map", $map, 6);

//roads that are 5 cards for each
$road = array("cross", "vertical T", "horizontal T", "top-right corner", "top-left corner");
$deck->add_type("road", $road, 5);

//roads that are 4 cards for each
$road = array("horizontal", "vertical");
$deck->add_type("road", $road, 4);

//road blocks won't classify them for this example
$road = array("block");
$deck->add_type("road", $road, 9);

//shuffle cards
$deck->shuffle();

//deal each of 4 players 6 cards and one dwarf (role) card
echo "<p>Player 1: </p>";
echo "<p>Role: ";
$arr = $dwarf_deck->deal(1);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("-", $val);
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>Cards: ";
$arr = $deck->deal(6);

foreach($arr as $key => $val)
{
	$arr[$key] = "(".key($val)." ".current($val).")";
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>&nbsp;</p>";

echo "<p>Player 2: ";
echo "<p>Role: ";
$arr = $dwarf_deck->deal(1);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("-", $val);
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>Cards: ";
$arr = $deck->deal(6);

foreach($arr as $key => $val)
{
	$arr[$key] = "(".key($val)." ".current($val).")";
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>&nbsp;</p>";


echo "<p>Player 3: ";
echo "<p>Role: ";
$arr = $dwarf_deck->deal(1);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("-", $val);
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>Cards: ";
$arr = $deck->deal(6);

foreach($arr as $key => $val)
{
	$arr[$key] = "(".key($val)." ".current($val).")";
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>&nbsp;</p>";


echo "<p>Player 4: ";
echo "<p>Role: ";
$arr = $dwarf_deck->deal(1);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("-", $val);
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>Cards: ";
$arr = $deck->deal(6);

foreach($arr as $key => $val)
{
	$arr[$key] = "(".key($val)." ".current($val).")";
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>&nbsp;</p>";


echo "<p>Player 5: ";
echo "<p>Role: ";
$arr = $dwarf_deck->deal(1);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("-", $val);
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>Cards: ";
$arr = $deck->deal(6);

foreach($arr as $key => $val)
{
	$arr[$key] = "(".key($val)." ".current($val).")";
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>&nbsp;</p>";


echo "<p>Player 6: ";
echo "<p>Role: ";
$arr = $dwarf_deck->deal(1);
foreach($arr as $key => $val)
{
	$arr[$key] = implode("-", $val);
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>Cards: ";
$arr = $deck->deal(6);

foreach($arr as $key => $val)
{
	$arr[$key] = "(".key($val)." ".current($val).")";
}
echo implode(" ", $arr);
echo "</p>";
echo "<p>&nbsp;</p>";

?>
