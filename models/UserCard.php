<?php
 
require_once "../config/Database.php";

class UserCard {

   private $database;

   public function __construct($dbConnection)
   {
      $this->database = $dbConnection;
   }
   

   //creates new users
   public function create($firstName , $lastName ,$occupation , $age , $driversLicenseCode, $imagePath){
      $statement = $this->database->prepare("INSERT INTO user_cards (first_name , last_name , occupation , age , drivers_License_Code , image_path ) VALUES (?,?,?,?,?,?)");
      $statement ->bind_param("sssiss" , $firstName, $lastName,$occupation,$age, $driversLicenseCode,$imagePath);
      return $statement->execute();
   }

   //gets all users

   public function getAll(){
      $result = $this->database->query("SELECT *  FROM user_cards");
      return $result->fetch_all(MYSQLI_ASSOC);
   }

   public function getById($id){
     
      $statement = $this->database->prepare("SELECT * From user_cards WHERE id = ?");
      $statement->bind_param("i" ,$id);
      $statement ->execute();
      return $statement->get_result()->fetch_assoc();
   }

   
}

?> 