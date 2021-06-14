<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
//    $_SESSION['userID'] = $_SESSION['firstname'] = $_SESSION['lastname'] = $_SESSION['verificated'] = "";
    $emailErr = $passwordErr = "";
    $email = $password = "";
    if(empty($_POST['email'])){
        $emailErr = "მეილის ველი ცარიელია.";
    }else{
        $email = trim($_POST['email']);
    }
    if(empty($_POST['password'])){
        $passwordErr = "პაროლის ველი ცარიელია.";
    }else{
        $password = trim($_POST['password']);
    }

    $conn = new mysqli('localhost', 'root', '', 'myDB');


    // checking is email exist in my db.

if(empty($emailErr) && empty($passwordErr)) {
    $sql = "SELECT * FROM users where Email = '$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $emailVerified = true;

            // checking is password is same as hashed password in my db.
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['password'] = $row['Pass'];
            };
            $hashedPass = $_SESSION['password'];
            if (password_verify($password, $hashedPass) == true) {
                $sql = "SELECT * FROM users where Email = '$email'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $_SESSION['userID'] = $row['Id'];
                    $_SESSION['firstname'] = $row['FirstName'];
                    $_SESSION['lastname'] = $row['LastName'];
                    $_SESSION['verificated'] = $row['EmailVerificationToken'];
                };

                $_SESSION['logged'] = true;
                header("Location: index.php");
            }else{
                $passwordErr = "პაროლი არასწორია.";
            }
        }else{
            $emailErr = "მეილი არასწორია.";
        }
    }
}else{
    $Err = "შეავსეთ ყველა ველი.";
}

}

?>