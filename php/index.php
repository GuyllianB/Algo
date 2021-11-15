<?php
require_once 'Hippopotamus.php';

$hippo1 = new Hippopotamus("Gloria",150,3);
$hippo2 = new Hippopotamus("Higgins",200,6);

$hippo1->fight($hippo2);

for ($i=1; $i<=21; $i++) {
    for ($j=1; $j<=15; $j++){
        $hippo1->eat();
        $hippo1->eat();
        $hippo1->swim();
        $hippo1->swim();
        $hippo1->swim();
    }
    $hippo1->convertToString();
    echo "Fin de la journée : " . $i . "<br/>";
}



?>