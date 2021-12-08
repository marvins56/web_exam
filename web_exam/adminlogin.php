<?php
session_start();
include 'db.php';


$username= "";
$email= "";


$errors = array();
if(isset($_POST['submit'])){

  // receive all input values from the form to preventig injection
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password2 = mysqli_real_escape_string($con, $_POST['password2']);


          //errors for the form
          if(empty($username))
          {array_push($errors,"username required or invalid username length");}

          if(empty($email) || !preg_match("/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $email))
          {array_push($errors,"email required or invalid email format");}

          if(empty($password2))
          {array_push($errors,"password required");}


// checking if user exists
$user_check_query = "SELECT * FROM admin WHERE username='$username' or email='$email' or password = '$password2' LIMIT 1";
$result = mysqli_query($con, $user_check_query);
$user = mysqli_fetch_assoc($result);

      if ($user) { // if user exists
        if ($user['username'] != $username) {
          array_push($errors, "Username doesnot exists");
        }
        if ($user['email'] != $email) {
          array_push($errors, "email doesnot exists");
        }

      }

  if (count($errors) == 0) {
//encrypting the password
  $password = md5($password2);
  $query = "SELECT * FROM admin WHERE username='$username' or email = '$email' or password='$password2'";
  $results = mysqli_query($con, $query);


if(isset($results)){
  $_SESSION['username'] = $username;
  header('location: display.php');
}
else {
//if no details in the database this error pops up
array_push($errors, "Wrong username/password combination");
}
}

}



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>IEEE CONFRENCE ADMIN LOGIN </title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="after">
<img src="img3.jpeg" alt=""> <span>IEEE CONFRENCE ADMIN LOGIN FORM</span>
    </div>
    <section>

      <div class="wrapper">
            <div class="col">
                 <span class="img"> <img src="img4.jpg" alt=""></span>
                    <p>Advancing Technology for Humanity(IEEE)<br>
                      <a href="index.php">Get more info..</a>
                    </p>
                </div>

              <div class="col_form">

          <form  method="post">
              <span class="error_space">   <?php echo "*"; include('errors.php'); ?></span>
                  <div class="icons">
                     <i class="fas fa-user-circle " title="username"></i>
                     <input type="text" name="username" value="<?php echo $username; ?>" placeholder="username">
                  </div>

                  <div class="icons">
                  <i class="fas fa-envelope" title="email"></i>
                     <input type="email" name="email"value="<?php echo $email; ?>" placeholder="email">
                  </div>

                  <div class="icons">
                  <i class="fas fa-lock" title="password"> </i>
                     <input type="password" name="password2" placeholder=" enter password">
                  </div>


                  <div class="buttons">
                     <i class="fas fa-sign-in-alt">
                     </i><input type="submit" value="LOGIN" name="submit">

                     </p>
                  </div>
          </form>
        </div>
      </div>
    </section>



  </body>
</html>
