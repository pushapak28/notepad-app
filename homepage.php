<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Notepad</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="styling.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navigation -->
  <nav role="navigation" class="navbar navbar-expand-lg  static-top mb-5 shadow">
    <div class="container-fluid"> <a class="navbar-brand" class="navmain" href="#"><i class="fa fa-fire" style="padding-right: 4px;
  font-size: 40px;
  color: #cd201f;">BOOSTFear</i><i class="far fa-clipboard fa-2x" style="padding:5px; size:10px;"> Notepad</i></a>
      <button class="navbar-toggler btn" style="color:white;" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">My Notes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>

        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#loginModal" data-toggle="modal">Login
            </a>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End of Navigation -->
  <!-- jumbotron -->
  <div class="jumbotron" id="myContainer">
    <h1>Online NotePad!</h1>
    <p>
      <q>Notes with you wherever you go.</q>
    </p>

    <p>Easy to use, Protects all your notes!</p>
    <button type="button" class="btn btn-warning" id="mainbtn" data-target="#signupModal" data-toggle="modal">Sign up-It's free</button>
  </div>

  <!-- End of Jumbotron -->
  <!-- login -->
  <form method="POST" id="loginform">
    <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">

            <h4 id="myModalLabel">Login: </h4>
            <button class="close" data-dismiss="modal"> &times; </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
            </div>


            <div class=" form-group">
              <label for="password">Password:</label>
              <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
            </div>
            <div class="checkbox">
              <label for="rememberme"><input type="checkbox" name="rememberme" id="rememberme">&nbspRemember me</label>
              <a class="float-right" data-toggle="modal" data-dismiss="modal" href="#forgotPasswordModal"> Forgot Password?</a>
            </div>
            <div class="form-group">
              <button type="submit" name="signup-btn" class="btn btn-success btn-block btn-lg">Login</button>
            </div>
            <p class="text-center">Not a member? <a href="login.php" data-dismiss="modal" data-target="#signupModal" data-toggle="modal" class="btn btn-primary">Sign up</a></p>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- end of login -->
  <!-- signup -->
  <form method="POST" id="signform">
    <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="myModalLabel">Sign up Today and start using our Online Notepad: </h4>
            <button class="close" data-dismiss="modal"> &times; </button>
          </div>
          <div class="modal-body">
            <!-- signup message from php file -->
            <div id="signupmessage"></div>
            <!-- signup message from php file -->

            <div class="form-group">
              <label for="username">Username:</label>
              <input class="form-control" type="text" id="username" name="username" placeholder="Username" max-length="30">
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" class="form-control " placeholder="Email">
            </div>
            <div class=" form-group">
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="password2">Confirm Password: </label>
              <input type="text" name="password2" id="password2" class="form-control " placeholder=" Confirm Password">
            </div>
            <div class="form-group">
              <button type="submit" name="signup-btn" class="btn btn-success btn-block btn-lg">Sign Up</button>
            </div>
            <p class="text-center">Already a member? <a href="login.php" data-target="#loginModal" data-dismiss="modal" data-toggle="modal" class="btn btn-primary">Sign in</a></p>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- end of signup -->
  <!-- forgot password -->
  <form method="POST" id="forgotpasswordform">
    <div class="modal" id="forgotPasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">

            <h4 id="myModalLabel">Forgot Password: Enter your email address</h4>
            <button class="close" data-dismiss="modal"> &times; </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="username">Email:</label>
              <input type="text" name="username" class="form-control form-control-lg" placeholder="Recovery Email" required>
            </div>
            <div class="form-group">
              <button type="submit" name="signup-btn" class="btn btn-danger btn-block btn-lg">Submit</button>
            </div>
            <p class="text-center">Not a member? <a href="login.php" data-target="#signupModal" data-dismiss="modal" data-toggle="modal" class="btn btn-primary">Sign up</a></p>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- end of forgot password -->




  <!----Social media icons----->
  <div class="icon-bar">
    <a href="#" class="facebook" target="_blank">Facebook<i class="fab fa-facebook"></i></a>
    <a href="#" class="instagram" target="_blank">Instagram<i class="fab fa-instagram"></i></a>
    <a href="#" class="twitter" target="_blank">Twitter<i class="fab fa-twitter"></i></a>
    <a href="#" class='linkedin' target='_blank'>
      LinkedIn<i class=" fab fa-linkedin"></i>
    </a>
    <a href="#" class="youtube" target="_blank">You Tube<i class="fab fa-youtube"></i></a>
  </div>
  <!----Social media icons----->

  <!-----Form --->

  <!-----Footer --->
  <div id="footer">
    <div class="container text-center">
      <p>Made with <i class="far fa-heart"></i> BOOSTFear (PUSHAPAK KUMAR) Copyright <span>&copy;</span>2019-<?php $today = date("Y");
                                                                                                              echo $today ?></p>

    </div>
  </div>
  <!----- end of Footer --->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="index.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</html>