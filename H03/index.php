<?php

$alle["leeftijd"] =  17;
$alle["naam"] = "Delta";
$alle["woonplaats"] = "Amsterdam";

foreach($alle as $label => $waarde) {
    echo "de " .$label. " is: " .$waarde." ";
}

echo " <br><br> ";

$nu = date('H');
if ($nu >= 24){
} else if ($nu >= 12) {
    echo "Het is middag";
} else if ($nu > 6) {
    echo "Het is ochtend";
} else {
    echo "Het is nacht";
}

echo " <br><br> ";

$jaar = 6;
for($kaarsjes = 0; $kaarsjes < $jaar; $kaarsjes++) echo " |*| ";

echo " <br><br> ";

$aantal = 10;
for($foto = 0; $foto < $aantal; $foto++) {
    echo '<img src="C:\wamp64\www\PHP\H03\img_0050.jpg" alt="">';
}

echo " <br><br> ";


for($down = 1; $down <= 9; $down++){
    for($side = 1; $side <= $down; $side++) {
        echo " * ";
    }
    echo "<br>";
}

echo " <br><br> ";


for($x = 35; $x >= 25; $x--) {
    echo "hoppelepee ";
}

echo " <br><br> ";

$leeftijd = 66;
if($leeftijd < 3){
    echo "gratis";
}else if($leeftijd <= 12){
    echo "5 euro";
}else if($leeftijd > 65){
    echo "5 euro";
}else{
    echo "10 euro";
}

echo " <br><br> ";

$zwemclubs["spartelkuikens"] = 25;
$zwemclubs["waterbuffels"] = 32;
$zwemclubs["plonsmderin"] = 11;
$zwemclubs["bommetje"] = 23;

echo " <br><br> ";


