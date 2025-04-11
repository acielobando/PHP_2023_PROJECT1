<?php

class Users{
    function fetchUser($id): bool{
  
$result = false;
      echo "Query the Database";
      $result = true;

      echo "Display the records";
      return $result;
    }


    function deleteUser($id){
        echo "Deleting the records for the user ID: $id";

    }
    
}

$user1 = new Users();
$user1->fetchUser(101);

$user1->fetchUser(102);
$user1->deleteUser(101);





