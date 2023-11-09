<?php

function graden($celsius){
$fahrenheit = ($celsius * 9/5) + 32;
return $fahrenheit." Fahrenheit";
}

echo graden(30);

echo "<br><br>";