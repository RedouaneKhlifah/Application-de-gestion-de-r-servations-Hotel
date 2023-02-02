<?php


class RoomsController extends methods {
//     public function index(){
       
//         $data["datas"] = $this->display() ;
//         view::load('rooms',$data);
        
// }
    public function add(){
        
        $data['msg'] = '';

        if(isset($_POST["add_btn"])){
            $this->set_number($_POST['room_number']);
            $this->set_price($_POST['price']);
            $this->set_capacity($_POST['capacity']);
            $this->set_type($_POST['type']);
            if($this->check_room_number() > 0){
                $data['msg'] = 'room number already exist';
            }else {
                $data['msg'] = 'Room added successfully';
                $this->set_img($_FILES['img']['name']);
                $image_tpm = $_FILES['img']['tmp_name'];
                $image_path ="assets/uploads/".$this->img;
                move_uploaded_file($image_tpm,$image_path);
    
                if (isset($_POST['type_suits'])){
                    $this->set_type_suits($_POST['type_suits']);
                }else {
                    $this->set_type_suits("NULL");
                }
    
                $this->insert();
                
            }
        }
        view::load('add',$data);
    }


    public function dashbord($pages){

        $number_of_rooms = mysqli_num_rows($this->display());
        $total_pages  = ceil($number_of_rooms /5);
        $data['total_pages'] =  $total_pages ;
        $data['page_active'] = $pages;
        $data["datas"] = $this->display_admin($pages);
        // $data["datas"] = $this->display();

        view::load('dashbord',$data);
    }

    public function dash_reservs($pages){

        $number_of_rooms = $this->number_of_resevation();
        $total_pages  = ceil($number_of_rooms /5);
        $data['total_pages'] =  $total_pages ;
        $data['page_active'] = $pages;
        $data["datas_reservations"] = $this->display_resevation($pages)  ;

        view::load('dash_reservs',$data);
    }

    public function delete_room($id){
        $this->set_id($id);
        $this->delete_room_req();
        header("location:http://pesta.local//rooms/dashbord");
    }

    

    
    public function update($id){
      
        $this->set_id($id);
        if (isset($_POST["update_btn"])){
            $this->set_number($_POST['room_number']);
            $this->set_price($_POST['price']);
            $this->set_capacity($_POST['capacity']);
            $this->set_type($_POST['type']);
            if($this->check_room_number() > 0){
                $data['msg'] = 'Room number already exist';
            }else {
                $data['msg'] = 'Room updated successfully';
            $this->set_img($_FILES['img']['name']);
            $image_tpm = $_FILES['img']['tmp_name'];
            $image_path ="assets/uploads/".$this->img;
            move_uploaded_file($image_tpm,$image_path);

            if (isset($_POST['type_suits'])){
                $this->set_type_suits($_POST['type_suits']);
            }else{
                $this->set_type_suits("NULL");
            }
            if(empty($_FILES['img']['name'])) {
                $this->update_req_noImage();
            }else {
                $this->update_req();
            }
        }}

        $data["data"] = $this->update_display();
        view::load('update',$data);
        
    }




    // public function edit($id){
    //     $update  = new admin;
    //     $update->set_id($id);

    //         $update->set_input($_POST["re"]);
    //         $update->update();
    //         $data["data"] = $update->update_display();
    //         view::load('update',$data);

    //         // header('location:http://hotgam.local//rooms/index')

            
        
    // }


}