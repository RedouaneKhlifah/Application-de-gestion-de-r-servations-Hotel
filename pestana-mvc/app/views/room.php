<!DOCTYPE html>
<html>
  <head>
    <title>Hotel Booking Website</title>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <style type="text/css">
      .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }

      @media screen and (max-width: 575px) {
        .availability-form {
          margin-top: 25px;
          padding: 0 35px;
        }
      }
    </style>
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top"
    >
      <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"
          >TJ HOTEL</a
        >
        <button
          class="navbar-toggler shadow-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="rooms.html">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <div class="d-flex" role="search">
            <?php if(isset($_SESSION['id_user'])) {
                echo  
                '<a href="http://pesta.local/user/profile/1"><button
                type="submit"
                class="btn btn-outline-dark shadow-none"
                data-bs-toggle="modal"
                data-bs-target="#registerModel"
              >
                My Profile
              </button></a>';

            } else {
                echo 
              ' <a href="/login/index"><button
              type="submit"
              class="btn btn-outline-dark shadow-none me-lg-3 me-2"
              data-bs-toggle="modal"
              data-bs-target="#loginModel"
            >
              Login
            </button></a>

            <a href="/login/signup"><button
              type="submit"
              class="btn btn-outline-dark shadow-none"
              data-bs-toggle="modal"
              data-bs-target="#registerModel"
            >
              Register
            </button></a>';
            }?>
          




          </div>
        </div>
      </div>
    </nav>

    <!-- Swiper Carousal-->
    <div class="container-fluid px-lg-12 mt-4">
      <img src="/assets/img/4.png" class="w-100 d-block" />
    </div>

    <!-- check avilability form-->
    <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
          <h5 class="col-lg-3">Check Booking Availability</h5>
          <form action="<?php BURL ?>/home/rooms" method="POST">
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label  class="form-label" style="font-weight: 500"
                  >Check-in</label
                >
                <input name="date_s" type="date" class="form-control shadow-none" required />
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500"
                  >Check-in</label
                >
                <input name="date_e" type="date" class="form-control shadow-none" required/>
              </div>

              <div class="dropdowns col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500">Room Type</label>
                <select name="options" class="options form-select shadow-none">
                <option class="opt" value="single ">Single Room</option>
                <option class="opt" value="double">double Room</option>
                <option class="opt" value="suite">Suite Room</option>
                </select>
              </div>



              <div class="col-lg-1 mb-lg-3 mt-2">
                <button
                  type="submit"
                  name ="avalibility_btn" 
                  class="btn text-white shadow-none custom-bg"
                >
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Our Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"></h2>
    <div id="room-container" class="container">
      <div class="row">
      <?php if (isset($datas)){ foreach ($datas as $data){ ?>
        <div class="col-lg-4 col-md-12 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="/assets/img/1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?php
              if ($data['room_type'] == 'suite'){
                $data['room_type'] = $data['type_suits'];
              }
              
              echo $data['room_type'] ?> Room</h5>
              <h6 class="mb-4">$<?=$data['price']?> per night</h6>

              <div class="Facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room Heater
                </span>
              </div>

              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <form action="<?php BURL ?>/home/rooms" method="POST" >
              <input name = "hidden_id" type="hidden" value = "<?= $data['id_room'] ?>" > 
              <div class="d-flex justify-content-center mb-2">
              <button
                  id="booknow"
                  type="submit"
                  name= "book-btn"
                  class="btn btn-sm text-white custom-bg shadow-none"
                  >Book Now</button
                >
              </div>
              </form>
            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>

    <!--end of  Our Rooms -->

    <!-- footer-->
    <hr id="hr" />
    <div class="container-fluid bg-white mt-5">
      <div class="row">
        <div class="col-lg-4 p-4">
          <h3 class="h-font fw-bold fs-3 mb-2">TJ HOTEL</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </p>
        </div>
        <div class="col-lg-4 p-4">
          <h5 class="mb-3">Link</h5>
          <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"
            >Home</a
          ><br />
          <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"
            >Rooms</a
          ><br />
          <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"
            >Facilities</a
          ><br />
          <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"
            >Contact Us</a
          ><br />
          <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"
            >About</a
          >
        </div>
        <div class="col-lg-4 p-4">
          <h5 class="mb-3">Follow us</h5>
          <a
            href="#"
            class="d-inline-block text-dark text-decoration-none mb-2"
          >
            <i class="bi bi-twitter me-1"></i>Twitter </a
          ><br />
          <a
            href="#"
            class="d-inline-block text-dark text-decoration-none mb-2"
          >
            <i class="bi bi-facebook me-1"></i>facebook </a
          ><br />
          <a href="#" class="d-inline-block text-dark text-decoration-none">
            <i class="bi bi-instagram me-1"></i>facebook </a
          ><br />
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript Bundle with Popper -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/js/add_script.js"></script>  
  </body>
</html>
