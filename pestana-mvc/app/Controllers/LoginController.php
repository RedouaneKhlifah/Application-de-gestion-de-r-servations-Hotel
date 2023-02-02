<?php



class LoginController extends login_methods {

    

    public function index(){
        $data['msg'] = "";
       
        if (isset($_SESSION['reservation_id'])){
        $_SESSION['reservation_id'];}


        if (isset($_POST['login_btn'])){

        $this->set_gmail($_POST['gmail']);
        $this->set_password($_POST['password']);
        $admin = $this->login_admin();
        $user = $this->login_user();
        $id = mysqli_fetch_assoc($user);
        // if (isset($id['id_user'])){
        // $_SESSION['id_user'] = $id['id_user'] ;}
        
        if (mysqli_num_rows($admin) > 0){
            $_SESSION['gmail'] = $this->get_gmail();
            $_SESSION['password'] = $this->get_password();
            header("location:http://pesta.local/rooms/dashbord/1");

        }else if((mysqli_num_rows($user) > 0 && isset(($_SESSION['reservation_id'])) ) || isset($_SESSION['id_user']) ){
            $_SESSION['id_user'] = $id['id_user'];
            
            header("location:http://pesta.local/user/booking");
            
        }else if(mysqli_num_rows($user) > 0 ){
            $_SESSION['id_user'] = $id['id_user'];
            header("location:http://pesta.local/home/rooms");
        }else {
            $data ['msg'] = "invalid entry";
        }
        }

        

        View::load("loginn",$data);
    }

    public function signup(){
        $data["msg"] = "";
        if(isset($_POST['Sign_Up'])){
        $this->set_gmail($_POST['gmail']);
        $this->set_password($_POST['password']);
        $this->set_first_name($_POST['first_name']);
        $this->set_last_name($_POST['last_name']);
        $result  = $this->check_signup();
            if (mysqli_num_rows($result) > 0){
                $data["msg"] = "This account is already registered back to login";
            }else if (mysqli_num_rows($result) == 0 && isset(($_SESSION['reservation_id']))){
                $data["msg"] = "This account is already registered";
                $this->add_user();
                header("location:http://pesta.local/user/booking");
            }else {
                $data["msg"] = "account registered succefully back to login";
        }
    }
        View::load("signupp",$data);
    }

    public function logout(){
        session_destroy();
        header("location:http://pesta.local/home/rooms");
    }

}


