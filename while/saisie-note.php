<?php
$note=readline("Saisir une note: ");
while ($note < 0 || $note >20){
    echo "La note saisie est incorrecte\n";
    $note=readline("Saisir une note: ");
}
echo "La note saisie est correcte";