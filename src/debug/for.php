<?php

    header('Content-Type: text/html; charset=UTF-8');


    $numbers = array(1,2,3,4,5,6);
    
    for ($i = 0; $i <= 5; $i++) {
        if ($numbers[$i] % 2 == 0){
            print $numbers[$i].',';
        }
    }

?>
 
