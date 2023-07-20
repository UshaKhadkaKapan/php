<html>

<body>
  <form action="form.php" method="post">
    Email: <input type="email" name="email" /><br />
    Password: <input type="text" name="password" /><br />
    <input type="submit" />
  </form>
</body>

</html>

<?php

include 'dbconfig.php';
// print_r($_POST);

$email = $_POST['email'];
$password = $_POST['password'];

//validation //password should be minimum 6 charaters


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "$email is not a valid email address";
  exit;
}

if (strlen($password) == 0 && strlen($password) < 6) {
  echo "Password must contain at least six characters.";
  exit;
}


$sql = "SELECT id, email, password FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"] . " - email: " . $row["email"] . " " . $row["password"] . "<br>";
    $dbEmail = $row['email'];
    $dbPassword = $row['password'];
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

if ($email == $dbEmail && $password == $dbPassword) {
  echo "Login successful!";
} else {
  echo "Invalid email or password"; //redirect to login
}
