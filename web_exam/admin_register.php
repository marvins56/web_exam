<?php
session_start();
include 'db.php';

$username= "";
$email= "";
$phoneno= "";
$password1= "";
$password2= "";

$errors = array();
if(isset($_POST['submit'])){

  // receive all input values from the form to preventig injection
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
    $phoneno = mysqli_real_escape_string($con, $_POST['phoneno']);
  $password1 = mysqli_real_escape_string($con, $_POST['password1']);
  $password2 = mysqli_real_escape_string($con, $_POST['password2']);



          //errors for the form
          if(empty($username))
          {array_push($errors,"username required or invalid username length");}

          if(empty($email) || !preg_match("/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $email))
          {array_push($errors,"email required or invalid email format");}

          if(empty($phoneno) || !preg_match('/^[0-9]{10}+$/', $phoneno))
          {array_push($errors,"phone number required or invalid number format");}

          if(empty($password1) || !preg_match("/^[a-zA-Z][0-9a-zA-Z_!$@#^&]{5,20}$/", $password1))
          {array_push($errors,"weak password");}


          if ($password1 != $password2) {
          	array_push($errors, "passwords dont match");
            }

// checking if user exists
$user_check_query = "SELECT * FROM admin WHERE username='$username' OR email='$email' or phoneno= '$phoneno' LIMIT 1";
$result = mysqli_query($con, $user_check_query);
$user = mysqli_fetch_assoc($result);

      if ($user) { // if user exists
        if ($user['username'] != $username) {
          array_push($errors, "Username already exists");
        }
        if ($user['email'] != $email) {
          array_push($errors, "email already exists");
        }
        if ($user['phoneno'] != $phoneno) {
          array_push($errors, "phone number already exists");
        }
      }

//if it doent exist register teh user
  // checking for errors
  // Finally, register user if there are no errors in the form
              if (count($errors) == 0) {
                $password = md5($password2);//encrypt the password before saving in the database

                $query = "INSERT INTO admin (username, email,phoneno, password)
                      VALUES('$username', '$email','$phoneno', '$password')";
                mysqli_query($con, $query);


                $_SESSION['username'] = $username;
                header('location:login.php');
              }

}



 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IEEE CONFRENCE REGISTRATION</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" >
<link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="after">
<img src="img3.jpeg" alt=""> <span>IEEE CONFRENCE ADMIN REGISTRATION FORM</span>
    </div>
    <section>

      <div class="wrapper">
        <div class="col">
 <span class="img"> <img src="img5.png" alt="">  </span>
   <p>Advancing Technology for Humanity(IEEE)
     <br>
       <a href="index.php">Get more info..</a>
   </p>
        </div>

        <div class="col_form">

          <form  method="post" action="" >
  <span class="error_space">   <?php echo "*"; include('errors.php'); ?></span>
                  <div class="icons">
                     <i class="fas fa-user-circle " title="username"></i>
                     <input type="text" name="username" value="<?php echo $username; ?>"placeholder="username">
                  </div>

                  <div class="icons">
                  <i class="fas fa-envelope" title="email"></i>
                     <input type="email" name="email" value="<?php echo $email; ?>" placeholder="email">
                  </div>

                  <div class="icons">
                <i class="fas fa-phone-square-alt" title="contact"></i>
                    <input type="number" name="phoneno" value="<?php echo $phoneno; ?>" placeholder="eg. 0773603206">
                  </div>

                  <div class="icons">
                  <i class="fas fa-lock" title="password"> </i>
                     <input type="password" name="password1" value="<?php echo $password1; ?>" placeholder=" enter password">
                  </div>

                  <div class="icons">
                  <i class="fas fa-lock" title="password"></i>
                     <input type="password" name="password2" value="" placeholder="confirm password">
                  </div>


                     <input type="submit" value="REGISTER" name="submit">
                          <input type="reset" value="RESET" >
                     <p>Already have an account? <a href="login.php">LOGIN</a>
                     </p>

          </form>
        </div>
      </div>
    </section>






















  </body>
</html>
