<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Assainment 5</title>
    <style>
   div{
    background-color: cadetblue;
    text-align: center;
    padding: 10px;
   }
   
</style>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>


<body>

    <div>




        <!-- Task Number 1 -->
        <form method="POST" action="index.php">
            <label for="name">Name:</label>
            <input  type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <input type="submit" value="Submit">

        </form>



    </div>

    <!-- Task number 2  -->
    <?php
    class Person
    {
        private $name;
        private $email;

       
        public function getName()
        {
            return $this->name;
        }

       
        public function setName($name)
        {
            $this->name = $name;

            return $this;
        }

        
        public function getEmail()
        {
            return $this->email;
        }

       
        public function setEmail($email)
        {
            $this->email = $email;

            return $this;
        }
    }



    // Task number - 3 
    $person = new Person();

    $person->setName('Tanvirul ALam');
     $person->setEmail('tanvirulalam@gmail.com');
    echo "<br>";
    echo "Name: " . $person->getName();
    echo "<br>";
    echo "Email: " . $person->getEmail();
    echo "<br>";

    ?>
<!-- task Number 4 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];

  $person = new Person();

  $person->setName($name);
  $person->setEmail($email);
  echo "<br> <br> <br>";

  echo "Name: " . $person->getName() . "<br>";
  echo "Email: " . $person->getEmail() . "<br>";
}
?>

</body>

</html>