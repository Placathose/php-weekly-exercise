<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php, SQL and mySQL</title>
</head>
<body>
  <h1>PHP, SQL, mySQL</h1>

  <?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'sandbox');

    $query = 'SELECT id, name, colour FROM colours';
    $result = mysqli_query( $connect, $query);

    echo mysqli_num_rows($result);

    // fetch the result and convert it to array
    while($record = mysqli_fetch_assoc($result))
    {
      echo '<pre>';
      print_r( $result);
      echo '</pre>';

      echo '<h2>'.$record['name'].'</h2>';
      echo '<div style="width:300px; height:40px; background-color:'.$record['colour'].';"></div>'; 

    }
  ?>
</body>
</html>