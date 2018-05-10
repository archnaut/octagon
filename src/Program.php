<?php 

include 'Person.php';

final class Program{
	public static function run(){
		$person = Person::make(array('first_name'=>'John','last_name'=>'Smith','date_of_birth'=>'1984/04/06'));
		print $person->getFullName().PHP_EOL;
		print $person->getDateOfBirth().PHP_EOL;
		print $person->getDateOfBirth('F j, Y').PHP_EOL;

		$randVar = self::generatePropertyName();
		$person->{$randVar}='xyz';

		print $person->{$randVar}.PHP_EOL;
	}

	private static function generatePropertyName():string{
		$alpha = array('a','b','c','d','e','f','g','h');
		$rand = array_rand($alpha, 3);
		
		return $alpha[$rand[0]] . $alpha[$rand[1]] . $alpha[$rand[2]];
	}
}

Program::run();
