<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>
    <?php


    include 'youTube.class.php';
    // $dog = new animal();
    // echo $dog->info();

    $person1 = new person("Usha", "Blue", "female");
    try {
        echo "My name is {$person1->name}";
        $person1->setName("Sundaer");
        echo $person1->eyecolor;
        echo $person1->name;
    } catch (TypeError $error) {
        echo "Error!: " . $error;
    }

    ?>


</body>

</html>






<?php



// class user
// {
//     public $fname;
//     public $lname;
//     public $email;
//     public $password;
//     public $address;
//     public $gender;
//     public $occupation;

//     public function construct__($fname, $lname, $email, $password, $address, $gender, $occupation)
//     {
//         $this->fname = $fname;
//         $this->lname = $lname;
//         $this->email = $email;
//         $this->password = $password; //hashing password using sha
//         $this->address = $address;
//         $this->gender = $gender;
//         $this->occupation = $occupation;
//     }
//     function get_fname()
//     {
//         return $this->fname;
//     }
//     function get_lname()
//     {
//         return $this->lname;
//     }
//     function get_email()
//     {
//         return $this->email;
//     }
//     function get_password()
//     {
//         return $this->password;
//     }
//     function get_address()
//     {
//         return $this->address;
//     }
//     function get_gender()
//     {
//         return $this->gender;
//     }
//     function get_occupation()
//     {
//         return $this->occupation;
//     }
// }
