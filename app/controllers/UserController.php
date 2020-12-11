<?php

require '../libraries/mysql.php';
require '../helpers/main-helper.php';

if (isset($_POST) && isset($_POST['token']))
{
    $token = trim(strtolower($_POST['token']));
    if ($token === 'register')
    {
        unset($_POST['token']);
        userStore();
    } elseif ($token === 'login') {
        userLogin();
    } elseif ($token === 'logout') {
        logout();
    }
}

function userIndex()
{
    $users = mysqlQuery("SELECT * FROM users");
}

function userStore()
{
    // check if email already has been taken
    $query = "SELECT `id` FROM `users` WHERE `email`='" . $_POST['email'] . "'";
    $result = mysqlQuery($query)->fetch();
    if ($result !== false)
    {
        echo json_encode([
            'error'   => true,
            'message' => "This user(name) has already been taken.",
        ]);

        return;
    }

    // check if passwords are equal
    if (comparePasswords($_POST['password'], $_POST['password_2']))
    {
        echo json_encode([
            'error'   => true,
            'message' => "Passwords don't match."
        ]);

        return;
    }
    
    // remove second password from POST
    unset($_POST['password_2']);

    // create password hash and set required fields
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $_POST['role'] = 1;
    $_POST['created_by'] = 1;
    $_POST['created'] = date('Y-m-d H:i:s');

    mysqlInsert($_POST, 'users');

    // $user = [
    //     'first_name' => $_POST['first_name'],
    //     'insertion'  => '',
    //     'last_name'  => $_POST['last_name'],
    //     'full_name'  => $_POST['first_name'] . ' ' . $_POST['last_name'],
    //     'id'         => 1
    // ];

    // $_SESSION['user'] = $user;

    echo json_encode([
        'error'   => false,
        'message' => 'Ok :-)'
    ]);
}

function comparePasswords($pass1, $pass2)
{
    return $pass1 != $pass2;
}

function userLogin()
{
    $email = trim(strtolower($_POST['email']));
    $query = "SELECT * FROM `users` WHERE `email`='" . trim($_POST['email']) . "'";
    $result = mysqlQuery($query)->fetch();

    if (password_verify($_POST['password'], $result['password']) === true)
    {
        $user = [
            'first_name' => $result['first_name'],
            'insertion'  => '',
            'last_name'  => $result['last_name'],
            'full_name'  => $result['first_name'] . ' ' . $result['last_name'],
            'id'         => $result['id']
        ];

        $_SESSION['user'] = $user;

        echo json_encode([
            'error' => false,
            'message' => 'success'
        ]);
        
        return;
    }

    echo json_encode([
        'error' => true,
        'message' => 'Login failed'
    ]);
}

function logOut()
{
    session_start();

    if (isset($_SESSION))
    {
        unset($_SESSION['user']);
    }
}

?>