<?php

function checkUserRoles($userRoles){


    //TO not execute this code when the user is empty

    if(empty($userRoles)){
      echo "Roles cannot be empty";
      return; //  it can return parameters, but in this context  breaks the function,
    }
    switch($userRoles){

        case "Admin" :
            echo "Hello Admin";
            break;
            case "Editor":
                echo "Hello Editor";
                default:
                echo "Roles is empty";
    }
}

checkUserRoles("Admin");