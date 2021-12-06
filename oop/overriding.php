<?php

// use User as GlobalUser; ???????????
// what is "use" keyword

Class User{

    public $username;
    private $email;
    public $role = "member";

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
    public $role = "admin"; // Overriding the role property
    public function __construct($username,$email,$level)
    {
        $this->level = $level;
        parent::__construct($username,$email);  // Call the parent constructor
    }
}

$admin = new AdminUser("rofiq","rofiq@email.com",5);
echo $admin->getEmail();
echo $admin->level;
