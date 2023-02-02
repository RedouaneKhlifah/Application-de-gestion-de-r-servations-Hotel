<?php 
require(MODELS."/connexion.php");

class methods extends connection {

  public $id ;
  public $number ;
  public $price ;
  public $capacity ;
  public $type ;
  public $type_suits ;
  public $img;

  public $guests;
  public $guests_first_name;
  public $guests_last_name;
  public $id_reservartion ;
  public $guest_birthday;

 
  public $reserv_date_s;
  public $reserv_date_e;
  public $id_user;
  public $id_room;


  public function set_id($id){
    $this->id = $id;
  }

  public function set_number($number){
    $this->number = $number;
  }
  public function set_price($price){
    $this->price = $price;
  }
  public function set_capacity($capacity){
    $this->capacity = $capacity;
  }
  public function set_type($type){
    $this->type = $type;
  }
  public function set_type_suits($type_suits){
    $this->type_suits = $type_suits;
  }
  public function set_img($img){
    $this->img = $img;
  }

  public function get_img(){
    return  $this->img;
  }



    
    // public function insert(){
    //     $con =  $this->connect();
    //     $sql  = "INSERT INTO `pestana-room` (room_number,price,capacity,room_type,type_suits,room_img) VALUES ('$this->number','$this->price','$this->capacity','$this->type','$this->type_suits','$this->img')";
    //     $result = $con->query($sql);
    //   }

