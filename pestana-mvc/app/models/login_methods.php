<?php
require(MODELS."/connexion.php");

class login_methods extends connection {

    private $gmail;
    private $password;
    private $first_name;
    private $last_name;

    public function get_gmail(){
        return $this->gmail ;
    }
    public function get_password(){
        return $this->password;
    }
    public function set_gmail($gmail){
        $this->gmail = $gmail;
    }
    public function set_password($password){
        $this->password = $password;
    }
    public function set_first_name($first_name){
        $this->first_name = $first_name;
    }
    public function set_last_name($first_name){
        $this->last_name = $first_name;
    }
        
    
    public function login_admin(){
        $sql = "SELECT * from admin where gmail = '$this->gmail' and password = '$this->password' ";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function login_user(){
        $sql = "SELECT * from user where gmail = '$this->gmail' and password = '$this->password' ";
        $result = $this->connect()->query($sql);
        return $result;
    }

    public function add_user(){
        $sql  = "INSERT INTO `user` (first_name,last_name,gmail,password) VALUES ('$this->first_name','$this->last_name','$this->gmail','$this->password')";
        $result = $this->connect()->query($sql);
    }

    public function check_signup(){
        $sql = "SELECT * from user where gmail = '$this->gmail'";
        $result = $this->connect()->query($sql);
        return $result;
        
    }

    public function signup_method(){
        $password= password_hash($this->password ,PASSWORD_DEFAULT );
        $con =  $this->connect();
        $stmt  = $con-> prepare("INSERT INTO user (firstname,lastname,email,`password`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$this->first_name,$this->last_name, $this->gmail, $password);
        $stmt->execute();
        $stmt->close();
    }
    
    public function validat_email(){
        $sql = "SELECT * from user where email = '$this->gmail' ";
        $req = $this->connect()->query($sql);
        $req = mysqli_num_rows($req);
        return $req;
    }



}




