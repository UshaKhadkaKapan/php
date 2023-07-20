<html>

<body>
  <form action="form.php" method="post">
    Email: <input type="email" name="email" /><br />
    Password: <input type="text" name="password" /><br />
    <input type="submit" name='submit' />
  </form>
</body>

</html>

<?php

include 'dbconfig.php';
// print_r($_POST);

if (isset($_POST['submit'])) {

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


  $sql = "SELECT id, email, password FROM users where (email='$email')";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $dbEmail = $row['email'];
    $dbPassword = $row['password'];

    if ($email == $dbEmail && $password == $dbPassword) {
      echo "Login successful!";
    } else {
      echo 'login fail';
    }
  } else {
    echo "User does not exist";
    exit;
  }
}
