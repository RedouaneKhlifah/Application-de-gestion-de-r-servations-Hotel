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
    <link rel="stylesheet" href="style.css" />
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home/rooms"
                >Rooms</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <a href="<?php BURL ?>/login/index"
              ><button type="button" class="btn btn-outline-dark">
                Log in
              </button></a
            >

            
          </ul>
        </div>
      </div>
    </nav>

    <section class="book">
      <div class="container flex_space">
        <div class="text">
          <h1><span>Book </span> Your Rooms</h1>
        </div>
        <div class="form">
          <form class="grid">
            <input type="date" placeholder="Araival Date" />
            <input type="date" placeholder="Departure Date" />
            <div class="dropdowns">
              <select name="adults" class="options">
                <option class="opt" value="Lit single ">Lit single</option>
                <option class="opt" value="double">Lit double</option>
                <option class="opt" value="suite">Lit suite</option>
              </select>
            </div>
            <input type="number" placeholder="personnes" />
            <input class="check" type="submit" value="CHECK AVAILABILITY" />
          </form>
        </div>
      </div>
    </section>

    <script src="scroopt.js"></script>
  </body>
</html>
