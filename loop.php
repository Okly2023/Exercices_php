<?php
$num = 1;
while ($num <= 120) {
    echo $num . " ";
    $num++;
}
?><br><br><br>

<?php
$startup_members = ['John', 'Jane', 'Bob', 'Alice'];

foreach ($startup_members as $member) {
    echo $member . "<br>";
}
?><br><br><br>


<?php
$countries = [
    'FR' => 'France',
    'DE' => 'Germany',
    'IT' => 'Italy',
    'ES' => 'Spain',
    'GB' => 'United Kingdom',
    'US' => 'United States',
    'CA' => 'Canada',
    'JP' => 'Japan',
    'CN' => 'China',
    'AU' => 'Australia'
];

echo '<form>';
echo '<select name="country">';
foreach ($countries as $code => $name) {
    echo '<option value="' . $code . '">' .$name. '</option>';
}
echo '</select>';
echo '</form>';
?>