<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>My notes Notepad </title>
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
            height: 400px;
            font-size: 30px;
            line-height: 1.5em;
            border-left-width: 20px;
            border-color: #CA3DD9;
            color: #16db93;
            background-color: #FBEFFF;

        }

        .notepad {
            margin-top: 10px;
        }

        #navmain:hover {
            box-shadow: none;

        }
    </style>
    <!-- </style> -->
</head>

<body>
    <!-- Navigation -->
    <nav role="navigation" class="navbar navbar-expand-lg  static-top mb-5 shadow">
        <div class="container-fluid">
            <a class="navbar-brand " id="navmain" href="#"><i class="fa fa-fire" style="padding-right: 4px;  font-size: 40px;color: #cd201f;">BOOSTFear</i><i class="far fa-clipboard fa-2x" style="padding:5px; size:10px;"> Notepad</i></a>
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
            <div class="col-md-offset-3 col-md-12">
                <div class="buttons">
                    <button id="addNote" type="button" class="btn btn-info btn-lg">Add Note</button>
                    <button id="edit" type="button" class="btn btn-info btn-lg float-right">Edit</button>
                    <button id="done" type="button" class="btn btn-success btn-lg float-right">Done?</button>
                    <button id="allnotes" type="button" class="btn btn-info btn-lg">All Notes</button>

                </div>
                <!-- notes space -->
                <div class="notepad" id="notepad">
                    <textarea rows="20"></textarea>
                </div>
                <div class="notes" class="notes">
                    <!-- Ajax call to a php file -->
                </div>
            </div>
        </div>
    </div>
    <!-- container -->

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