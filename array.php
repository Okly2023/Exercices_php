<?php
$web_development = [
    'frontend' => [],
    'backend' => []
];

array_push($web_development['frontend'], 'xhtml');
array_push($web_development['frontend'], 'CSS');
array_push($web_development['frontend'], 'Javascript');
array_push($web_development['backend'], 'Ruby on Rails');
array_push($web_development['backend'], 'Flash');
$web_development['frontend'][0] = 'html';
unset($web_development['backend'][1]);

echo '<pre>';
print_r($web_development);
echo '</pre>';


?>

