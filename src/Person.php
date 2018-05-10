<?php

final class Person{
	private $first_name;
	private $last_name;
	private $date_of_birth;

	private function __construct($first_name, $last_name, $date_of_birth){
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->date_of_birth = $date_of_birth;
	}

	public static function make($input): self
	{
		return new self(
			$input['first_name'],
			$input['last_name'],
			DateTime::createFromFormat('Y/m/d', $input['date_of_birth']));
	}

	public function getFullName(){
		return "{$this->first_name} {$this->last_name}";
	}

	// This function seems to be declared as both instance and class member:
	//     print $person->getDateOfBirth(); // 1984/04/06
	//     print $person::getDateOfBorth('F j, Y') // April 6, 1984
	// Apart from the Monostate pattern I don't see how a static method can access
	// instance variable without being  passed the instance. Furthermore, I don't
	// believe a method can be overloaded, whether static or instance. I am therefore
	// assuming that a single instance method is what is desired.
	public function getDateOfBirth(string $format = 'Y/m/d'){
 		return date_format($this->date_of_birth, $format);
 	}
}
