<?php 


class UserController extends methods   {
    public function booking(){
        $this->id_user = $_SESSION['id_user'];
        $this->id_room = $_SESSION['reservation_id'];
        $this->reserv_date_s = $_SESSION["date_s"];
        $this->reserv_date_e = $_SESSION["date_e"];

        // $date_s = date('y-m-d',strtotime($_SESSION["date_s"]));
        // $date_e = date('y-m-d',strtotime($_SESSION["date_e"]));
        // $this->reserv_date_s = $date_s;
        // $this->reserv_date_e = $date_e;



        $this->set_id($_SESSION['reservation_id']);
        


        $data["data"] = $this->update_display();
        $data['pop_up'] = 'd-none';


        if (isset($_POST['book_btn'])){

            if(isset($_POST['number_of_guests'])){
                $number_of_guests = $_POST['number_of_guests'];
            }
            $this->add_reservastion_req();
            $this->id_reservartion  = $this->id_reservastion_req(); 
             $i = 1;
            //  if(!isset($number_of_guests)){
            //     $number_of_guests = 1;
            //  }
            while($i <= $number_of_guests){

                $this->guests_first_name = $_POST["guestfname$i"];
                $this->guests_last_name = $_POST["guestlname$i"];
                $birthdate = date('y-m-d',strtotime($_POST["guest_birthday$i"])) ;
                $this->guest_birthday = $birthdate ;
                

                $this->addguests();

                $i++;
            }
            $data['pop_up'] = '';

        }
        



        view::load('book',$data);

    }

    public function profile($pages){

        $number_of_rooms = $this->profile_number_of_resevation();
        $total_pages  = ceil($number_of_rooms /5);
        $data['total_pages'] =  $total_pages ;
        $data['page_active'] = $pages;
        $data["datas_reservations"] = $this->display_profile_resevation($pages) ;

        view::load('profile',$data);
    }


    public function delete_reservation($id,$page){
        $this->set_id($id);
        $this->delete_reservation_req();
        header("location:http://pesta.local//user/profile/$page");
    }

    
}