
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

    <div class="wrapper" id="wrapper">
      <form  class="form-signin" action="<?php BURL ?>/login/index" method="POST">
        <h2 class="form-signin-heading">Please login</h2>
        <?php if (isset($msg)){
          echo '<span class="text-danger">'. $msg.'<span/>';
        }?>
        <input
          id="input"
          type="text"
          class="form-control"
          placeholder="Email Address"
          required=""
          autofocus=""
          name="gmail"
        />
        <input
          id="input"
          type="password"
          class="form-control"
          placeholder="Password"
          required=""
          name="password"

        />
        <p class="signup"><a href="<?php BURL ?>/login/signup">sign up</a></p>
        <button
          id="login"
          class="btn btn-lg btn-primary btn-block"
          type="submit"
          name="login_btn"
        >
          Login
        </button>
      </form>
    </div>
  </body>
</html>
