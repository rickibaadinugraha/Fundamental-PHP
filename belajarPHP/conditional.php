<?php 

// Conditional if else kondisi perumpamaan
    $height = 168;

    if ($height > 168) {
        echo "you can following for test";
    }else if ($height < 168 ) {
        echo "you can't following for test";
    }

    else{
        echo "you stay it's";
    }

    // switch untuk menyatakan banyak kondisi

    $colour = "red";
    
    switch ($colour) {
        case 'yellow':
            echo "carefull";
            break;
        
        case 'red':
            echo " stop!";
            break;
        
        case 'green':
            echo "drive";
            break;
        
        default:
            echo "no colour, road light breakdown";
            break;
    }
?>