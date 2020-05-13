<?php
// Array with names
$a[] = "Alba";
$a[] = "Blinera";
$a[] = "Briana";
$a[] = "Diana";
$a[] = "Elba";
$a[] = "Fiona";
$a[] = "Fitore";
$a[] = "Fjolla";
$a[] = "Ira";
$a[] = "Jonida";
$a[] = "Kiara";
$a[] = "Linda";
$a[] = "Granit";
$a[] = "Nina";
$a[] = "Xhyla";
$a[] = "Orika";
$a[] = "Pranvera";
$a[] = "Rinesa";
$a[] = "Qendresa";
$a[] = "Valmira";
$a[] = "Pajtesa";
$a[] = "Edona";
$a[] = "Ema";
$a[] = "Sara";
$a[] = "Tea";
$a[] = "Uvejsa";
$a[] = "Violeta";
$a[] = "Liza";
$a[] = "Elizabeta";
$a[] = "Elda";
$a[] = "Wendi";
$a[] = "Valeza";
$a[] = "Blenda";
$a[] = "Klodi";
$a[] = "Jetmir";


// get the q parameter from URL
$q = $_GET["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>