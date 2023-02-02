
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <title>Pestana</title>
  </head>
  <body>

  <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="<?php BURL ?>/login/signup" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Pestana</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <?php if (isset($msg)){
                    echo '<span class="text-danger">'. $msg.'<span/>';
                    }?>
                  <div class="form-outline ">
                    <input name="first_name" type="text" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label text-black" for="form2Example17">First Name</label>
                  </div>
                  
                  <div class="form-outline ">
                    <input name="last_name" type="text" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label text-black" for="form2Example17">Last Name</label>
                  </div>
                  
                  <div class="form-outline ">
                    <input name="gmail" type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label text-black" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline ">
                    <input name="password" type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label text-black" for="form2Example27">Password</label>
                  </div>
                  

                  <div class="pt-1 mb-4">
                    <button  name="Sign_Up" class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                  </div>

                  <p class="mb-1 mt-1 pb-lg-2" style="color: #393f81;">Already have an account? <a href="<?php BURL ?>/login/index"
                      style="color: #393f81;">Login</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

  </body>
</html>