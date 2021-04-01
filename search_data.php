<?php 

# Check request method
if($_SERVER['REQUEST_METHOD'] == 'POST'):
    # content database
    require './con_db.php';

    # Store data input search
    $search = htmlspecialchars(trim($_POST['search']));

    # Store pattern search
    $sql_search = "SELECT * FROM `user_comments` WHERE title LIKE '%$search%'";

    # Store result search
    $result_search = mysqli_query($method_con_db, $sql_search);

    # Store count rows
    $count_row = mysqli_num_rows($result_search);

    # check result search found
    if($count_row == 0):
        echo 'no result search';
    else:
        echo 'result search ' . $count_row ;
    endif;

endif;

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Search</title>
  </head>
  <body>

    <div class="container">
   
      <form class="row g-3 p-5" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="search" class="form-label">Search</label>
          <input type="text" name ="search" class="form-control" id="search" placeholder="Please Write title" />
        </div>
        
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
      </form>
    </div>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
  </body>
</html>
