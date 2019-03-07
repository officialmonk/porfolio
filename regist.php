<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'blog';
$connection = mysqli_connect($servername, $username, $password);
$select_db = mysqli_select_db($connection, $db);


if(isset($_POST['name']) && isset($_POST['username'])){
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];    
$password2 = $_POST['password2'];
    if($password == $password2){
    $query = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
  $result = mysqli_query($connection, $query);
}else{
        echo "hi";
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
    <div class="alert alert-primary alert_user" role="alert">
    <?php echo $username; ?>
</div>
  </div>
</nav>

<div class="container">
    <div class="input-group">
  <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
  <div class="input-group-append">
    <button class="btn btn-success" type="button">Search</button>
  </div>
</div>
<div class=" name shadow p-3 mb-5 bg-light rounded"><?php echo $name ?></div>
<div class="d-inline-flex">
<img class="img-thumbnail" src="src/IMG_2872.JPG" alt="Thumbnail image">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Skills</th>
      <th>Progress</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>HTML</td>
      <td><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
</div>
</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>CSS</td>
      <td><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
</div></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>JS</td>
      <td><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
</div></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>JQUERY</td>
      <td><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
</div></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>REACT JS</td>
      <td><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
</div></td>
    </tr>
        <tr>
      <th scope="row">6</th>
      <td>PHP</td>
      <td><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
</div></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>SQL</td>
      <td><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
</div></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>BOOTSTRAP</td>
      <td><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
</div></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="bootstrap-4.3.0-dist/js/bootstrap.js"></script>
</body>
</html>
