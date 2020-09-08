<html lang="en">
<head>
    <title>Welcome To Fight Club</title>
<?php 

ob_start();


include 'config/db_connect.php';

include 'templates/header.php';

if (isset($_SESSION['password'])) {
    echo "You are successfully logged in";
}


include 'templates/footer.php';

?>