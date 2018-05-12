# Code Challenge

1.  Write a simple class which can execute and debug the following:
```php
$person = Person::make(array('first_name' => 'John', 'last_name' => 'Smith', 'date_of_birth' => '1984/04/06'));
print $person->getFullName(); // John Smith
print $person->getDateOfBirth(); // 1984/04/06
print $person::getDateOfBirth('F j, Y'); // April 6, 1984
$alpha = array('a','b','c','d','e','f',g,'h');
$rand = array_rand($alpha, 3);
$randVar = $alpha[$rand[0]] . $alpha[$rand[1]] . $alpha[$rand[2]];
$person->{$randVar} = 'xyz';
print $person->{$randVar}; // xyz
```

 2. Write a PHP script that connects PHP to a mySQL database which has one table named 'Test' with 5 varchar columns (name them whatever you want).  Select the entire table in PHP and convert the result set to a local CSV file (with headers that coincide with the column names you created in the DB table) which automatically downloads to the user. 
