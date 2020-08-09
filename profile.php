<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Profile Notepad </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <!-- style -->
    <style>
        .container {
            margin-top: 150px;
        }

        #notepad,
        #allnotes,
        #done {
            display: none;
        }

        .buttons {
            margin-top: 20px;
        }

        textarea {
            padding: 10px;
            width: 100%;
            max-width: 100%;
            height: 300px;
            font-size: 30px;
            line-height: 1.5em;
            border-left-width: 20px;
            border-color: #CA3DD9;
            color: #16db93;
            background-color: #FBEFFF;

        }

        label {
            font-weight: bold;
            font-size: 20px;
        }

        .tablemain {
            font-weight: bold;
            color: #0db39e;
            font-size: 40px;
            letter-spacing: 1px;
            margin-bottom: 20px;
            font-style: oblique;
        }

        .sr {
            font-weight: bold;
        }

        tr {
            cursor: progress;
        }
    </style>
    <!-- </style> -->
</head>

<body>
    <!-- Navigation -->
    <nav role="navigation" class="navbar navbar-expand-lg  static-top mb-5 shadow">
        <div class="container-fluid">
            <a class="navbar-brand" class="navmain" href="#"><i class="fa fa-fire" style="padding-right: 4px;  font-size: 40px;color: #cd201f;">BOOSTFear</i><i class="far fa-clipboard fa-2x" style="padding:5px; size:10px;"> Notepad</i></a>
            <button class="navbar-toggler btn" style="color:white;" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Profile
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#">My Notes
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
                        <a class="nav-link" href="#loginModal">Logged in as <strong> username</strong>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#loginModal">Logout
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navigation -->
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-10">
                <h2 class="tablemain">General Account Setttings:</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered">
                        <tr data-target="#editusernameModal" data-toggle="modal" data-dismiss="modal">
                            <td class="sr">Username:</td>
                            <td>Value</td>
                        </tr>
                        <tr data-target="#editemailModal" data-toggle="modal" data-dismiss="modal">
                            <td class="sr">Email:</td>
                            <td>Value</td>
                        </tr>
                        <tr data-target="#editpasswordModal" data-toggle="modal" data-dismiss="modal">
                            <td class="sr">Password:</td>
                            <td>Value</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- container -->
    <!-- Edit user name email password -->
    <form method="POST" id="editusernameform">
        <div class="modal" id="editusernameModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">

                        <h4 id="myModalLabel">Edit your Username:-</h4>
                        <button class="close" data-dismiss="modal"> &times; </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="username" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="updateusername" class="btn btn-danger btn-block btn-lg">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form method="POST" id="editemailform">
        <div class="modal" id="editemailModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">

                        <h4 id="myModalLabel">Edit your Email:-</h4>
                        <button class="close" data-dismiss="modal"> &times; </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Email:</label>
                            <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="updateemail" class="btn btn-danger btn-block btn-lg">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form method="POST" id="editpasswordform">
        <div class="modal" id="editpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="myModalLabel">Edit Current & New Password:-</h4>
                        <button class="close" data-dismiss="modal"> &times; </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="forcurrentpassword">Your Current Password:</label>
                            <input type="password" name="currentpassword" id="currentpassword" class="form-control form-control-lg" placeholder="Current Password" required>
                        </div>
                        <div class="form-group">
                            <label for="newpassword">New Password:</label>
                            <input type="password" name="newpassword" id="newpassword" class="form-control form-control-lg" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword">Confirm Password:</label>
                            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control form-control-lg" placeholder="Confirm New Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="updatepassword" class="btn btn-danger btn-block btn-lg">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Edit user name email password -->

    <!-- login -->

    <!-- end of login -->
    <!-- signup -->

    <!-- end of signup -->
    <!-- forgot password -->


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
        <div class="container-fluid text-center">
            <p>Made with <i class="far fa-heart"></i> BOOSTFear (PUSHAPAK KUMAR) Copyright <span>&copy;</span>2019-<?php $today = date("Y");
                                                                                                                    echo $today ?></p>

        </div>
    </div>
    <!----- end of Footer --->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>