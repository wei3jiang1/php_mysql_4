<?php
$the_string = "Ben & Jerry";

echo $the_string . "<br />";

echo htmlspecialchars("Ben & Jerry");

echo nl2br("<p>Dear Sir or Madam,\n This is my nicely formartted leter. I hope that\n it really impresses you.\nMike Format</p>");

$text = 'This is <b>bold</b> text';

echo $text . "<br />";

echo strip_tags($text);


$str = "An example on a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br />\n");
?>