<?php

// Situation 1
class Car
{
	public static function model()
	{
		self::getModel();
	}

	protected static function getModel()
	{
		echo "I am a Car!";
	}

}

class Mercedes extends Car
{

	protected static function getModel()
{
		echo "I am a Mercedes!";
	}

}
Car::model();   // Output: I am a Car!
echo("\n");
Mercedes::model();   // Output: I am a Car!



//Situation 2:
// class Car
// {
// 	public static function model()
// 	{
// 		static::getModel();
// 	}

// 	protected static function getModel()
// 	{
// 		echo "I am a Car!";
// 	}
// }

// class Mercedes extends Car
// {

// 	protected static function getModel()
// {
// 		echo "I am a Mercedes!";
// 	}

// }
// Car::model();   // Output: I am a Car!
// echo("\n");
// Mercedes::model();    // Output: I am a Mercedes!


// Situation 3
class g {
	
	/* The new self */
	public static function get_self() {
	return new self();
	}

	/* The new static */
	public static function get_static() {
	return new static();
	}
}

class f extends g {}

echo get_class(f::get_self()); // g
echo get_class(f::get_static()); // f
echo get_class(g::get_self()); // g
?>



