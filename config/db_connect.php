<?php 

//connect to database
$conn = mysqli_connect('localhost', 'adrian', 'Valkoree1111', 'fight_club');

// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

 ?>