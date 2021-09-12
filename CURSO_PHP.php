<html>
  <head>
    <title> Mi primera página PHP </title>
  </head>
  <body> <script language = "php">     echo "¡Hola mundo!";</script> 
  <?php
        echo "<strong>¡Hola!</strong>";
        echo " 1 2 3";
        // Comentario en una sola linea
        /* comentario de varias lineas */
        ?>  
        <?php
        $name = 'Juan';
        $age = '17';
        echo $name;
        // Salida 'Juan'
        define("msg","Hola creador", true)
        // Salida "Hola creador"
        $string1 = "Hola todos"; // Double quotes
        $string2 = 'Hola todos'; // Single quotes
        $int1 = 42; // Numero positivo
        $int2 = -42; // Numero negativo
        $x = 42.168;
        $x = true; $y = false;
        $int = 30;
        $str = "15";
        $sum $str + $int;
        echo ($sum);
        // Salida 45
        $name1 = 'Sebastian';
        function getName() {
          global  $name1;
          echo $name1;
        }
        getName();
        $x++; // equivalent to $x = $x+1;
        $x--; // equivalent to $x = $x-1; 
        $x++; // post-increment 
        $x--; // post-decrement 
        ++$x; // pre-increment 
        --$x; // pre-decrement
        $a  = 2; $b = $a++; // $a=3,  $b=2
        $a  = 2; $b = ++$a; // $a=3,  $b=3 
        $x  = 50;
        $x += 100;
        echo $x; //Salida 150
        $name1 = "David"; 
        $name2 = "Amy"; 
        $name3 = "John"; 
        $names = array("David", "Amy", "John");
        $names[0] = "David";
        $names[1] = "Amy";
        $names[2] = "John";
        echo $names[1]; // Salida "Amy"
        $myArray[0] = "John";
        $myArray[1] = "<strong>PHP</strong>";
        $myArray[2] = "21";
        echo "$myArray[0] is $myArray[2] and knows $myArray[1] = ";
        // Salida "John is 21 and knows PHP"
        $people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
        // or
        $people['David'] = "27";
        $people['Amy'] = "21";
        $people['John'] = "42";
        $people = array(
          'online'=>array('David', 'Amy'),
          'offline'=>array('John', 'Rob', 'Jack'),
          'away'=>array('Arthur', 'Daniel')
        );
        echo $people['online'][0]; //Salida "David"
        echo $people['away'][1]; //Salida "Daniel"
        if (condition) {
          code to be executed if condition is true;
        } else {
          code to be executed if condition is false;
        }
        if $x >= $y) {
          echo $x;
        } else {
          echo $y;
        }
        if (condition) {
          code to be executed if condition is true;
        } elseif (condition) {
          code to be executed if condition is true;
        } else {
           code to be executed if condition is false;
        }
        $age = 21;
        if ($age<=13) {
          echo "Child.";
        } elseif ($age>13 && $age<19) {
          echo "Teenager";
        } else {
          echo "Adult"
        }
        while (condition is true) {
          code to be executed;
        }
        $i = 1; 
        while ($i < 7 ) {
          echo "The value is $1 <br/>";
          $i++;
        }
        do {
          code to be executed;
        } while (condition is true); 
        $i = 5;
        do {
          echo "The number is" . $i . "<br/>";
          $i++;
        } while ($i <= 7); 
        for (init; test; increment) {
          code to be executed;
        }
        for ($a = 0; $a < 6; $a++) {
          echo "Value of a : ". $a . "<br />";
        } 
        foreach (array as $value) {
          code to be executed;
        }
        //or
        foreach (array as $key => $value) {
           code to be executed;
        }
        $names = array("John", "David", "Amy");
        foreach ($names as $name) {
          echo $name.'<br/>';
        }
        switch (n) {
          case value1:
            //code to be executed if n=value1
            break;
          case value2:
             //code to be executed if n=value2
             break;
          ...
          default:
            // code to be executed if n is different from all labels
        }
        for ($i=0; $i<10; $i++) {
          if ($i%2==0) {
            continue;
          }
          echo $i . '';
        }
        // Salida 1 3 5 7 9
        include 'header.php';
        function functionName() {    
          //code to be executed
        }
        function sayHello() {
          echo "Hello!";
        }
        sayHello(); //Llama la funcion y su salida es Hello!
        function multiplyByTwo($number) {
          $answer = $number * 2
          echo $answer;
        }
        multiplyByTwo(3);
        // Salida 6
        function multiply($num1, $num2) {
          echo $num1 * $num2;
        }
        multiply(3,6);
        // Salida 18
        function setCounter($num=10) {
          echo "Counter is".$num;
        }
        setCounter(40); //Counter is 42
        setCounter(); //Counter is 10
        echo $_SERVER['SCRIPT_NAME'];
        // Salida "/somefile.php"
        echo $_SERVER['HTTP_HOST'];
        //Outputs "localhost"
        $host = $_SERVER['HTTP_HOST'];
        $image_path = $host.'/images/';
        require 'config.php';
        echo '<img src="'.$image_path.'header.png" />';
        <form action="first.php" method="post">
        <p>Name: <input type="text" name="name" /></p>
        <p>Age: <input type="text" name="age" /></p>
        <p><input type="submit" name="submit" value="Submit" /></p>
        </form>
        <form action="actionGet.php" method="get">
        Name: <input type="text" name="name" /><br /><br />
        Age: <input type="text" name="age" /><br /><br />
        <input type="submit" name="submit" value="Submit" />
        </form>
        echo "Hi ".$_GET['name'].". ";
        echo "You are ".$_GET['age']." years old.";
        // Start the session
        session_start();
        $_SESSION['color'] = "red";
        $_SESSION['name'] = "John"; 
        echo "Your name is " . $_SESSION['name'];
        // Outputs "Your name is John"
        setcookie(name, value, expire, path, domain, secure, httponly);
        $value = "John";
        setcookie("user", $value, time() + (86400 * 30), '/'); 
        if(isset($_COOKIE['user'])) {
        echo "Value is: ". $_COOKIE['user'];
        }
        //Outputs "Value is: John
        $myfile = fopen("file.txt", "w");
        $myfile = fopen("names.txt", "w");
        $txt = "John\n";
        fwrite($myfile, $txt);
        $txt = "David\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        /* File contains:
        John
        David
        */
        $myFile = "test.txt";
        $fh = fopen($myFile, 'a');
        fwrite($fh, "Some text");
        fclose($fh); 
        if(isset($_POST['text'])) {
          $name = $_POST['text'];
          $handle = fopen('names.txt', 'a');
          fwrite($handle, $name."\n");
          fclose($handle); 
        }
        <form method="post">
          Name: <input type="text" name="text" /> 
          <input type="submit" name="submit" />
        </form>
        $read = file('names.txt');
        foreach ($read as $line) {
          echo $line .", ";
        }
        class Person {
          public $age; //property
          public function speak() { //method
            echo "Hi!"
          }
        }
        $bob = new Person();
        echo $bob->age;
        class Person {
          public $age;
          function speak() {
            echo "Hi!";
          }
        }
        $p1 = new Person(); //instantiate an object
        $p1->age = 23; // assignment
        echo $p1->age; //23
        $p1->speak(); //Hi! 
        class Person {
          public $name;
          public $age;
          public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
          }
        }
        $p = new Person("David", 42);
        class Person {
          public function __destruct() {
            echo "Object destroyed";
          }
        }
        $p = new Person();
        class Animal {
          public $name;
          public function hi() {
            echo "Hi from animal";
          }
        }
        class Dog extends Animal {
        }
        $d = new Dog();
        $d->hi();
        class Demo implements AInterface, BInterface, CInterface {
          // Functions declared in interfaces must be defined here
        }
        
        ?>
</body>
</html>