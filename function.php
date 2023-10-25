<?php
function capitalize($string) {
    return mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
}
echo capitalize('émile'); // Output: Émile
?>
<?php
//echo date('Y');
?>

<?php
echo date('Y-m-d H:i:s');
?><br>

<?php
function add($num1, $num2) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return "Error: argument is not a number.";
    }
    return $num1 + $num2;

}
echo add(2, 'hello'); 
?><br><br>


<?php
function acronym($str) {
    $words = explode(' ', $str);
    $acronym = '';
    foreach ($words as $word) {
        $acronym .= strtoupper($word[0]);
    }
    return $acronym;
}
echo acronym("In code we trust!"); // Output: ICWT
?><br><br>


<?php
function replaceAE($str) {
    return str_replace(['a', 'e'], 'æ', $str);
}
echo replaceAE("The quick brown fox jumps over the lazy dog"); // Output: Thæ quick brown fox jumps ovær thæ lazy dog
?>

<?php
function feedback($message, $cssClass) {
    $capitalizedClass = ucfirst($cssClass);
    return "<div class=\"$cssClass\">$capitalizedClass: $message.</div>";
}
echo feedback('Incorrect email address', 'error'); // Output: <div class="error">Error: Incorrect email address.</div>
?>



<?php
function generateRandomWord($minLength, $maxLength) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $length = rand($minLength, $maxLength);
    $word = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($alphabet) - 1);
        $word .= $alphabet[$index];
    }
    return $word;
}

echo "<h2>Generate a new word</h2>";
echo generateRandomWord(1, 5) . ' ' . generateRandomWord(7, 15);
echo '<br><button onclick="location.reload()">Generate</button>';
?><br><br>


<?php
$string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
echo strtolower($string);
?><br><br>


<?php
function calculate_cone_volume($ray, $height) {
    $volume = $ray * $ray * 3.14 * $height * (1/3);
    return $volume;
}

$volume1 = calculate_cone_volume(5, 2);
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume1 . ' cm<sup>3</sup><br />';

$volume2 = calculate_cone_volume(3, 4);
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume2 . ' cm<sup>3</sup><br />';
?>