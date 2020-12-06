<?php

    if (trim(strtolower($_SERVER['SCRIPT_NAME'])) === 'mysql.php') {
        die('No access.');
    }

?>