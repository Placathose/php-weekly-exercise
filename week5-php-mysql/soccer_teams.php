<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soccer Teams</title>
</head>
<body>
  <h1>Soccer TeamsL</h1>

  <?php
    // $connect = mysqli_connect('localhost', 'root', 'root', 'football_team');
    $connect = mysqli_connect('sql211.infinityfree.com', 'if0_38476660', 'mokutonn', 'if0_38476660_football_team');

    $query = 'SELECT id, name, city, league, ranking FROM teams';
    $result = mysqli_query( $connect, $query);

    echo mysqli_num_rows($result);

    // fetch the result and convert it to array
    while($record = mysqli_fetch_assoc($result))
    {
      echo '<h2>'.$record['name'].'</h2>';
      echo '<p> city: '.$record['city'].'</p>';
      echo '<p> league: '.$record['league'].'</p>';
      echo '<p> ranking: '.$record['ranking'].'</p>';
      // echo '<img src="'.$record['logo'].'" >';



    }
  ?>
</body>
</html>