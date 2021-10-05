<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
 <body>
 <?php
    $SESSION["username"] = $_POST["username"];
    $SESSION["email"] = $_POST["email"];
    session_set_cookie_params('1200');
    session_start();
    ?>
  <form action="upload.php" method="post" enctype="multipart/form-data">
   <input type="file" name="fileToUpload" id="fileToUpload">
   <input type="submit" value="Upload Image" name="submit">
  </form>
  </body>
</html>