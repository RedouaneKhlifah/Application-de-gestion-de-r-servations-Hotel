<?php

class HomeController extends methods
{
    
    public function index(){
        $data['datas'] = $this->display_allrooms();
        view::load('index',$data);
    }

    public function rooms(){
    
    $data['datas'] = $this->display_allrooms();

        if (isset($_POST["avalibility_btn"])){
            $this->set_type($_POST['options']);
            $this->reserv_date_s = $_POST['date_s'];
            $this->reserv_date_e = $_POST['date_e'];
            $_SESSION["date_s"] = $_POST['date_s'];
            $_SESSION["date_e"] = $_POST['date_e'];

            if (isset($_POST['type_suits'])){
                $this->set_type_suits($_POST['type_suits']);
                $data['datas'] = $this->search_display_suit();
            }else {

            $data['datas'] = $this->search_display();
        }

        }

        if (isset($_POST["book-btn"])){

            if (isset($_SESSION['reservation_id']) && isset($_SESSION['id_user'])){

                $reservation_id = $_POST["hidden_id"];
                $_SESSION['reservation_id'] = $reservation_id;
                header("location:http://pesta.local/user/booking");

            }else {

                $reservation_id = $_POST["hidden_id"];
                $_SESSION['reservation_id'] = $reservation_id;
                header("location:http://pesta.local/login/index");
            }

        }
        view::load('room',$data);
    }
    



}