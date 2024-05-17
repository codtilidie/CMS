<?php

class Createdb
{
    public $server_name;
    public $username;
    public $password;
    public $db_name;
    public $table_name;
    public $conn;

    public function __construct($db_name="new__db",  $table_name="users", $server_name="localhost", $username="root", $password="" ){
            $this->db_name = $db_name;
            $this->table_name = $table_name;
            $this->server_name =  $server_name;
            $this->username = $username;
            $this->password = $password;

            $this->conn= mysqli_connect($server_name, $username, $password);
    
            if(!$this->conn){
                die("connection failed". mysqli_connect_error());                
            }

$sql = "CREATE DATABASE IF NOT EXISTS $db_name";

if( mysqli_query($this->conn,$sql)){

$this->conn = mysqli_connect($server_name, $username, $password, $db_name);


$sql = "Create table if not exists $table_name (
no int(11) not null AUTO_INCREMENT primary key,
Food_name varchar(30),
Food_price Float, 
food_img varchar(100),
Description varchar(200)
);";
}
if(!mysqli_query($this->conn,$sql)){
    echo "Error creating a table ". mysqli_error($this->conn);
}

else{
    return false;    
}
}
}

?>
