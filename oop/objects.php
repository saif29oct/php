<?php
class User{
    public $name;
    public $username;
    private $followerCount;

    public function addFriend(){
        return "$this->name is added a new user";
    }

}

$user_instance = new User();

//Check which Class object we created.
// echo "the class is ".get_class($user_instance)."\n";

$user_instance->name = "Saiful Najnin";
$user_instance->username = "SaiNaj";
// $user_instance->followerCount = 4; # Private property can be accessed directly.
$user_instance->name_not_defined_in_user_class = 4; # It's not an error. We can do this. But cant access 
                                                    # this inside class. Since it's not defined inside the Class

// Print the created object
// print_r($user_instance);

// Call the class method
// echo $user_instance->addFriend();

// Get the Properties Defined inside a class
// print_r(get_class_vars('User'));


// Get the methods defined inside a class
// print_r(get_class_methods('User'));
