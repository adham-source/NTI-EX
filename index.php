
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>user comment</title>
  </head>
  <body>

    <div class="container">
      <form class="row g-3 p-5" action="check.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name ="title" class="form-control" id="title" placeholder="Please Write title" />
        </div>
        <div class="mb-3">
          <label for="comment" class="form-label">Comment</label>
          <textarea name="comment" class="form-control" id="comment" cols="30" rows="3" placeholder="Please Write comment here ..."></textarea>
        </div>
        <div class="mb-3">
          <label for="date" class="form-label">Date</label>
          <input type="text" name ="date" class="form-control" id="date">
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Upload image</label>
          <input type="file" name ="image" class="form-control" id="image">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
  </body>
</html>
