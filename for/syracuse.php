<?php
$n=15;
for($i=1;$i<=20;$i++){
    if($n%2==0){
        echo "$n ";
        $n=$n/2;
    }
    elseif($n%2 !=0){
        echo "$n ";
        $n=$n*3 +1;
    }
}