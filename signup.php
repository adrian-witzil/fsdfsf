<?php 

include('config/db_connect.php');

$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$height = mysqli_real_escape_string($conn, $_POST['height']);
$weight = mysqli_real_escape_string($conn, $_POST['weight']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

        






$sql = "INSERT INTO user_info(username,email,password,gender,age,height,weight,location,imageType,imageData) VALUES('$username', '$email', '$password', '$gender', '$age', '$height', '$weight', '$location', '{$imageProperties['mime']}', '{$imgData}')";


// save to db and check

if(mysqli_query($conn, $sql)){
    //success
    header('Location: index.php');
}   else {
    //error
    echo 'query error: ' . mysqli_error($conn);
    
}


?>





