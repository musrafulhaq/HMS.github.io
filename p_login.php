<?php 

$host="localhost";
$user="root";
$password="";

$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con, 'hc');

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from p_login where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)==1){
        header("location: p_home.php", true, 301);
        exit();
    }
    else{
        header("location: p_login.php",true,301);
        exit();
    }       
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="p_login.css">
    <link rel="stylesheet" href="/HACK/Login_Doc_1.css" />
    <link rel="stylesheet" href="/HACK/Login_Doc_1.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize .min.js"></script>
    <title>Patient Login</title>
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="#" method="POST">
                <h1 id="h1">Sign in</h1>
                <h5>for Patient</h5>
                <input type="text" name="username" placeholder="UID" />
                <input type="password" name="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <input type="submit"  class="btn btn-secondary btn-lg" id="submit" name="submit" value="Sign In">
                <!-- <button>Sign In</button> -->
            </form>
        </div>
        <div class="overlay-container">
            <div class="box"></div>
        </div>
    </div>

</body> 
</html>

</body>

</html>