<!doctype html>
<html>
<head>
  <title>Welcome to Car Buddy!</title>
</head>

<body>
  <h1 style="text-align: center;">Welcome to Car Buddy</h1>

  <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "password23";
    $dbname = "car_buddy";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT UserID, FirstName, LastName, Age FROM Users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["UserID"]. " - First Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();

    phpinfo();
  ?>
</body>
</html>
