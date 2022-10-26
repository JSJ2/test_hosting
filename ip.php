<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>PHP IP HACKING WEB</h1>
    <form action="ip.php" method="post">
      URL : <input placeholder="Only Host url." type="text" name="url">
    </form>
    <?php
    $ip_address;
    $ip_name;
    $ip_name = $_POST['url'];
    $ip_address = gethostbyname($_POST['url']);
    echo 'ip_name : '.$ip_name.'<br>';
    echo 'ip_address : '.$ip_address.'<br>';
    echo '<a target="_blank" href="https://'.$ip_name.' " '.'> Click here </a>'

    ?>
    <br><br><br><br><br><br><br><br><br>
    <div class='text'> Host url example is => ( ex : naver.com ) // (unex : https://naver.com) </div>
  </body>
</html>
