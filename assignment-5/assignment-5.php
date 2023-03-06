<?php
// task 2 complete
class Person {
    private $name;
    private $email;

    public function setName( $name ) {
        $this->name = $name;
    }

    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

}

// task 3 complete
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Create new instance of Person class
    $person = new Person();

    // Set name and email properties using form data
    $person->setName( $name );
    $person->setEmail( $email );

    // Display name and email properties on webpage
    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail() . "<br> <br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- task 1 complete -->
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>