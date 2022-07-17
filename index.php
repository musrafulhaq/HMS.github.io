<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css?version=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap" rel="stylesheet">
</head>
<body >
  <div class="background">
    <section class="header">
        <!-- <nav>
            <div class="nav-link">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Course</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="/WEB DEVELOPMENT/Project/DDU/contact.html" target="_blank">Contact Us</a></li>
                </ul>
            </div>
        </nav>-->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <!-- <a class="navbar-brand" href="#">Navbar</a> -->
              <a id="special" href="#"> <img src="logos/new (1).png" id="logo" alt=""> </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" id="sitename" href="#">HEALTHCARE MANAGMENT SYSTEM</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
    
    
    <div class="container">
      <div class="logins">
        <a href="dr_login.php"><img src="logos/drl.png" alt=""></a> <br>
        <a href="" id="links_a">Login as Doctor</a>
        
      </div>
      <div class="logins">
        
        <a href="p_login.php"><img src="logos/pl.png" alt=""></a> <br>
        <a href="" id="links_a">Login as Patient</a>
      </div>
    </div>
  </div>
    
    <div class="about">
      <div class="title_about">
        <h2>Health Care System</h2>
      </div>
      <hr>
      <div class="body_about">
        <br>
        <p>The purpose of the project entitled as “HEALTHCARE  MANAGEMENT SYSTEM” is to computerize the medical data and patient’s medical history which is user friendly simple, fast, and cost – effective. It deals with the collection of patient’s information, diagnosis details, etc. Traditionally, it was done manually. The main function of the system is register and store patient details and doctor details and retrieve these details as and when required, and also to manipulate these details meaningfully</p>
        <br>
        <p>The “HEALTHCARE  MANAGEMENT SYSTEM” can be entered using a username and password. It is accessible either by an Doctor or receptionist. Only they can add data into the database. The data can be retrieved easily.  The data are well protected for use and makes the data processing very fast.</p>
      </div>
    </div>

</body>
</html>