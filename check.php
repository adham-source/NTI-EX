<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'):
    # include page connection data base
    require './con_db.php';

    # Store errors
    $msg_Erro = '';

    # Global validation function
    function globalValid($valid) {
        return htmlspecialchars(trim(filter_var($valid, FILTER_SANITIZE_STRING)));
    }

    # Store data in variables with global valid
    $title = globalValid($_POST['title']);
    $comment = globalValid($_POST['comment']);
    $date = globalValid($_POST['date']);

    # Print message erro input empty
    function msgErro($msg_Erro) {
        return $msg_Erro = 'Please fill input ' . ucfirst($msg_Erro) . ' field <br />';
    }

    # Check valid inputs 

    # input title
    if(empty($title)):
      msgErro('title');
    elseif(filter_var($title, FILTER_VALIDATE_INT) || filter_var($title, FILTER_VALIDATE_EMAIL) || filter_var($title, FILTER_VALIDATE_URL) || filter_var($title, FILTER_VALIDATE_IP)):
        $msg_Erro = 'Please insert correct title';
    endif;
    
    // # test check erro
    // if(isset($msg_Erro['title'])):
    //     echo $msg_Erro['title'];
    // endif;

    # input comment
    if(empty($comment)):
        msgErro('comment');
    elseif(filter_var($comment, FILTER_VALIDATE_INT) || filter_var($comment, FILTER_VALIDATE_EMAIL) || filter_var($comment, FILTER_VALIDATE_URL) || filter_var($comment, FILTER_VALIDATE_IP)):
        $msg_Erro = 'Please insert correct comment';
    endif;

    # input date
    if(empty($date)):
        echo msgErro('date');
    elseif(filter_var($date, FILTER_VALIDATE_INT) || filter_var($date, FILTER_VALIDATE_EMAIL) || filter_var($date, FILTER_VALIDATE_URL) || filter_var($date, FILTER_VALIDATE_IP)):
        $msg_Erro = 'Please insert correct date';
    endif;

    # Data info to use image upload 
    $nTmpPath = $_FILES['image']['tmp_name'];
    $nImageMain = $_FILES['image']['name'];
    $typeImage = $_FILES['image']['type'];
    $sizeImage = $_FILES['image']['size'];

    # Export ext from file image
    $extImage = explode('.', $nImageMain);

    # Store ext file image
    $exCurrent = count($extImage);

    # Var to use check ext allowed
    $ext_image = strtolower($extImage[$exCurrent - 1]);

    # Store new image name
    $new_name_img = time() .'_Img_.'. $ext_image;

    # Store image upload mandatory extensios
    $allowExtImages = [
        'jpeg',
        'png',
        'jpg',
        'gif'
    ];


    # input image file upload conditions
    if($sizeImage === 0):
        msgErro('upload file image in');
    elseif(in_array($ext_image, $allowExtImages)):
        # Save image in directory
        $dirSave = './assets/uploaded/images/';

        # path dir with image name
        $pathDirNew = $dirSave.$new_name_img;
        
        if(move_uploaded_file($nTmpPath, $pathDirNew)):
            $msg_correct = 'Thank\' uploaded image';
        else:
            $msg_Erro = 'Can\'t uploaded image';
        endif;

    else:
        $msg_Erro = 'bad extension';
    endif;

    # Check from message and insert data
    if(!empty($msg_Erro)):
        echo 'erro condation';
    else:
        
        # Sotre data to insert
        $sql_insert = "INSERT INTO `user_comments` (`title`, `comment`, `date`, `image`) VALUE ('$title', '$comment', '$date', '$new_name_img')";

        # Submit data insreded
        $result_insert = mysqli_query($method_con_db, $sql_insert);

        # Check to insert data in database
        if($result_insert):
            echo $title . '||' . $comment . '||' . $date . '||' . $new_name_img;
            echo 'Good';
        else:
            echo 'ERRO';
        endif;
    
    endif;

endif;
