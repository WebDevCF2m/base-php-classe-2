<?php
 $note = 6 ;

 if ($note <= 3) {
    echo " Nul, étudie la prochaine fois";
  } elseif (4 <= $note && $note <= 5) {
    echo "peut mieux faire";
  } elseif (6 <= $note && $note <=7) {
    echo "bien";
  }
  elseif (8 <= $note && $note <=10) {
    echo "très bien";
  } else {
    echo "note invalide";
  }
 endif
