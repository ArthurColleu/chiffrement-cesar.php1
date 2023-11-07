<?php
$MotDePasse=readline("Saisir un mots de passe: ");
$nbCaractereMDP=strlen($MotDePasse);
$nbCaracteresVerif=0;
$chiffreVerif="0123456789";
$compteur=0;
$maj=False;
$minu=False;
$chiffre=False;
if ($nbCaractereMDP<8){
    echo "Le mot de passe doit contenir au moins 8 caractères";
}else{
    while($nbCaracteresVerif<$nbCaractereMDP) {
        if (strpos($chiffreVerif, substr($MotDePasse, $nbCaracteresVerif, 1))) {
            $chiffre=True;
        }
        if (ctype_lower(substr($MotDePasse, $nbCaracteresVerif, 1))) {
            $minu=True;
        }
        if (ctype_upper(substr($MotDePasse, $nbCaracteresVerif, 1))) {
            $maj=True;
        }
        $nbCaracteresVerif+=1;
    }

}
if ($chiffre==True && $minu==True &&$maj==True ){
    echo "Le mot de passe est valide";
}else{
    echo "Le mot de passe n'est pas valide";
}