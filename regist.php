<?php header("Content-Type: text/html; charset=UTF-8");?>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'blog';
$connection = mysqli_connect($servername, $username, $password);
$select_db = mysqli_select_db($connection, $db);
//
//
if(isset($_POST['btn'])){
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];    
$password2 = $_POST['password2'];
    if($password == $password2){
    $query = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
  $result = mysqli_query($connection, $query);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
 <form action="index.php">
        <input type="submit" class="alert alert-primary alert_user" role="alert" value="Logout"> 
    </form>
  </div>
</nav>

<div class="container">
   <?php 
    $headers = 'From: Денис Хуткий <br/>';
    $headers .= 'Reply-to: example@gmail.com';
    $theme = 'Новое сообщение';
    
    $letter = "Данные сообщение: <br/>";
    $letter .="Имя: ".$name."<br/>";
    $letter .="Email: ".$email."<br/>";
    $letter .="Телефон: ".$phone."<br/>";
    $letter .='Сообщение:  <br/>'.$message;
    
    mail($email, $theme, $letter, $headers);
    ?>
    <div class="alert alert-primary" role="alert">
    <strong>Спасибо за регистрацию!</strong> На вашу почту <?php echo $email ?> отправлено письмо!
</div>
    
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="bootstrap-4.3.0-dist/js/bootstrap.js"></script>
</body>
</html>
