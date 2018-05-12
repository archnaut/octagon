<?php

use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
	public function testFullName(){
		$person = Person::make(
			array('first_name'=>'John','last_name'=>'Smith','date_of_birth'=>'1984/04/06'));

		$this->assertEquals(
			'John Smith',	
			$person->getFullName()
		);
	}

	public function testDateOfBirth(){
		$person = Person::make(
			array('first_name'=>'John','last_name'=>'Smith','date_of_birth'=>'1984/04/06'));

		$this->assertEquals(
			'1984/04/06',	
			$person->getDateOfBirth()
		);
	}

	public function testDateOfBirthFormat(){
		$person = Person::make(
			array('first_name'=>'John','last_name'=>'Smith','date_of_birth'=>'1984/04/06'));

		$this->assertEquals(
			'April 6, 1984',	
			$person->getDateOfBirth('F j, Y')
		);
	}
}
