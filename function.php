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
?>