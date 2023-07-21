<?php

include 'dbconfig.php';
// include 'registeration.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users where id = $id";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    // output data of each row;

    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];
        $first = $row['first'];
        $last = $row['last'];
        $gender = $row['gender'];

        $occupation = $row['occupation'];

        $email = $row['email'];
        $password = $row['password'];

        if ($gender == "male") {
            $mselected = 'checked';
            $fselected = '';
        } else {
            $fselected = 'checked';
            $mselected = '';
        }



        echo "
        <form type='edit.php' method='POST'>
 First Name: <input type='text' value=$first name='first'><br><br>
 Last Name: <input type='text' value=$last name='last'><br><br>
 Gender:
 <input type='radio' value=$gender name='gender' {$fselected}>Female
<input type='radio' value=$gender name='gender' {$mselected}> Male<br />
 Occupation:<select name='occupation' id='occupation'>
            <option value='doctor'>Doctor</option>
            <option value='engineer'>Engineer</option>
            <option value='teacher'>Teacher</option>
            <option value='student'>Student</option>
        </select><br />
 Email: <input type='text' value=$email name='four' readonly><br><br>
 Password: <input type='text' name='password' value=$password name='four'><br><br>
<input type='submit' name='submit' value='submit'>
</form>";
        if (isset($_POST['submit'])) {
            //update query here
            $first = $_POST['first'];
            $last = $_POST['last'];
            $gender = $_POST['gender'];
            $occupation = $_POST['occupation'];
            $password = $_POST['password'];

            $sql = "UPDATE users set
            first='$first', last='$last',gender='$gender',occupation='$occupation',password='$password'
             WHERE id=$id";
            echo $sql;
            exit;

            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
    }
} else {
    echo "0 results";
}

mysqli_close($conn);




// $value = "SELECT * from users where id=$id";
// $editname=

// $sql = "UPDATE users SET lastname='Doe' WHERE id=$id";

// if (mysqli_query($conn, $sql)) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . mysqli_error($conn);
// }

// mysqli_close($conn);
