<!DOCTYPE html>
<html>
<head>
    <title>Animal Selector</title>
</head>
<body>
    <form method="POST">
        <label for="animal">Are you a human, a cat or a unicorn?</label>
        <input type="text" name="animal" id="animal" required>
        <input type="submit" value="Submit">
    </form>
    <?php
        if (isset($_POST['animal'])) {
            $animal = $_POST['animal'];
            $gif = "";
            switch ($animal) {
                case 'human':
                    $gif = "https://media.giphy.com/media/3o7aD2VJnqkVPzCQO4/giphy.gif";
                    break;
                case 'cat':
                    $gif = "https://media.giphy.com/media/JIX9t2j0ZTN9S/giphy.gif";
                    break;
                case 'unicorn':
                    $gif = "https://media.giphy.com/media/26ufdipQqU2lhNA4g/giphy.gif";
                    break;
                default:
                    echo "Invalid animal selected";
                    break;
            }
            echo "<img src='$gif' alt='$animal'>";
        }
    ?>



<?php
$gender = "M";
$hello = ($gender == "M") ? "Hello Sir!" : "Hello Madam!";
echo $hello;
?>

</body>
</html>