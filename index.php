<html lang="en">
<head>
    <title>Welcome To Fight Club</title>
<?php 

ob_start();


include 'config/db_connect.php';

include 'templates/header.php';

?>






    <?php 
        $sql = 'SELECT email, gender, age, height, weight, username, location, user_id, imageData FROM user_info';

        $result = mysqli_query($conn, $sql);

        $dat = mysqli_fetch_all($result, MYSQLI_ASSOC);


    ; ?>
      


<!--Error Modal -->

<div class="container">
<div id="modal3" class="modal">
<div class="container">
  <form class=" col s4" action="index.php" method="POST">
  <div class="input-field col s4">
          <input placeholder="Email" id="email" name="email" type="text" class="validate">
        </div>
        <div class="input-field col s4">
          <input placeholder="Password" id="password" name="password" type="password" class="validate">
        </div>
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">

        ERRORS!! TRY AGAIN
  </div>
  </div>

</form>
    </div>







<div class="container">
  
  <h2 class="pink-text text-lighten-5 hide-on-med-and-down">Fighter Cards</h2>
  <h4 class="pink-text text-lighten-5 hide-on-large-only">Fighter Cards</h4>

  
  <div class="row">

  


  <!-- foreach function to display the array of arrays, $dat because that is where myqli_assoc is sent to --> 

<?php    
    //I decided to shuffle the array so that everytime the page was loaded, users wouldn't be seeing the same fighter cards
    shuffle ($dat);
foreach($dat as $dat){ 
?>
<div class="col s6">
    <div class="card horizontal">
      <div class="card-image">
      <?php echo '<img class="bugs" src="data:image/jpeg;base64,'.base64_encode($dat['imageData'] ).'"/>'; ?>
      </div>
      <div class="card-stacked">
        <div class="card-content">
        <ul>
                    <li><h5><?php echo htmlspecialchars($dat['username']) ; ?></h6></li>
                    <li>Gender: <?php echo htmlspecialchars($dat['gender']) ; ?></li>
                    <li>Age: <?php echo htmlspecialchars($dat['age']) ; ?></li>
                    <li>Height: <?php echo htmlspecialchars($dat['height']) ; ?> Inches</li>
                    <li>Weight: <?php echo htmlspecialchars($dat['weight']) ; ?> lbs</li>
                    <li>Location: <?php echo htmlspecialchars($dat['location']) ; ?></li>

                </ul>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>










<?php } 
?>

</div>


 

<?php 
include 'templates/footer.php';


// redirect after would not work without the following code
ob_end_flush();





?>












    
