<?php


//echo "<img src='img/dieren/".$_POST['dieren'].".jpg'>";"

foreach($_POST["dieren"] as $dier){
    echo "<img src='img/".$dier.".jpg'>";
}