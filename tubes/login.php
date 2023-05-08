<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
  <div class="container">
    <form class="form-container">
      <h3 class="textJudul mb-2">Masuk</h3>
      <div class="mb-3">
        <label for="exampleInputUsername1" class="form-label textForm">Username</label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
          <input type="username" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp" placeholder="Masukan Username">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label textForm">Password</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock-keyhole"></i></span>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password">
          </div>
        </div>
        <div style="margin-top: -13px;" class="text-end">
          <a href="#" class="textForm text-hover">Lupa Password?</a>
        </div>
        <div class="d-grid mt-3">
          <button type="submit" class="btn btn-primary textForm">Masuk</button>
        </div>
        <div class="mt-1">
          <span class="textForm">Belum Punya Akun? <a href="daftar.php" class="textForm text-hover">Daftar</a></span>
        </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>