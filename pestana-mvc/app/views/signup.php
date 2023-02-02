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
    <link rel="stylesheet" href="/assets/css/style.css" />
    <title>Pestana</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse"
          id="navbarNav"
          style="justify-content: flex-end"
        >
          <ul class="navbar-nav" style="gap: 55px">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="rooms.html"
                >Rooms</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <button id="loginn" type="button" class="btn btn-outline-dark">
              Lin
            </button>
          </ul>
        </div>
      </div>
    </nav>

    <div class="wrapper">
      <form class="form-signin" action="<?php BURL ?>/login/signup" method="POST">
        <h2 class="form-signin-heading">Please SignUp</h2>
        <?php if (isset($msg)){
          echo '<span class="text-danger">'. $msg.'<span/>';
        }?>
        <input
          id="input"
          type="text"
          class="form-control"
          name="first_name"
          placeholder=" First name"
          required=""
          autofocus=""
        />
        <input
          id="input"
          type="text"
          class="form-control"
          name="last_name"
          placeholder="Last name"
          required=""
          autofocus=""
        />
        <input
          id="input"
          type="text"
          class="form-control"
          name="gmail"
          placeholder="Email Address"
          required=""
          autofocus=""
        />
        <input
          id="input"
          type="password"
          class="form-control"
          name="password"
          placeholder="Password"
          required=""
        />
        <p  class="signup" ><a href="<?php BURL ?>/login/index">Login</a></p>
        <button
          id="login"
          class="btn btn-lg btn-primary btn-block"
          type="submit"
          name="Sign_Up"
        >
          Sign Up
        </button>
      </form>
    </div>
  </body>
</html>