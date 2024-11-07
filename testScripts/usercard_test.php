<?php 
 require_once "../config/Database.php";
 require_once "../models/UserCard.php";

 $userCard = new UserCard($connection);



 $user = $userCard->getById(5);
 print_r($user);

?>