  <?php 
  session_start();
  ?>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="img/favicon-16x16.png">
     

    <style>
  header{
    background: url(img/banner.jpg);
    background-size: cover;
    background-position: center;
    min-height: 400px;
    background-position-y: 30px;
  }
  @media screen and (max-width: 670px){
    header{
      min-height: 200px;
      background-position-y: 30px;

    }
    .parallax-container {
      height: 200px;
    }
  }


  .section{
    padding-top: 4vw;
    padding-bottom: 4vw;
  }
  .tabs .indicator{
    background-color: #1a237e;
  }
  .tabs .tab a:focus, .tabs .tab a:focus.active{
    background: transparent;
  }
  body{
      background: #3C3B3B;
  }



/* makes the horizontal card work*/

.card.horizontal {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }


/*need to set up media query for fighter cards for different screen sizes */
.card-image{
 
  max-width: 40% !important;
  height: 320px !important;

}
.bugs {
  height:320px !important;
  object-fit: cover !important;
}
}


</style>






</head>
<body>


<header>




<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper deep-purple darken-3">
    <div class="container">
    <div class="brand-logo center">
      <ul id="nav-mobile" class="hide-on-med-and-down">
        <li><a href="sass.html">About</a></li>
        <li><a href="badges.html">Rules</a></li>
        <li><a href="collapsible.html">Brad Pitt</a></li>
      </ul>
      </div>
    </div>
    </div>
  </nav>
  </div>



</header>



<nav>
    <div class="nav-wrapper deep-purple darken-3">
    <div class="container">
      <a href="index.php" class="brand-logo center">Fight Club</a>
      <ul class="right hide-on-med-down">
      <li><a class="waves-effect waves-red purple lighten-2 btn modal-trigger" href="#modal2">Log In</a></li>
      <li><a class="waves-effect waves-red purple lighten-2 btn modal-trigger" href="#modal1">Sign Up</a></li>

      </ul>

    </div>
    </div>
  </nav>

  <!--Modal2-->

  <div id="modal2" class="modal">
  <form class="" action="index.php" method="POST">
  <div class="input-field col s4">
          <input placeholder="Email" id="email" name="email" type="text" class="validate">
        </div>
        <div class="input-field col s4">
          <input placeholder="Password" id="password" name="password" type="password" class="validate">
        </div>
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">

              

</form>
    </div>
  </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div>
        <div class="card-content">
          <h4>Join Fight Club</h4>
    <div class="row">
    <form class="col s12" name="frmImage" enctype="multipart/form-data" action="signup.php"
        method="post" class="frmImageUpload">
      <div class="row">
        <div class="input-field col s4">
          <input placeholder="Username" id="username" name="username" type="text" class="validate">
        </div>
        <div class="input-field col s4">
          <input placeholder="Email" id="email" name="email" type="text" class="validate">
        </div>
        <div class="input-field col s4">
          <input placeholder="Password" id="password" name="password" type="password" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
            <input placeholder="Gender" id="gender" name="gender" type="text" class="validate">
        </div>
        <div class="input-field col s4">
            <input placeholder="Age" id="age" name="age" type="text" class="validate">
        </div>
        <div class="input-field col s4">
            <input placeholder="Height" id="height" name="height" type="text" class="validate">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s4">
            <input placeholder="Weight" id="weight" name="weight" type="text" class="validate">
        </div>
        <div class="input-field col s4">
            <input type="text" placeholder="Location" class="my-input" tabindex="1" autocomplete="off" id="location" name="location">
        </div>
          <div class="results"></div>
      </div>
      <div class="row">


        <label>Upload Image File:</label><br /> <input name="userImage"
            type="file" class="inputFile" />


          </div>
      </div>

      <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">

      

    </form>
  </div>
  </div>
  </div>
  </div>

  </div>



 
    