<?php
    //session_start();
    
    if ( !isset( $_COOKIE["LastVisitedSection"] ) ) {
        echo '1';
        
        //        unset($_SESSION['name']);
        //        session_unset();
        //        session_destroy();
    }
    else {
        echo '0';
    }
