<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  mysqli_query($conn, "INSERT INTO user VALUES(null,'$username','$password')");

  header("login.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,400;1,600&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-8 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">DATA ALUMNI SMAKENSA</h2>
                <p class="text-white-50 mb-5">Please regist your username and password!</p>

                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="typeEmailX">Username</label>
                  <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Enter Your Username Here" />
                </div>

                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="typePasswordX">Password</label>
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Enter Your Password Here" />
                </div>

                <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> --> <br><br><br>

                <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Register</button>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>

              </div>

              <div>
                <p class="mb-0">Already have an account? <a href="login.php" class="text-white-50 fw-bold">Sign In</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>