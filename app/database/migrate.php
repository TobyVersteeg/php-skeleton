<?php

function migrateDatabase($dropTables = false)
{
    $files = scandir(__DIR__, SCANDIR_SORT_ASCENDING);

    if (count($files) > 1)
    {
        foreach ($files as $file)
        {
            if (trim(strtolower($file)) !== 'migrate.php' && $file !== '.' && $file !== '..')
            {
                require_once $file;
            }
        }
    }
}

?>