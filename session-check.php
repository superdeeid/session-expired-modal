<?php
    
    if ( !isset( $_COOKIE["LastVisitedSection"] ) ) {
        echo '1';
    }
    else {
        echo '0';
    }
