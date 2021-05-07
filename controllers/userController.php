<?php
include '../models/user.php';
class UsersController {
public function register(){
    
        $user = new User();
        $user->insertion();
          
}

public function Auth(){
    
    $user = new User();
    $user->authentification();
}
}
