<?php
require_once 'Tag.php';

echo "<br><br>";

$tag = new Tag('a');
$tag->setText('title')->setAttr('href', 'index.phtml')->show();
// prints <a href="index.html">title</a>
$tag->setText('text')->setAttr('href', 'index.html')->get();
// return <a href="index.html">text</a>