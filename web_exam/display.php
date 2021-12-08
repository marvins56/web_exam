<?php
include('session.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin dashboard</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" >
    <link rel="stylesheet" href="admin.css">
  </head>
  <body>

<div class="container">
      <div class="user_credentials">
        <div class="user_image">
<img src="marvin.jpeg" alt="">
</div>
        <div class="user_details">
          <span>logged in as.....</span>
          <strong>
            <p>NAME: <?php echo $_SESSION['username']; ?></p>

            <p>   <?php $mydate = time() + (7 * 24 * 60 * 60);
                                 // 7 days; 24 hours; 60 mins; 60 secs
                                  echo 'DATE:       '. date('Y-m-d') ."\n"; ?>
  <br>    <a href="logout.php">logout.</a>
            </p>
          </strong>

        </div>

      </div>

      <div class="user_editbox">
            <div class="col1">
          <P>
            USERS:
            <?php
            $query = "SELECT COUNT(*) FROM USERS";
    $result = mysqli_query($con,$query);
    $rows = mysqli_fetch_row($result);
$total=  $rows[0];
echo $total;
?></P>
<P>
ADMINS:
    <?php
        $query = "SELECT COUNT(*) FROM admin";
        $result = mysqli_query($con,$query);
        $rows = mysqli_fetch_row($result);
        $total1=  $rows[0];
        echo $total1;
        ?> </P>

            </div>
            <div class="col2">
<p> <a href="moderator.php">View </a> moderator details</p>

            </div>
            <div class="col3">
              <button type="button" name="button" class="btn1" title="click icon to download database ">
  <a href="backup.php"><i class="fas fa-file-download fa-3x"></i></a>
   <P>BACKUP DATABASE</P>
              </button>
            </div>
            <div class="col4">
                <p>VIEW <a href="user_dashboard.php"> user</a> dashboard</p>
                      <p>add  <a href="admin_register.php">New  </a> ADMIN USER</p>
            </div>

      </div>
      <div class="manage_users">
        <div class="icons" >
      <button type="button" name="button" class="btn1">
        <a href="user.php" >
          <i class="fas fa-user-plus fa-3x" title="add user"></i>
        </a></button>
        </div>

                  </button>
                  <table>
                    <tr>
                      <th>ID</th>
                      <th>USERNAME</th>
                      <th>EMAIL</th>
                      <th>PHONENO</th>
                      <th>HASHED passwords</th>
                      <th>ADMIN ACTION</th>
                    <tr>

                      <?php
                $query = "select * from users";
                $result = mysqli_query($con,$query);
                if($result){

                  while ($row  = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $username = $row['username'];
                      $email = $row['email'];
                      $phoneno = $row['phoneno'];
                      $password1 = $row['password'];
                      echo '<tr>
                        <td> '.$id.'</td>
                      <td> '.$username.'</td>
                      <td>'.$email.'</td>
                      <td>'.$phoneno.'</td>
                      <td> '.$password1.'</td>
                      <td> <button type="button" name="button" class="btn1">  <a href="update.php?updateid='.$id.'">update</a> </button>
                        <button type="button" name="button"  class="btn2"> <a href="delete.php?deleteid='.$id.'">delete</a> </button>
                      </td>
                      </tr>';
                  }
                }

                       ?>
                  </table>
      </div>

  </div>

  </body>
</html>
