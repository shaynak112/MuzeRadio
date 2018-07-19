<?php

//The Dbconnect class that connects the webpage to the database
class Dbconnect
{
   private $dsn= "mysql:host=mysql.muze-radio.com;dbname=muzeradio";
   private $username ="muze";
   private $password = "ZiaCat3388";
   private $db;

    //Method that retrieves the database connection using a try catch block
   public function getDb(){
       try {
           $this->db = new PDO($this->dsn, $this->username, $this->password);
           $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       } catch (PDOException $e){
           echo $e->getMessage();
       }

       return $this->db;
   }
}