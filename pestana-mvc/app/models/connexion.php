<?php


  class connection{





    public function connect(){
        $servername='localhost:3308';
        $username='root';
        $password='';
        $dbname='pestana';

        $conn = new mysqli($servername,$username, $password,$dbname); 

        return $conn;
    }





}

?>