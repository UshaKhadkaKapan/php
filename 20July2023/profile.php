<?php

include 'dbconfig.php';
session_start();
// include 'form.php';

$id = $_SESSION['id'];

$sql = "SELECT * FROM users where id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row;

    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];
        $first = $row['first'];
        $last = $row['last'];
        $occupation = $row['occupation'];
        $email = $row['email'];
        $image = $row['image'];

        $imgPath = 'uploads/' . $image;
        echo "
        <table>
  <tr>
    <th>Fisrt Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Occupation</th>
    <th>Profile Picture</th>
  </tr>
  <tr>
    <td>$first</td>
    <td>$last</td>
    <td>$occupation</td>
    <td>$email</td>
    <td><img src=$imgPath alt=$image width='50' height='33'></td>
    
  </tr>
</table>
        ";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
