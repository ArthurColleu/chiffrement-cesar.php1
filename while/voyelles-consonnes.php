<?php
$phrases= readline("Saisir une phrase: ");
$nbLettres=strlen($phrases);
$phrases=strtoupper($phrases);
$nbCaractere=0;
$nbVoyelles=0;
$nbConsonnes=0;
while($nbCaractere<$nbLettres){
    if (substr($phrases,$nbCaractere,1)=="A" || substr($phrases,$nbCaractere,1)=="E" || substr($phrases,$nbCaractere,1)=="I" || substr($phrases,$nbCaractere,1)=="O" ||substr($phrases,$nbCaractere,1)=="U" ||substr($phrases,$nbCaractere,1)=="Y"){
        $nbVoyelles+=1;
    }elseif(substr($phrases,$nbCaractere,1)=="Z" ||substr($phrases,$nbCaractere,1)=="R"||substr($phrases,$nbCaractere,1)=="T"||substr($phrases,$nbCaractere,1)=="P"||substr($phrases,$nbCaractere,1)=="Q"||substr($phrases,$nbCaractere,1)=="B"||substr($phrases,$nbCaractere,1)=="S"||substr($phrases,$nbCaractere,1)=="D"||substr($phrases,$nbCaractere,1)=="F"||substr($phrases,$nbCaractere,1)=="G"||substr($phrases,$nbCaractere,1)=="H"||substr($phrases,$nbCaractere,1)=="J"||substr($phrases,$nbCaractere,1)=="K"||substr($phrases,$nbCaractere,1)=="L"||substr($phrases,$nbCaractere,1)=="M"||substr($phrases,$nbCaractere,1)=="W"||substr($phrases,$nbCaractere,1)=="X"||substr($phrases,$nbCaractere,1)=="C"||substr($phrases,$nbCaractere,1)=="V"||substr($phrases,$nbCaractere,1)=="N"){
        $nbConsonnes+=1;
    }
    $nbCaractere+=1;
}
echo "Le nombres de voyelles dans le phrase st de ".$nbVoyelles." et le nombres de consonnes ".$nbConsonnes;