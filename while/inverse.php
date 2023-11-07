<?php
$phrases= readline("Saisir une phrase: ");
$nbLettres= strlen($phrases);
$nbCaractere=0;
$nbCompteur=0;
while ($nbCaractere<$nbLettres){

    echo substr($phrases,$nbCompteur-1,1);
    $nbCaractere+=1;
    $nbCompteur= $nbCompteur-1;
}
