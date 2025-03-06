<h1>Here are our clients</h1>

<?php
  // Function to fetch user data from the JSONPlaceholder API
  function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
  }
  // Get the list of users
  $users = getUsers();

  echo '<pre>';
    print_r ($users);
    echo '</pre>';
  
    for ($i = 0; $i < count ($users); $i ++)
    {
      echo '<h2>'.$users[$i]['name'].'</h2>';
      echo '<p> Username: '.$users[$i]['username'].'</p>';
      echo '<p> Email: '.$users[$i]['email'].'</p>';
      echo '<br>';

      echo '<p> Street: '.$users[$i]['address']['street'].'</p>';
      echo '<p> City: '.$users[$i]['address']['city'].'</p>';
      echo '<p> Zipcode: '.$users[$i]['address']['zipcode'].'</p>';
      echo '<br>';
    }
  
?>