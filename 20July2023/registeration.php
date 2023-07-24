<html>

<body>
    <form action="registeration.php" method="post" enctype="multipart/form-data">
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
        <input type="file" name="fileToUpload" id="fileToUpload" accept="image/png, image/jpeg, image/jpg">
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
    $email = $_POST['email'];   #Email Address of user entered in registration page through HTML
    $password = $_POST['password'];


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


    $targetDir = '/uploads';
    //image validation



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

    $imageName = null;

    if (isset($_POST)) {
        $target_dir = "uploads/";
        $imageName = $_FILES["fileToUpload"]["name"];
        $target_file = $target_dir . basename($imageName);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "The size of this file is more.";
                $uploadOk = 0;
                exit;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 50000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                exit;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    $sql = "INSERT INTO users (first, last,gender,occupation, email,password,image)
VALUES ('$first','$last','$gender','$occupation','$email','$password','$imageName')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
