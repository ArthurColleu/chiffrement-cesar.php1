<?php
$nombre = 0;
$nombre1=readline("Saisir un nombre: ");
while ($nombre <= $nombre1) {
    if ($nombre % 2 == 0) {
        echo $nombre . ' ';
        $somme_nombre=$somme_nombre+ $nombre;
    }
    $nombre = $nombre + 1;

}
echo "La somme des nombres pairs est ".$somme_nombre;