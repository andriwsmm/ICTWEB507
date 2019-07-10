<?php 


function listWrapper($content){
	echo '<li>' . $content . '.</li>'; 
}

$animals = ['cat', 'dog', 'koala', 'turtle'];

echo '<ul>';
foreach($animals as $animal){
	listWrapper($animal);
}

echo '</ul>';
