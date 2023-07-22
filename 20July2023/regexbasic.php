<?php
/*
boolean preg_match(pattern,string)

*/

$pattern = "/^[abc]/";
$string = "usha";

$matched = preg_match($pattern, $string);

if ($matched) {
    echo "Match found.";
} else {
    echo "No match found.";
}
