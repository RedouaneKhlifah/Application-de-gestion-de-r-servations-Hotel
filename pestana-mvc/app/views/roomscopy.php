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
    <link rel="stylesheet" href="/assets/css/add.css" />

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
              <a class="nav-link active" aria-current="page" href="/home/index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="rooms.html"
                >Rooms</a
              >
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <button type="button" class="btn btn-outline-dark">Log in</button>

            <a href="<?php BURL ?>/login/logout"
              ><button type="button" class="btn btn-outline-dark">
                Log out
              </button></a
            >
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- end of css -->

    <!-- CHECK AVAILABILITY -->

    <section class="book" id="rooms-check" >
      <div class="container flex_space">
        <div class="text">
          <h1><span>Check </span> For Rooms</h1>
        </div>
        <div class="form" >
          <form class="grid" action="<?php BURL ?>/home/rooms" method="POST">
            <input name="date_s" id="date_s" value="" type="date" placeholder="Araival Date"  required/>
            <input name="date_e"  type="date"  placeholder="Departure Date" required/>
            <div class="dropdowns">
              <select name="options" class="options" >
                <option class="opt" value="single ">Lit single</option>
                <option class="opt" value="double">Lit double</option>
                <option class="opt" value="suite">Lit suite</option>
              </select>
            </div>
            <input class="check" name ="avalibility_btn" type="submit" value="CHECK AVAILABILITY" />
          </form>
        </div>
      </div>
    </section>




    <div class="container text-center" id="container-room">
      <div class="row">
        
      <?php if (isset($datas)){ foreach ($datas as $data){ ?>
        <div class="col-12 col-lg-4">
          <div class="card" style="width: 18rem">
            <img src="/assets/img/img4.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Luxury Room</h5>
              <p class="card-text" id="text-card">
                <p>type : <?php echo $data['room_type']  ?> </p>
              </p>
              <form action="<?php BURL ?>/home/rooms" method="POST" >
              <input name = "hidden_id" type="hidden" value = "<?= $data['id_room'] ?>" >
              <button type="submit" formaction="<?php BURL ?>/home/rooms" name= "book-btn" class="btn btn-primary" >Book Now </button>
              </form>
            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>
   <script src="/assets/js/scroopt.js"></script>  
  </body>
</html>
