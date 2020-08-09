<?php
$link= mysqli_connect("localhost","root","","notepad");;
if(mysqli_connect_error()){
die("ERROR:Unable to connect:".mysqli_connect_error());
}
