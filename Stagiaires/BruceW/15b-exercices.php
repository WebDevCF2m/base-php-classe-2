<?php

 $note = 6 ;

 switch ($note) {
    case 0:
    case 1:
    case 2:
    case 3:
        echo " Nul, étudie la prochaine fois";
        break;
    case 4:
    case 5:
        echo "peut mieux faire";
        break;
    case 6:
    case 7:
        echo "bien";
        break;
    case 8:
    case 9:
    case 10:
        echo "très bien";
        break;
    default:
        echo "note invalide";
 }