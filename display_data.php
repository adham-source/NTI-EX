<?php

# Connect database
require './con_db.php';

# Select data query
$sql_select = "SELECT * FROM `user_comments` WHERE 1 ";

# Srore dada after select
$result_select = mysqli_query($method_con_db, $sql_select);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>details comment</title>
  </head>
  <body>

    <div class="container">
        <h3 class="title_table">Show data</h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    # Convert result to array and fetch and
            
                    while($convert_data = mysqli_fetch_assoc($result_select)):
                        echo '
                            <tr>
                                <td>' . $convert_data['id'] .'</td>
                                <td>' . $convert_data['title'] .'</td>
                                <td>' . $convert_data['comment'] .'</td>
                                <td>' . $convert_data['date'] .'</td>
                                <td>' . $convert_data['image'] .'</td>
                                <td><a href="">Delete</a></td>
                            </tr>
                        ';
                    endwhile;
                    
                ?>
                
    
            </tbody>
        </table>
    </div>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
  </body>
</html>
