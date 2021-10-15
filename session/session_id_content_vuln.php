<?php
    if (session_start()) {
        $session_name = session_name();

        echo "Nom de la session : ".$session_name;
    }
?>
