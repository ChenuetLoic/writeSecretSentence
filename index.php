
<?php

function writeSecretSentence(string $parametre_1, string $parametre_2):string {
    return $parametre_1 . ' s\'incline face à ' . $parametre_2 . ' en remplaçant ' . $parametre_1 . ' et '. $parametre_2;
}
echo writeSecretSentence('lion', 'singe');
