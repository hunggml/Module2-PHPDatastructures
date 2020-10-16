<?php
include_once "Dancer.php";


$men1 = new Dancer("Hung", "Nam");
$men2 = new Dancer("Viet", "Nam");
$men3 = new Dancer("Duong", "Nam");
$men4 = new Dancer("Nam", "Nam");

$women1 = new Dancer("Giang", "Nu");
$women2 = new Dancer("Linh", "Nu");
$women3 = new Dancer("Vanh", "Nu");

$men = new SplQueue();
$women = new SplQueue();

$men->enqueue($men1);
$men->enqueue($men2);
$men->enqueue($men3);
$men->enqueue($men4);

$women->enqueue($women1);
$women->enqueue($women2);
$women->enqueue($women3);

function top($_men, $_women)
{
    if ($_men->isEmpty() || $_women->isEmpty()) {
        echo "Some one wait dance ";
    } else {
        $newMen = $_men->pop();
        $newWomen = $_women->pop();
        return $newMen->getName() . " - " . $newWomen->getName() . "<br>";
    }
}

echo top($men, $women);
echo "<br>";
echo top($men, $women);
echo "<br>";
echo top($men, $women);
echo "<br>";
echo top($men, $women);
echo "<br>";

$women4 = new Dancer("Mai","Nu");
$women5 = new Dancer("Duong","Nu");
$women6 = new Dancer("Thuy","Nu");

$women->enqueue($women4);
$women->enqueue($women5);
$women->enqueue($women6);

echo top($men,$women);

function Count1($men,$women){
    return   "Number of people waiting : ".($men->count() + $women->count());
}

echo Count1($men,$women);

