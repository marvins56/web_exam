
<?php
include('session.php');
include('db.php');


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

            //if user exixts
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' or phoneno= '$phoneno' LIMIT 1";
            $result = mysqli_query($con, $user_check_query);
            $user = mysqli_fetch_assoc($result);

                  if ($user) { // if user exists
                    if ($user['username'] === $username) {
                      array_push($errors, "Username already exists");
                    }
                    if ($user['email'] === $email) {
                      array_push($errors, "email already exists");
                    }
                    if ($user['phoneno'] === $phoneno) {
                      array_push($errors, "phone number already exists");
                    }
                  }
//if it doent exist register teh user
  // checking for errors
  // Finally, register user if there are no errors in the form
              if (count($errors) == 0) {
                $password = md5($password2);//encrypt the password before saving in the database

              $query = "INSERT INTO users (username, email,phoneno, password)
                VALUES('$username', '$email','$phoneno', '$password')";
              $results = mysqli_query($con, $query);
              if($results){
              header('location:display.php');
              }
              else{die(mysqli_error($con));}
              }

}

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="user_update.css">
    <title>add user</title>
  </head>
  <body>
<div class="container">

  <form  method="post" action="" >
      <h2>ADD USER TO DATABASE</h2>
    <span class="error_space">   <?php echo "*"; include('errors.php'); ?></span>

          <div class="icons">
            
             <i class="fas fa-user-circle " title="username"></i>
             <input type="text" name="username" value="<?php echo $username; ?>"placeholder="username"autocomplete="off">
          </div>

          <div class="icons">
          <i class="fas fa-envelope" title="email"></i>
             <input type="email" name="email"  value="<?php echo $email; ?>"placeholder="email"autocomplete="off">
          </div>

          <div class="icons">
        <i class="fas fa-phone-square-alt" title="contact"></i>
            <input type="number" name="phoneno"  value="<?php echo $phoneno; ?>"placeholder="eg. 0773603206"autocomplete="off">
          </div>

          <div class="icons">
          <i class="fas fa-lock" title="password"> </i>
             <input type="password" name="password1" value="<?php echo $password1; ?>"placeholder=" enter password"autocomplete="off">
          </div>

          <div class="icons">
          <i class="fas fa-lock" title="password"></i>
             <input type="password" name="password2" value="" value="<?php echo $passowrd2; ?>"placeholder="confirm password">
          </div>
             <input type="submit" value="SUBMIT" name="submit">
                  <input type="reset" value="RESET" >
                  <h5> <a href="display.php"> BACK</a>  </h5>
  </form>

</div>


  </body>
</html>