      public function insert(){
        $con =  $this->connect();
        $stmt  = $con-> prepare("INSERT INTO `pestana-room` (room_number,price,capacity,room_type,type_suits,room_img) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("iiisss",$this->number,$this->price,$this->capacity,$this->type,$this->type_suits,$this->img);
        $stmt->execute();
        $stmt->close();
        $con->close();
      }

    public function display(){
      $sql = "SELECT * FROM `pestana-room` ";
      $result = $this->connect()->query($sql);
      return $result;

      }

      public function display_admin($pages){
        if ($pages == 1){
          $sql = "SELECT * FROM `pestana-room` limit 0 , 5  ";
        }else {
          $from =  ($pages - 1 ) * 5;
          $until  = 5;

          $sql = "SELECT * FROM `pestana-room` limit $from  , $until ";
        }
        
        $result = $this->connect()->query($sql);
        return $result;
  
        }

      public function number_of_resevation(){
        $sql = "SELECT `reservation`.`id_reservartion`, `reservation`.`date_s` , `reservation`.`date_e`, `user`.`first_name`,`user`.`last_name`,`pestana-room`.`room_number`, `pestana-room`.`room_img` FROM `reservation` LEFT JOIN `user` ON `reservation`.id_user = `user`.id_user  left join `pestana-room` on `reservation`.id_room = `pestana-room`.id_room";
        $result = $this->connect()->query($sql);
        $result = mysqli_num_rows($result);
        return $result;
        }

        public function display_resevation($pages){

          if ($pages == 1){
            $sql = "SELECT `reservation`.`id_reservartion`, `reservation`.`date_s` , `reservation`.`date_e`, `user`.`first_name`,`user`.`last_name`,`pestana-room`.`room_number`, `pestana-room`.`room_img` FROM `reservation` LEFT JOIN `user` ON `reservation`.id_user = `user`.id_user  left join `pestana-room` on `reservation`.id_room = `pestana-room`.id_room limit 0 , 5  ";
          }else {
            $from =  ($pages - 1 ) * 5;
            $until  = 5;
  
            $sql = "SELECT `reservation`.`id_reservartion`, `reservation`.`date_s` , `reservation`.`date_e`, `user`.`first_name`,`user`.`last_name`,`pestana-room`.`room_number`, `pestana-room`.`room_img` FROM `reservation` LEFT JOIN `user` ON `reservation`.id_user = `user`.id_user  left join `pestana-room` on `reservation`.id_room = `pestana-room`.id_room limit $from  , $until ";
          }
          
          $result = $this->connect()->query($sql);
          return $result;
          }





      public function delete_room_req(){

        $sql = "DELETE from `pestana-room` where id_room  = $this->id";
        $result = $this->connect()->query($sql);
    }

    public function delete_reservation_req(){
      $sql = "DELETE from `reservation` where id_reservartion  = $this->id";
      $result = $this->connect()->query($sql);
  }

    


      public function update_display(){
        $sql = "SELECT * from `pestana-room` where id_room  = $this->id ";
        $result = $this->connect()->query($sql);
        $result = mysqli_fetch_assoc($result) ;
        return $result; 
    }

    
    public function update_req(){
      $sql = "UPDATE `pestana-room` set room_number  = '$this->number' ,price = '$this->price',capacity ='$this->capacity',room_type ='$this->type', type_suits = '$this->type_suits',room_img = '$this->img'  where id_room  = '$this->id' ";
      $result = $this->connect()->query($sql);
      
    }

    public function update_req_noImage(){
      $sql = "UPDATE `pestana-room` set room_number  = '$this->number' ,price = '$this->price',capacity ='$this->capacity',room_type ='$this->type', type_suits = '$this->type_suits'  where id_room  = '$this->id' ";
      $result = $this->connect()->query($sql);
      
    }

    public function check_room_number(){
      $sql = "SELECT * from `pestana-room` where room_number  = $this->number ";
      $result = $this->connect()->query($sql);
      $result = mysqli_num_rows($result);
      // var_dump($result);
      // die;
      return $result;
    }



    // public function update_req_noType(){
    //   $sql = "UPDATE `pestana-room` set room_number  = '$this->number' ,price = '$this->price',capacity ='$this->capacity',room_img = '$this->img'  where id = '$this->id' ";
    //   $result = $this->connect()->query($sql);
      
    // } 
    // public function update_req_noType_img(){
    //   $sql = "UPDATE `pestana-room` set room_number  = '$this->number' ,price = '$this->price',capacity ='$this->capacity'  where id = '$this->id' ";
    //   $result = $this->connect()->query($sql);
      
    // }
    // public function update_req_noSuit(){
    //   $sql = "UPDATE `pestana-room` set room_number  = '$this->number' ,price = '$this->price',capacity ='$this->capacity',room_type ='$this->type'  where id = '$this->id' ";
    //   $result = $this->connect()->query($sql);
    // }

    public static function session(){
      if (!isset($_SESSION['gmail']) and !isset($_SESSION['password'])){
          header("location:http://pesta.local/login/index");
      }}

      public  function display_rooms(){
        $sql = "SELECT * from `pestana-room` where room_type = '$this->type' ";
        $result = $this->connect()->query($sql);
        return $result;
      }     
      
      public function display_allrooms(){
        $sql = "SELECT * from `pestana-room`";
        $result = $this->connect()->query($sql);
        return $result;
      }



      public function addguests(){
        $sql  = "INSERT INTO `invites` (firstname,lastname,birthday,id_reservartion ) VALUES ('$this->guests_first_name','$this->guests_first_name','$this->guest_birthday','$this->id_reservartion' )";

        $result = $this->connect()->query($sql);

      }

      public function add_reservastion_req(){
        $sql  = "INSERT INTO `reservation` (date_s,date_e,id_user,id_room) VALUES ('$this->reserv_date_s','$this->reserv_date_e','$this->id_user','$this->id_room' )";

        $result = $this->connect()->query($sql);

      }

      public function id_reservastion_req(){
        $sql  = "SELECT MAX( id_reservartion ) as go FROM `reservation`";
        $result = $this->connect()->query($sql); 
        $result = mysqli_fetch_assoc($result);
        $result =  $result["go"];
        return $result;
      }

      
      public function search_display(){
        $sql = "SELECT `pestana-room`.* FROM `pestana-room` LEFT JOIN reservation ON `pestana-room`.`id_room` = reservation.id_room  AND ('$this->reserv_date_s' BETWEEN reservation.date_s AND reservation.date_e OR '$this->reserv_date_e' BETWEEN reservation.date_s AND reservation.date_e) WHERE reservation.id_room is NULL and `pestana-room`.`room_type` = '$this->type'";
        // var_dump($sql);
        // die;
        $result = $this->connect()->query($sql);
        // var_dump($result);
        // die;
        return $result; 
    }
    
    public function search_display_suit(){
      $sql = "SELECT `pestana-room`.* FROM `pestana-room` LEFT JOIN reservation ON `pestana-room`.`id_room` = reservation.id_room  AND ('$this->reserv_date_s' BETWEEN reservation.date_s AND reservation.date_e OR '$this->reserv_date_e' BETWEEN reservation.date_s AND reservation.date_e) WHERE reservation.id_room is NULL and `pestana-room`.`room_type` = '$this->type' and  `pestana-room`.`type_suits` = '$this->type_suits' ";
      // var_dump($sql);
      // die;
      $result = $this->connect()->query($sql);
      // var_dump($result);
      // die;
      return $result; 
  }

  // public function profile_req(){
  //   $id_user = $_SESSION['id_user'] ;
  //    $sql = "SELECT `reservation`.`id_reservartion`, `reservation`.`date_s` , `reservation`.`date_e`, `user`.`first_name`,`user`.`last_name`,`pestana-room`.`room_number`, `pestana-room`.`room_img` FROM `reservation` LEFT JOIN `user` ON `reservation`.id_user = `user`.id_user  left join `pestana-room` on `reservation`.id_room = `pestana-room`.id_room where `user`.id_user = $id_user ";
  //   $result = $this->connect()->query($sql);
  //   return $result;
  //   } 


    public function profile_number_of_resevation(){
      $id_user = $_SESSION['id_user'] ;
      $sql = "SELECT `reservation`.`id_reservartion`, `reservation`.`date_s` , `reservation`.`date_e`, `user`.`first_name`,`user`.`last_name`,`pestana-room`.`room_number`, `pestana-room`.`room_img` FROM `reservation` LEFT JOIN `user` ON `reservation`.id_user = `user`.id_user  left join `pestana-room` on `reservation`.id_room = `pestana-room`.id_room where `user`.id_user = $id_user";
      $result = $this->connect()->query($sql);
      $result = mysqli_num_rows($result);
      return $result;
      }

      public function display_profile_resevation($pages){
        $id_user = $_SESSION['id_user'] ;
        if ($pages == 1){
          $sql = "SELECT `reservation`.`id_reservartion`, `reservation`.`date_s` , `reservation`.`date_e`, `user`.`first_name`,`user`.`last_name`,`pestana-room`.`room_number`, `pestana-room`.`room_img` FROM `reservation` LEFT JOIN `user` ON `reservation`.id_user = `user`.id_user  left join `pestana-room` on `reservation`.id_room = `pestana-room`.id_room where `user`.id_user = $id_user ORDER by `reservation`.`id_reservartion` limit 0 , 5  ";
        }else {
          $from =  ($pages - 1 ) * 5;
          $until  = 5;

          $sql = "SELECT `reservation`.`id_reservartion`, `reservation`.`date_s` , `reservation`.`date_e`, `user`.`first_name`,`user`.`last_name`,`pestana-room`.`room_number`, `pestana-room`.`room_img` FROM `reservation` LEFT JOIN `user` ON `reservation`.id_user = `user`.id_user  left join `pestana-room` on `reservation`.id_room = `pestana-room`.id_room where `user`.id_user = $id_user ORDER by `reservation`.`id_reservartion` limit $from  , $until ";
        }
        
        $result = $this->connect()->query($sql);
        
        return $result;
        }

}