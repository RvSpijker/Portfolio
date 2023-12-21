<?php
    session_start();
    $var_value = $_SESSION['varname'];

    if ($var_value == 'up') {
        $var_value = 'down';
    } else {
        $var_value = 'up';
    }
    
    $_SESSION['varname'] = $var_value;
    // header('location: ../../projecten.php');
    echo 
    '<script>
    history.back()
    </script>';