<!-- form -->
<body>
    <h1>Magic Number Game</h1>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <button type="submit">Get Magic Number</button>
    </form>
</body>

<?php
// Function for magic number
function getMagicNumber($number) {
    if ($number % 3 == 0 && $number % 5 == 0) 
    {
        return "FizzBuzz";
    } 
    elseif ($number % 3 == 0) 
    {
        return "Fizz";
    } 
    elseif ($number % 5 == 0) 
    {
        return "Buzz";
    } 
    else 
    {
        return $number;
    }
}

$userInput = 0;
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get input from form
  $userInput = $_POST['number'];
};

// Determine magic number
$magicNumber = getMagicNumber($userInput);

// Output result
if($userInput != 0)
{
  echo '<h2>Magic Number: '.$magicNumber.'</h2>';
  echo '<p>Input Number: '.$userInput.'</p>';
}


?>

