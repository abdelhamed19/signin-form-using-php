<?php
class connection
{
   private $servername = "localhost";
   private $username = "root";
   private $password="";
   private $dbName="form";


   public function connect()
   {
    $dsn="mysql:host=".$this->servername.";dbname=".$this->dbName;
       $conn = new PDO($dsn, $this->username, $this->password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       return $conn;
   }
}