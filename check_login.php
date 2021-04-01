<?php

# Check request method
if($_SERVER['REQUEST_METHOD'] == 'POST'):
    # Page conection date
    require './con_db.php';

    # Store errors masseges
    $msg_error = '';

    $_SESSION['input_error'] = $msg_error;

    # clean data
    function cleanData($value) {
        return htmlspecialchars(trim($value));
    }

    # Store data from inputs
    $email      = cleanData($_POST['email']);
    $password   = cleanData($_POST['password']);

    # Check validation inputs
    # Input email
    if(empty($email)):
        $msg_error = 'Please fill input';
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $msg_error = 'Please write correct email';
    endif;

    # Input password
    if(empty($password)):
        $msg_error = 'Please fill input';
    elseif(strlen($password) < 8 || strlen($password) > 25):
        $msg_error = 'Password is less than 8 or greater than 20 characters';
    endif;

    # Check any errors in validations
    if(empty($msg_error)):
        # Encrypted bass Word before insert database
        $pass_Enc = md5($password);

        # Select data and check email and password exist
        $sql_select = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass_Enc'";
        
        # Submit data after insertet
        $result_select = mysqli_query($method_con_db, $sql_select);

        var_dump($result_select);

        # Check email and password is exist database
        if(mysqli_num_rows($result_select) == 1):
            # Fetched data 
            $data_fetch = mysqli_fetch_assoc($result_select);

            # Store data fetched by session to share
            $_SESSION['id']     = $data_fetch['id'];
            $_SESSION['name']   = $data_fetch['name'];

            header('location: profile.php');
        endif;
    else:
        header('location: login.php');
    endif;
endif;