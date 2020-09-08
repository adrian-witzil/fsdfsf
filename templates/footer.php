<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<script>  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
         $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
          
  });
  });
</script>
<script>
    function activatePlacesSearch(){
        var input = document.getElementById('search_term');
        var autocomplete = new google.maps.places.Autocomplete(input);
    }
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK76KoR4TSnJ9BSCmClssbCPBzap9FxSQ&libraries=places&callback=activatePlacesSearch"></script>

<script src="js/teleport-autocomplete.js"></script>
    <script>
      var $results = document.querySelector('.results');

      //Shows history of results
      //var appendToResult = $results.insertAdjacentHTML.bind($results, 'afterend');

      TeleportAutocomplete.init('.my-input').on('change', function(value) {
        appendToResult('<pre>' + JSON.stringify(value, null, 2) + '</pre>');
      });





    </script>

<?php  
    

if (isset($_POST['submit'])) {




//getting user credentials to compare with input

$sql = 'SELECT email, password, username FROM user_info';

$result = mysqli_query($conn, $sql);

$dat = mysqli_fetch_all($result, MYSQLI_ASSOC);

//print_r ($dat);

$logged_in = False;
$turkey = 0;



//getting input

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


foreach($dat as $dat) {

$dbe = htmlspecialchars($dat['email']);
$dbp = htmlspecialchars($dat['password']);
$dbu = htmlspecialchars($dat['username']);


if($email==$dbe && $password==$dbp) {
        $logged_in = True;
        $turkey = 1;
        session_start();
        $_SESSION['email'] = $dat['email'];
        $_SESSION['password'] = $dat['password'];
        header("Location: profile.php");
        exit();
        
        
      }
}




//default $turkey should be 1 and $logged_in should be false


if(!$logged_in) {
  if($turkey == 0){

echo "<script type='text/javascript'>

$(document).ready(function(){
    
    $('.modal-trigger').leanModal();
    $('#modal3').openModal();
          
  });

        </script>";



}
        
      }       
      
      



}
?>
</body>
</html>
