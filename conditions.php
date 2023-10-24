<?php
/**function cleanup_room() {
    $room_is_filthy = false;
    if($room_is_filthy){
        echo "Yuk, Room is dirty : let's clean it up !";
        echo "<br>Room is now clean!";
        $room_is_filthy = true;
    }else{
            echo "<br>Nothing to do, room is neat.";
        }
    }
    cleanup_room();
  */

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[2]; 

if ($room_filthiness == "health hazard") {
    echo "Yuk, Room is a health hazard! Let's clean it up!";
} elseif ($room_filthiness == "filthy") {
    echo "Yuk, Room is filthy : let's clean it up!";
} elseif ($room_filthiness == "dirty") {
    echo "Yuk, Room is dirty : let's clean it up!";
} elseif ($room_filthiness == "clean") {
    echo "Room is clean, but let's keep it that way!";
} elseif ($room_filthiness == "immaculate") {
    echo "Wow, Room is immaculate! No cleaning needed.";
} else {
    echo "<br>Invalid room state.";
}

?>


<?php
$now = date("h:i");


if($now >= "05h00" && $now <= "09h00"){
    echo "Good morning!";
}
elseif($now > "09h00" && $now <= "12h00"){
    echo "Good day!";
}
elseif($now > "12h00" && $now <= "16h00"){
    echo "Good afternoon!";
}
elseif($now > "16h00" && $now <= "21h00"){
    echo "Good evening!";
}
else{
    echo "Good night!";
}

?>




<?php
// 3. "Different greetings according to age and gender" Exercise

/**$gender = 'Man'; // Set default gender to Man

if (isset($_GET['age']) && isset($_GET['gender'])) {
    // Form processing
    $age = intval($_GET['age']);
    $gender = $_GET['gender'];

    if ($age < 12) {
        if ($gender == 'Woman') {
            $message = "Hello little girl!";
        } else {
            $message = "Hello kiddo!";
        }
    } elseif ($age >= 12 && $age <= 18) {
        if ($gender == 'Woman') {
            $message = "Hello Miss Teen!";
        } else {
            $message = "Hello mister Teen!";
        }
    } elseif ($age > 18 && $age <= 115) {
        if ($gender == 'Woman') {
            $message = "Hello Madam!";
        } else {
            $message = "Hello Sir!";
        }
    } else {
        $message = "Wow! Still alive? Are you a robot, like me? Can I hug you?";
    }
}
?>

<form method="get" action="">
    <label for="age">Please type your age: </label>
    <input type="text" name="age"><br>

    <label for="gender">Man or Woman?</label><br>
    <input type="radio" name="gender" value="Man" <?php if ($gender == 'Man') echo 'checked'; ?>>Man<br>
    <input type="radio" name="gender" value="Woman" <?php if ($gender == 'Woman') echo 'checked'; ?>>Woman<br>

    <input type="submit" name="submit" value="Greet me now">
</form>

<?php
// Display the message if age is set
if (isset($message)) {
    echo "<p>$message</p>";
}
?>*/


// 3. "Different greetings according to age, gender, and language" Exercise

$gender = 'Man'; // Set default gender to Man
$language = 'yes'; // Set default language to yes

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['language'])) {
    // Form processing
    $age = intval($_GET['age']);
    $gender = $_GET['gender'];
    $language = $_GET['language'];

    if ($age < 12) {
        if ($gender == 'Woman') {
            if ($language == 'yes') {
                $message = "Hello little girl!";
            } else {
                $message = "Aloha girl!";
            }
        } else {
            if ($language == 'yes') {
                $message = "Hello boy!";
            } else {
                $message = "Aloha boy!";
            }
        }
    } elseif ($age >= 12 && $age <= 18) {
        if ($gender == 'Woman') {
            if ($language == 'yes') {
                $message = "Hello Miss Teen!";
            } else {
                $message = "Aloha Miss Teen!";
            }
        } else {
            if ($language == 'yes') {
                $message = "Hello mister Teen!";
            } else {
                $message = "Aloha mister Teen!";
            }
        }
    } elseif ($age > 18 && $age <= 115) {
        if ($gender == 'Woman') {
            if ($language == 'yes') {
                $message = "Hello Madam!";
            } else {
                $message = "Aloha Madam!";
            }
        } else {
            if ($language == 'yes') {
                $message = "Hello Sir!";
            } else {
                $message = "Aloha Sir!";
            }
        }
    } else {
        $message = "Wow! Still alive? Are you a robot, like me? Can I hug you?";
    }
}
?>

