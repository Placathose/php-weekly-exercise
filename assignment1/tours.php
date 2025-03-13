<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>
<body>
    <?php
        include("includes/database.php");

        $query = "SELECT tours.date, tours.group, employees.first_name 
        FROM tours 
        JOIN employees ON employees.id = tours.employee 
        WHERE tours.date BETWEEN '2023-10-01' AND '2023-10-07';";

        $result = mysqli_query($connect, $query);

         // checks connection with database and returns number of results found
         if (!$result)
         {
             echo 'Error Message: ' . mysqli_error($connect) . '<br>';
             exit;
         }
 
         echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';

        // loops thru results and saves each row in record. 
        /// loop stops when there are no more rows of results
        while ($record = mysqli_fetch_assoc( $result )) {
            
            echo 
            "<div>
                <div> Employee: " .$record['first_name']. "</div>
                <div> Group: ".$record['group']. "</div>
                <div> Tour date: " .$record['date']. "</div>
            </div>
            <br>";
       }
    ?>
</body>
</html>