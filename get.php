<?php

$filename = './input.txt';
$f = fopen($filename, 'r');

if ($f) {
    $contents = fread($f, filesize($filename));
    fclose($f);
    echo '<h3>Original content</h3>' . nl2br($contents);
}

preg_match_all("/\[(.*?)\]/", $contents, $matches);

echo '<h3>Matched text between brackets</h3>';

foreach ($matches[1] as $match) {
	echo $match . '<br />';
}

?>