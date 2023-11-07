<?php
$nombreDef=readline("Saisir un nombre: ");
for($i=0;$i<=$nombreDef;$i++){
    if($i%2==0){
        echo $i," ";
    }
}