<html>

<body>
    <form action="registeration.php" method="post">
        First Name: <input type="text" name="fname" /><br />
        Last Name: <input type="text" name="lname" /><br />
        Gender:
        <input type="radio" value="female" name="gender" checked>
        <label for="female">Female</label>
        <input type="radio" value="male" name="gender">
        <label for="male">Male</label><br>
        Occupation:<select name="occupation" id="occupation">
            <option value="doctor">Doctor</option>
            <option value="engineer">Engineer</option>
            <option value="teacher">Teacher</option>
            <option value="student">Student</option>
        </select><br />
        Email: <input type="email" name="email" /><br />
        Password: <input type="text" name="password" /><br />
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br />
        <input type="submit" name="submit" />
    </form>
</body>

</html>

<?php

include 'dbconfig.php';


if (isset($_POST['submit'])) {

    $first = $_POST['fname']; // firstname from form data received using POST request
    $last = $_POST['lname']; // lastname from the same source as above
    $gender = $_POST['gender']; //
    $occupation = $_POST['occupation'];
    $fileToUpload = $_POST['fileToUpload'];
    $email = $_POST['email'];   #Email Address of user entered in registration page through HTML
    $password = $_POST['password'];

    // print_r($_POST['occupation']);
    // print_r($_POST['gender']);

    // $first = '123abc';
    include 'upload.php';

    if (strlen($first) == 0 || !is_string($first)) {
        echo "Invalid First Name";
        exit;
    }
    if (strlen($last) == 0 || !is_string($last)) {
        echo "Invalid First Name";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "$email is not a valid email address";
        exit;
    }

    $sql = "select * from users where (email='$email');";

    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {

        $row = mysqli_fetch_assoc($res);
        if ($email == isset($row['email'])) {
            echo "email already exists";
            exit;
        }
    }

    if (strlen($password) == 0 && strlen($password) < 6) {
        echo "Password must contain at least six characters.";
        exit;
    }

    print_r($_POST);

    $sql = "INSERT INTO users (first, last,gender,occupation, email,password,fileToUpload)
VALUES ('$first','$last','$gender','$occupation','$email','$password','$fileToUpload')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
