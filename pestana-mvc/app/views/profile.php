

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

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="style.css" />
    <title>Pestana</title>
  </head>
  <body>

    <style>
        /* body {
      color: #566787;
      background: #f5f5f5;
      font-family: 'Varela Round', sans-serif;
      font-size: 13px;
  } */
        .table-responsive {
          margin: 30px 0;
        }
        .table-wrapper {
          background: #fff;
          padding: 20px 25px;
          border-radius: 3px;
          min-width: 1000px;
          box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        }
        .table-title {
          padding-bottom: 15px;
          background: #435d7d;
          color: #fff;
          padding: 16px 30px;
          min-width: 100%;
          margin: -20px -25px 10px;
          border-radius: 3px 3px 0 0;
        }
        .table-title h2 {
          margin: 5px 0 0;
          font-size: 24px;
        }
        .table-title .btn-group {
          float: right;
        }
        .table-title .btn1 {
          color: #fff;
          float: right;
          font-size: 13px;
          border: none;
          min-width: 50px;
          border-radius: 2px;
          border: none;
          outline: none !important;
          margin-left: 10px;
        }
        .table-title .btn1 i {
          float: left;
          font-size: 21px;
          margin-right: 5px;
        }
        .table-title .btn1 span {
          float: left;
          margin-top: 2px;
        }
        table.table tr th,
        table.table tr td {
          border-color: #e9e9e9;
          padding: 12px 15px;
          vertical-align: middle;
        }
        table.table tr th:first-child {
          width: 160px;
        }
        table.table tr th:last-child {
          width: 100px;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
          background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
          background: #f5f5f5;
        }
        table.table th i {
          font-size: 13px;
          margin: 0 5px;
          cursor: pointer;
        }
        table.table td:last-child i {
          opacity: 0.9;
          font-size: 22px;
          margin: 0 5px;
        }
        table.table td a {
          font-weight: bold;
          color: #566787;
          display: inline-block;
          text-decoration: none;
          outline: none !important;
        }
        table.table td a:hover {
          color: #2196f3;
        }
        table.table td a.edit {
          color: #ffc107;
        }
        table.table td a.delete {
          color: #f44336;
        }
        table.table td i {
          font-size: 19px;
        }
        table.table .avatar {
          border-radius: 50%;
          vertical-align: middle;
          margin-right: 10px;
        }
        .pagination {
          float: right;
          margin: 0 0 5px;
        }
        .pagination li a {
          border: none;
          font-size: 13px;
          min-width: 30px;
          min-height: 30px;
          color: #999;
          margin: 0 2px;
          line-height: 30px;
          border-radius: 2px !important;
          text-align: center;
          padding: 0 6px;
        }
        .pagination li a:hover {
          color: #666;
        }
        .pagination li.active a,
        .pagination li.active a.page-link {
          background: #03a9f4;
        }
        .pagination li.active a:hover {
          background: #0397d6;
        }
        .pagination li.disabled i {
          color: #ccc;
        }
        .pagination li i {
          font-size: 16px;
          padding-top: 6px;
        }
        .hint-text {
          float: left;
          margin-top: 10px;
          font-size: 13px;
        }

        /* Custom checkbox */
  
        /* Modal styles */
      </style>
    </head>
    <body style="background-color: #f9f9ff">
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

                <a href="<?php BURL ?>/login/logout"><button
                type="submit"
                class="btn btn-outline-dark shadow-none"
                data-bs-toggle="modal"
                data-bs-target="#registerModel"
              >
                Logout
              </button></a>



          </div>
        </div>
      </div>
    </nav>


      <div class="container-xl" style="padding-top: 50px">
        <div class="table-responsive">
          <div class="table-wrapper">
            <div class="table-title">
              <div class="row">
                <div class="col-sm-6">
                  <h2>My <b>reservations</b></h2>
                </div>
              </div>
            </div>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>ROOM number</th>
                  <th>Start date</th>
                  <th>End date</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <?php
                
              foreach($datas_reservations as $datas_reservation) {?> 
              <tbody>
                <tr>
                  <td><?php echo $datas_reservation["first_name"] ; ?></td>
                  <td><?php echo $datas_reservation["last_name"] ; ?></td>
                  <td><?php echo $datas_reservation["room_number"] ; ?></td>
                  <td><?php echo $datas_reservation["date_s"] ; ?></td>
                  <td><?php echo $datas_reservation["date_e"] ; ?></td>
                  <td><img style="width: 46px" src=/assets/uploads/<?=$datas_reservation["room_img"] ?> /></td>
                  <td>
                    <a href="<?php BURL ?>/user/delete_reservation/<?=$datas_reservation["id_reservartion"] ?>/<?=$page_active?>"  class="delete"
                      ><i class="material-icons" title="Delete">cancel</i></a
                    > 
                  </td>
                </tr>
              </tbody>
              <?php } ?>

            </table>
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <?php
                $i =1;
                while ($total_pages >= $i) {?>
                 <li class="page-item <?php if($page_active  == $i )echo 'active'?>"><a class="page-link" href="http://pesta.local//user/profile/<?php echo $i ?>"> <?php  echo $i ?> </a></li>
                <?php $i++; }?>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
  </body>
</html>