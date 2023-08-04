<?php

class son
{
    const EYE = 2;
    const NOSE = 1;
    const MOUTH = 1;

    public function human()
    {
        echo "My son have " . self::EYE . " and have " . self::NOSE;
    }
}

echo son::EYE;

$son1 = new son();
$son1->human();
