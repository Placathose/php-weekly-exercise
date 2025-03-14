<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change

        if($linkName == "")
        {
          echo '<a href="'.$linkURL.'">'.$linkURL.'</a>';
        } 
        else 
        {
          echo '<h2>'.$linkName.'</h2>';
        }

        if($linkDescription != "")
        {
          echo '<p>'.$linkDescription.'</p>';
        }

        if($linkImage != "")
        {
          echo '<img src="'.$linkImage.'" width="300" />';
        }

        if($linkURL != "")
        {
          if($linkName != "")
          {
            echo '<a href="'.$linkURL.'">'.$linkName.'</a>';
          }
          else
          {
            echo '<a href="'.$linkURL.'">'.$linkURL.'</a>';
          }
        }
        
        echo '<br/>';

        ?>

    </body>
</html>