# Code Challenges

## First Challenge

> Write a simple class which can execute and debug the following:
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

### Execution

Running the following command from the project folder will execute the code and print the output to the terminal.

```
php src/Program.php
```

### Composition

The solution is composed of two files Program.php and Person.php residing in the src directory. 

Person.php contains the definition of the Person class. Program.php creates an instance of the Person class and makes calls to its members, writing the output to the terminal. Additionally, it adds a property to Person with a name based on a randomly generated string and assigns it a value of 'xyz'. It then queries the newly created property and writes its value to the terminal.

### Testing

An executable specification for the Person class can be found in the tests directory of the project. PHPUnit and Specify are used to create a Behavior Driven Development (BDD) style specification. 

#### Installing Dependencies

1. Use the following command to install Composer within the project.

```
./bash/install-composer.sh
```

2. Restore Dependencies using Composer

```
./bin/composer.phar install
```

#### Running Tests

Once the dependencies has been restore you may run the tests with the following command. 

```
./vendor/bin/PHPUnit --bootstrap vendor/autoload.php tests
```

## Second Challenge

 > Write a PHP script that connects PHP to a mySQL database which has one table named 'Test' with 5 varchar columns (name them whatever you want).  Select the entire table in PHP and convert the result set to a local CSV file (with headers that coincide with the column names you created in the DB table) which automatically downloads to the user. 

 ### Composition

The Units.php file, within the src directory, contains the script to query the database and return a CSV file based on the results.

 ### Database

 The createdb.sh script takes an optional parameter for mySql hostname. Executing the script will:

 1. Create a 'code_challenge' database

 2. Create a 'php@localhost' user, updating the authentication plugin and granting privileges to the 'code_challenge' database.

 3. Create a 'Test' table 

 4. Insert data into the 'Test' table.

 Use the following command create the database.
 ```
 sudo ./bash/createdb.sh [hostname]
 ```

### Execution

The following command will run the solution to the second challenge, launching both the server and the web browser. 

```
./bash/serve.sh
```

The user should be prompted immediately to download the CSV file. Closing the web browser will also stop the server.