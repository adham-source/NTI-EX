
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>

    <div class="container">
        <h3 class="title_register px-5 pt-3">Register</h3>
        <form class="row g-3 px-5 py-3" action="check_reg.php" method="post" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name ="name" class="form-control" id="name" placeholder="Please write your name" />
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" name ="email" class="form-control" id="email" placeholder="Please write your email" />            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name ="password" class="form-control" id="password" placeholder="Please write password" />
            </div>
            <div class="mb-2">
                <label for="address" class="form-label">Address</label>
                <input type="text" name ="address" class="form-control" id="address" placeholder="Please write address" />
            </div>
            <div class="mb-2">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select form-select-lg" id="gender" aria-label=".form-select-lg example">
                    <option selected>Select one</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
  </body>
</html>
