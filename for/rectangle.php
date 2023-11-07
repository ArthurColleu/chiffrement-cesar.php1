<?php
$largeurRectangle= readline("Saisir la largeur du rectangle: ");
$hauteurRectangle= readline("Saisir la hauteur du rectangle: ");
for($i=1;$i<=$hauteurRectangle;$i++){
    for($j=1;$j<=$largeurRectangle;$j++){
        echo "* ";
    }
    echo "\n";
}
