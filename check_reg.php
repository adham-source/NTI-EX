<?php 
# Check request method
if($_SERVER['REQUEST_METHOD'] == 'POST'):
    # Page conection date
    require './con_db.php';

    # Store errors masseges
    $msg_error = '';

    # clean data
    function cleanData($value) {
        return htmlspecialchars(stripcslashes(trim($value)));
    }

    # Store data from inputs
    $name       = cleanData($_POST['name']);
    $email      = cleanData($_POST['email']);
    $password   = cleanData($_POST['password']);
    $address    = cleanData($_POST['address']);
    $gender     = cleanData($_POST['gender']);


    # Check validation inputs
    # Input name
    if(empty($name)):
        $msg_error = 'Please fill input';
    elseif(filter_var($name, FILTER_VALIDATE_INT) || filter_var($name, FILTER_VALIDATE_URL) || filter_var($name, FILTER_VALIDATE_EMAIL)):
        $msg_error = 'Please write correct name';
    endif;

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

    # Input address
    if(empty($address)):
        $msg_error = 'Please fill input';
    elseif(filter_var($address, FILTER_VALIDATE_INT) || filter_var($address, FILTER_VALIDATE_URL) || filter_var($address, FILTER_VALIDATE_EMAIL)):
        $msg_error = 'Please write correct address';
    endif;

    # Input gender
    if(empty($gender)):
        $msg_error = 'Please fill input';
    elseif($gender == 0):
        $msg_error = 'Please select gender type';
    endif;

    
    # Check any errors in validations
    if(empty($msg_error)):
        # Encrypted bass Word before insert database
        $pass_Enc = md5($password);

        # Store data to insert database
        $sql_insert = "INSERT INTO `users` (`name`, `email`, `password`, `gender`, `address`) 
                        VALUES ('$name', '$email', '$pass_Enc', '$gender', '$address') ";

        # Submit data after insertet
        $result_insert = mysqli_query($method_con_db, $sql_insert);

        # Reloaded after insert to page same submit data form
        header('location: login.php');
    else:
        echo 'error';
    endif;


    

    

    


endif;    


