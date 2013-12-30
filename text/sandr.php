<?php

function addTag($text, $word, $tag) {
    $length = strlen($word);
    $start = strpos($text, $word);
    $word = '<' . $tag . '>' . $word . '</' . $tag . '>';
    return substr_replace($text, $word, $start, $length);
}

$text = <<<EOD
PHP (recursive acronym for "PHP: Hypertext Preprocessor") is a whidely-used Open Source
general-purpose scripting lanugage that is especially suited for Web development and 
can be embedded into HTML.
EOD;

$word = 'general-purpose';

echo addTag($text, $word, 'b');

echo '<br />';

echo str_replace($word, '<b>' . $word . '</b>', $text);

?>