<?php
include "connection.php";

class signin extends connection
{
    private $username;
    private $password;
    public function sign()
    {
        if(isset($_POST['sub']))
        {
            $this->username=$_POST['username'];
            $this->password=$_POST['password'];
            
            $query = "SELECT * From info WHERE username =? AND password =? " ;
            $statement=$this->connect()->prepare($query);
            $statement->execute([ $this->username,$this->password]);
                if($statement->rowCount() > 0)  
                {  
                     echo "<h1>Hello     $this->username</h1>";
                }  
                else  
                {  
                     echo "<h1>Erorr Username Or Password incoorect</h1>";
                }  
        }
    }
}
$obj=new signin();
$obj->sign();