<form method="get" action="">
    <label for="age">Please type your age: </label>
    <input type="text" name="age"><br>

    <label for="gender">Man or Woman?</label><br>
    <input type="radio" name="gender" value="Man" <?php if ($gender == 'Man') echo 'checked'; ?>>Man<br>
    <input type="radio" name="gender" value="Woman" <?php if ($gender == 'Woman') echo 'checked'; ?>>Woman<br>

    <label for="language">Do you speak English?</label><br>
    <input type="radio" name="language" value="yes" <?php if ($language == 'yes') echo 'checked'; ?>>Yes<br>
    <input type="radio" name="language" value="no" <?php if ($language == 'no') echo 'checked'; ?>>No<br>

    <input type="submit" name="submit" value="Greet me now">
</form>

<?php
// Display the message if age is set
if (isset($message)) {
    echo "<p>$message</p>";
}
?>



<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <label for="age">Age:</label>
    <input type="number" name="age" required><br>

    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="Man" required>Man
    <input type="radio" name="gender" value="Woman" required>Woman<br>

    <input type="submit" name="submit" value="Join the team">
</form>

<?php
/**if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    if ($gender == 'Woman' && $age >= 21 && $age <= 40) {
        echo "<p>Welcome to the team, $name!</p>";
    } else {
        echo "<p>Sorry, you don't fit the criteria.</p>";
    }
}
?>*/

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $message = "Sorry, you don't fit the criteria.";

    if ($gender == 'Woman' && $age >= 21 && $age <= 40) {
        $message = "Welcome to the team, $name!";
    }

    echo "<p>$message</p>";
}
?>





<form method="post">
    <label for="name">Student name:</label>
    <input type="text" name="name" required><br>

    <label for="note">Grade:</label>
    <input type="number" name="note" min="0" max="20" required><br>

    <input type="submit" name="submit" value="Grade the student">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $note = $_POST['note'];
    $message = "";

    if ($note < 4) {
        $message = "This work is really bad. What a dumb kid!";
        $gif = "https://media.giphy.com/media/3o7aCSPqXE5C6T8tBC/giphy.gif";
    } elseif ($note >= 5 && $note <= 9) {
        $message = "This is not sufficient. More studying is required.";
        $gif = "https://media.giphy.com/media/3o7aD2VJnqkVPzCQO4/giphy.gif";
    } elseif ($note == 10) {
        $message = "Barely enough!";
        $gif = "https://media.giphy.com/media/3o7aD2VJnqkVPzCQO4/giphy.gif";
    } elseif ($note >= 11 && $note <= 14) {
        $message = "Not bad!";
        $gif = "https://media.giphy.com/media/3o7aD2VJnqkVPzCQO4/giphy.gif";
    } elseif ($note >= 15 && $note <= 18) {
        $message = "Bravo, bravissimo!";
        $gif = "https://media.giphy.com/media/3o7aD2VJnqkVPzCQO4/giphy.gif";
    } elseif ($note >= 19 && $note <= 20) {
        $message = "Too good to be true: confront the cheater!";
        $gif = "https://media.giphy.com/media/3o7aD2VJnqkVPzCQO4/giphy.gif";
    }

    echo "<p>$message</p>";
    if (isset($gif)) {
        echo "<img src='$gif' alt='GIF'>";
    }
}
?>