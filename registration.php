<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="login-style.css">

</head>
<body>
    <div class="container">
        <h1 class="text-center">Registration Page</h1>
        <br><br>
        <?php
        if (isset($_POST["submit"])) {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $password = $_POST["password"];

//            $passwordhash = password_hash($password, PASSWORD_DEFAULT);
            $errors = array();
            if(empty($firstname) OR empty($lastname) OR empty($email) OR empty($password))
            {
                array_push($errors,"All fields are required");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                    array_push($errors, "Email is not valid");
            }
            if(strlen($password) < 8)
            {
                array_push($errors, "Password must be atleast 8 character long");
            }

            require_once "database/login_DB_Connect.php";

            $sql = "SELECT * FROM user WHERE email_id = '$email'";
            $result = mysqli_query($conn,$sql);
            $rowCount = mysqli_num_rows($result);
            if($rowCount > 0)
            {
                array_push($errors, "Email already exists!");
            }

            if(count($errors) > 0)
            {
                foreach ($errors as $error)
                {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }
            else
            {

                $sql = "INSERT INTO user (first_name, last_name, email_id, password) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepare_stmt= mysqli_stmt_prepare($stmt,$sql);
                if($prepare_stmt)
                {

                    mysqli_stmt_bind_param($stmt,"ssss",$firstname,$lastname, $email, $password);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>Registered Successfull!!</div>";
                }
                else
                {
                    die("Something went Wrong");
                }
            }


        }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="firstname" placeholder="First Name:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lastname" placeholder="Last Name:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="login.php">Login Here</a></p>
            <p>Want to go to home page <a href="index.php">Click Here</a></p>
        </div>
      </div>
    </div>
</body>
</html>