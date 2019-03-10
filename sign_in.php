<?php header("Content-Type: text/html; charset=UTF-8");?>
<?php
$servername = 'localhost';
$user = 'root';
$passw = '';
$db = 'blog';
$connection = mysqli_connect($servername, $user, $passw);
$select_db = mysqli_select_db($connection, $db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="signin.css">
</head>
<body>


<?php
   if(isset($_POST['sub'])){
$password = $_POST['password'];
$username = $_POST['username'];
    $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);
       
       if($count == 1){
           $_SESSION['username'] = $username;
       }else{
            $fmsg = "error";
       }
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
}
?> 
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


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="bootstrap-4.3.0-dist/js/bootstrap.js"></script>
</body>
</html>