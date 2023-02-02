<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link rel="stylesheet" type="text/css" href="/assets/css/bookinForm.css" />

    <script>
      // function check(value){
      //   let guest_type_container = document.querySelector(".guest_type_container");
      //   guest_type_container.innerHTML = '';
      //   if( value === "suite"){ 
      //     let html = `        
      //     <p> type of suit   : <?= $data['type_suits']?></p>

      //     <label for="guests">Number of guests:</label>
      //     <select id="guests" name="guests">
      //     <option value="0">0</option>
      //     <option value="1">1</option>
      //     <option value="2">2</option>
      //     <option value="3">3</option>
      //     <option value="4">4</option>
      //     <option value="5">5</option>
      //     <option value="6">6</option>
      //     </select>
      //     <div id="guestSection"></div>`
      //     guest_type_container.innerHTML = html
      //   }else if(( value === "double"))  {
      //       let html = `
      //                 <label>Guest First Name 1 :</label>
      //                 <input type="text" name="guestfname">
      //                 <label>Guest Last Name 1 :</label>
      //                 <input type="text" name="guestlname">
      //                 <label for="dob">Guest Date of birth 1 :</label>
      //                 <input type="date" id="dob" name="dob" min="1950-01-01" max="2000-01-01">`;

      //                 guest_type_container.innerHTML  = html ;
      //   }

      // }
    </script>
  </head>

  <body>
    <!-- navbar -->

    <h1>Book a Room</h1>
    <div class="bookcontainer" >
      <form class="reservation" action="<?php BURL ?>/user/booking" method="POST">
        <!-- <label for="checkin">Check-in Date:</label>
        <input type="date" id="checkin" name="checkin" />
        <label for="checkout">Duration:</label>
        <input type="number" name="duration" /> -->
        <div class="form-outline mb-2">
            <label class="form-label text-black" for="form2Example27">Starting date</label>
            <input type="text" id="form2Example27" class="form-control form-control-lg fs-6" value=" <?php echo $_SESSION["date_s"]?> " readonly/>
          </div>
          <div class="form-outline mb-2">
            <label class="form-label text-black" for="form2Example27">Ending date</label>
            <input type="text" id="form2Example27" class="form-control form-control-lg fs-6" value=" <?php echo $_SESSION["date_e"]?> "readonly />
          </div>

          <div class="form-outline mb-2">
            <label class="form-label text-black" for="form2Example17">Type of room </label>
            <input name="gmail" type="email" id="form2Example17" class="form-control form-control-lg fs-6" value=" <?php echo $data['room_type']?>" readonly />
          </div>

          <div class = "guest_type_container" ></div>

          <input type="submit" name ="book_btn" value="Book Now" />
      </form>
      <div class="overlay <?php echo $pop_up ?>"></div>
      </div>
      
      <!-- pop up -->
      <div class="pop <?php echo $pop_up?>"> 
      <div class="container mt-1" id="myModal">
      <div class="row-cols-4">
        <div class="card ">
          <div class="card-img">
            <img class="img-fluid" src="/assets/img/logo.png" />
          </div>
          <div class="card-title">
            <p>Success!</p>
          </div>
          <div class="card-text">
            <p>Room successfully reseved ! <br />Thank you for your trust !</p>
          </div>

          <a class="a text-black" href="http://pesta.local/home/rooms"> <button class="btn">Book to rooms</button></a>
        </div>
      </div>
    </div>
    </div>


    <!--end of pop up -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/scroopt.js"></script>
      <script> check('<?= $data['room_type']?>','<?= $data['type_suits']?>') </script>
      <script> guest_form() </script>

  </body>
</html>
