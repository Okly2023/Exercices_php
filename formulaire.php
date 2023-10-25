<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    
    <title>Interview with Lou Reed</title>
   
</head>
<body>
   
   


<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Connect to the MySQL database
$servername = "localhost";
$username = "okly";
$password = "Jdeveloper23";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected successfully<br>";
}

// Insert the form data into the MySQL database
$sql = "INSERT INTO interview (name, age, artist, life) VALUES ('".$_POST["name"]."','".$_POST["age"]."','".$_POST["artist"]."','".$_POST["life"]."')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


<h1>Interview with Lou Reed</h1>
    <form method="post" action="formulaire.php">
        <label for="name">What is your name?</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="age">How old are you?</label>
        <input type="number" id="age" name="age"><br><br>

        <label>Do you prefer Andy Warhol or Basquiat?</label><br><br>
        <input type="radio" id="warhol" name="artist" value="warhol">
        <label for="warhol">Andy Warhol</label><br>
        <input type="radio" id="basquiat" name="artist" value="basquiat">
        <label for="basquiat">Jean-Michel Basquiat</label><br><br>

        <label for="life">Tell us about your life:</label><br>
        <textarea id="life" name="life"></textarea><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>


<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $artist = $_POST['artist'];
    $life = $_POST['life'];
}


?>
</body>
</html>