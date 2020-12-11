<?php

if (trim(strtolower($_SERVER['SCRIPT_NAME'])) === '/requires.php') {
    die('No access.');
}

require $_SERVER['DOCUMENT_ROOT'] . '/app/helpers/main-helper.php';
require $_SERVER['DOCUMENT_ROOT'] . '/app/libraries/mysql.php';

?>