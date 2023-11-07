<?php
$nombreADeviner = readline("Saisir un nombre entre 0 et 1000: ");
// Vérifier si le nombre à deviner est compris entre 0 et 1000
while($nombreADeviner<0 || $nombreADeviner>1000){
    echo "ERREUR, le nombre à deviner doit être entre 0 et 1000\n";
    $nombreADeviner = readline("Saisir un nombre entre 0 et 1000: ");
}
$nombreAleatoire = random_int(0, 1000);
$nbCoups = 0;

while ($nombreAleatoire != $nombreADeviner) {
        $nbCoups = $nbCoups + 1;
        $nombreAleatoire = random_int(0, 1000);
}
if ($nbCoups<=200) {
    echo "Le nombre à deviner a été trouvé en " . $nbCoups . " coups.";
} else {
    echo "Le nombre à deviner n'a pas été trouvé en moins de 200 coups";
}
