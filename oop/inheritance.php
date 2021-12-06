<?php

use User as GlobalUser;

Class User{

    public $username;
    private $email;

    public function __construct($username,$email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function setEmail($email){
        strpos($email, '@') > -1 ? $this->email = $email : false;
    }

    public function getEmail(){
        return $this->email;
    }

    public function userEmail(){
        return $this->email;
    }

}

class AdminUser extends User{
    public $level;
    public function __construct($username,$email,$level)
    {
        $this->level = $level;
        parent::__construct($username,$email); 
    }
}



$userOne = new User("Saiful Islam","saif29oct@gmail.com");

$userOne->setEmail("najnin14jan@gmail.com");
// print_r($userOne);
// echo $userOne->userEmail();

$admin = new AdminUser("rofiq","rofiq@email.com",5);
echo $admin->getEmail();
echo $admin->level;