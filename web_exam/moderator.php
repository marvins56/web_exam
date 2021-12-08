<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>moderator details</title>
      <link rel="stylesheet" href="admin.css">
  </head>
  <body>
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
  $query = "select * from admin";
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

        </tr>';
    }
  }

         ?>
    </table>
    <h5> <a href="display.php"> BACK</a>  </h5>
  </body>
</html>
