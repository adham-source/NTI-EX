<?php

# Start session
session_start();

# Stor database connection
$server_db = 'localhost';
$admin_db = 'root';
$passwd_db = '';
$name_db = 'project_main';

# Connection database
$method_con_db = mysqli_connect(
    $server_db, 
    $admin_db,
    $passwd_db,
    $name_db
);

// # Check connection database
// if($method_con_db):
//     echo 'good conection <br />';
// endif;