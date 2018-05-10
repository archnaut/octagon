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

	public function getDateOfBirth(string $format = 'Y/m/d'){
		return date_format($this->date_of_birth, $format);
	}
}
