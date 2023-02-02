<?php methods::session(); ?>
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
    <link rel="stylesheet" type="text/css" href="/assets/css/add.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    
    <title>Pestana</title>
  </head>
  <body>

    <div class="wrapper">
      <form class="form-signin" id="add-wraper"  action="<?php BURL ?>/rooms/add" method="POST" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Add Form</h2>
        <?php if (isset($msg) ){
          if ($msg == 'room number already exist' ){ 
            echo '<p class="text-danger  mb-3">'.$msg.'</p>';
          }else {
            echo '<p class="text-success  mb-3">'.$msg.'</p>';
          }}?>
           
        <input
          id="input"
          type="number"
          class="form-control"
          name="room_number"
          placeholder="room_number"
          required=""
          autofocus=""
        />

        <input type="number" name="price" placeholder="Price" class="add-persons" min="0"  required=""/>
        <input
          type="number"
          placeholder="capacite"
          name="capacity"
          class="add-persons"
          min="1"
          required=""
        />

        <div class="dropdowns">
          <select name="type" class="options" id="add-opts">
            <option class="opt" value="single ">Lit single</option>
            <option class="opt" value="double">double</option>
            <option class="opt" value="suite">suite</option>
          </select>
        </div>


        <input class="file text-black " type="file" name="img" required />

        

        <!-- <input
          id="input"
          type="text"
          class="form-control"
          name="username"
          placeholder="Type of suite"
          required=""
        />
        <input
          id="input"
          type="text"
          class="form-control"
          name="username"
          placeholder="Email Address"
          required=""
        />
        <input
          id="input"
          type="password"
          class="form-control"
          name="password"
          placeholder="Password"
          required=""
        /> -->
        <button
          id="add"
          class="btn btn-lg btn-primary btn-block Add"
          type="submit"
          name="add_btn"
        >
          ADD
        </button>
      </form>
    </div>
    <script src="/assets/js/add_admin.js"></script>
  </body>
</html>
