<?php

function usersIndex()
{
    $users = mysqlQuery("SELECT * FROM users");
}

function usersStore(array $data)
{
    
}

?>