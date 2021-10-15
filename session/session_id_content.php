<?php
    if (session_start()) {
        $session_name = session_name();

        if (preg_match("/id/i", $session_name )) {
           $session_name = "NomSessCache";
         }

         echo "Nom de la session : ".$session_name;
    }
?>
