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

    <script>
            function suite(){
              const dropdowns = document.querySelector(".dropdowns");
            html = `<select name="type_suits" class="options add-opts" id="opts2" >
            <option class="opt"  <?php if($data["type_suits"] == "Standard" ) echo "selected"; ?> value="Standard ">Standard suite</option>
            <option class="opt" <?php if($data["type_suits"] == "Junior" ) echo "selected" ;?> value="Junior">Junior suite</option>
            <option class="opt" <?php if($data["type_suits"] == "Presidential" ) echo "selected" ?> value="Presidential">Presidential suite</option>
            <option class="opt" <?php if($data["type_suits"] == "Penthouse" ) echo "selected" ?> value="Penthouse">Penthouse suite</option>
            <option class="opt" <?php if($data["type_suits"] == "Bridal" ) echo "selected" ?> value="Bridal">Bridal suite</option>
          </select>`;
      dropdowns.insertAdjacentHTML("beforeend", html);
    }
    </script>
    <link rel="stylesheet" type="text/css" href="/assets/css/add.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    
    <title>Pestana</title>
  </head>
  <body>

    <div class="wrapper">
      <form class="form-signin" id="add-wraper"  action="<?php BURL ?>/rooms/update/<?=$data["id_room"] ?>" method="POST" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Update Form</h2>

        <input
          id="input"
          type="number"
          class="form-control"
          name="room_number"
          placeholder="room_number"
          required=""
          autofocus=""
          value="<?=$data["room_number"] ?>"
        />

        <input type="number" name="price" placeholder="Price" class="add-persons" min="0"  value="<?=$data["price"] ?>"/>
        <input
          type="number"
          placeholder="capacite"
          name="capacity"
          class="add-persons"
          min="1"
          value="<?=$data["capacity"] ?>"
        />
        
        <div class="dropdowns" >
          <select name="type" class="options" id="add-opts" >
            <option class="opt" <?php if($data["room_type"] == "single" ) echo "selected" ?>  value="single ">Lit single</option>
            <option class="opt" <?php if($data["room_type"] == "double" ) echo "selected"  ?> value="double">double</option>
            <option class="opt" <?php if($data["room_type"] ==  "suite" ) echo "selected " ;  ?>  value="suite">suite</option>
          </select>

          <?php if($data["room_type"] ==  "suite" ) {
            echo '<script>
            suite()
            </script>';
          }  ?>
        </div>
        <input class="file" type="file" name="img" />

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
          name="update_btn"
        >
          Update
        </button>
      </form>
    </div>
    <script src="/assets/js/scroopt.js"></script>
    <script src="/assets/js/add_admin.js"></script>
  </body>
</html>
