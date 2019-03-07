<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="bootstrap-4.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
    <form class="form-inline" method="post" action="signin.php">
  <label class="sr-only" for="inlineFormInputName2">Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Username" required autocomplete="off" name="username">

  <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
  <div class="input-group mb-2 mr-sm-2">
  
    <input type="Password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Password" required autocomplete="off" name="password">
  </div>

  <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" id="inlineFormCheck" name="remember">
    <label class="form-check-label" for="inlineFormCheck">
      Remember me
    </label>
  </div>

  <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>
  </div>
</nav>
<div class="container">

 <form action="regist.php" method="post"  class="form_reg">
 <div class="alert alert-primary" role="alert">
    If you do not have an account register
</div>
  <input type="text" class="form-control registr" placeholder="Name" aria-label="" aria-describedby="basic-addon1" name="name" required autocomplete="off">
  <input type="text" class="form-control registr" placeholder="Username" aria-label="" aria-describedby="basic-addon1" name="username" required autocomplete="off">
  <input type="text" class="form-control registr" placeholder="Email" aria-label="" aria-describedby="basic-addon1" name="email" required autocomplete="off">
  <input type="password" class="form-control registr" placeholder="Password" aria-label="" aria-describedby="basic-addon1" name="password" required autocomplete="off">
  <input type="password" class="form-control registr" placeholder="Repeat Password" aria-label="" aria-describedby="basic-addon1" name="password2" required autocomplete="off">
  <input type="submit" class="btn btn-outline-success registr_btn" value="Check in">
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="bootstrap-4.3.0-dist/js/bootstrap.js"></script>
</body>
</html>
