<!doctype html>
<html>
<head>
    <title>Links and Variables</title>
</head>
<body>
    
    <h1>Links and Variables</h1>
    
    <p>Use PHP echo and variables to output the 
        following link information:</p>
        
    <hr>
    
    <?php
    
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';
    
    echo '<h1>'.$linkName.'</h1>';
    echo '<p>'.$linkURL.'</p>';
    echo '<img src="'.$linkImage.'" width="300" />';
    echo '<br/>';
    echo '<a href="'.$linkURL.'">'.$linkURL.'</a>';

    ?>
        
</body>
</html>