<?php
// Read file into a string
$file = file_get_contents('demo/writeSecureScripts.html');

// Strip the HTML tags from the file
$file = strip_tags($file);
?>

<form>
    <textarea
              style="font-family: verdana;
                     font-size: 12px;
                     wideth: 400px;
                     height: 300px;">
<?php
// Display the file
echo htmlspecialchars($file);
?>
        
    </textarea>
</form>