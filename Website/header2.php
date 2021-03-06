<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Nick Sluiters, Joost Oomen, Jurgen Paapen, Stijn Pijman">
  <meta name="owner" content="Move with Friends">
  <meta name="description" content="Hét platform voor het vinden van een sportmaatje">
  <meta name="keywords" content="beweging, sporten, activiteiten, samen, buddy, maatje, vriend, move, with, friends">
  <title>MovewithFriends homepage</title>
  <link rel="icon" href="images/iconmwf.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles/stylesheet.css">
  <script type="text/javascript" src="javascript.js"></script>
</head>
    <body>
  <div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <a href="index2.php">
        <img class="img-responsive" src="images/logomwf.png" style=" position: absolute; z-index: 2;" alt="">
      </a>
      <p class="logofoot"> <?php echo $user->FirstName; ?></p>
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/wandelcarousel.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/crunchcarousel.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/squashcarousel.png" alt="Third slide">
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light backgroundnav sticky-top" id="kopje1">
    <div class="container col-xl-8">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link fred" rel="" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index3.php">Activiteiten en tijden opgeven<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
          <li>
            <a class="navbar-brand" target="_blank" href="https://www.facebook.com/movewithfriends.breda.3">
              <img src="images/facebookicon.png" title="Volg ons op Facebook" style="margin-left: 15px;" width="25" height="25" alt="">
            </a>
            <a class="navbar-brand" target="_blank" href="https://twitter.com/movewithfriends?lang=en">
              <img src="images/twittericon.png" title="Volg ons op Twitter" style="margin-left: 15px;" width="25" height="25" alt="">
            </a>
            <a class="navbar-brand" target="_blank" href="https://www.instagram.com/movewithfriends/">
              <img src="images/instagramicon.png" title="Volg ons op Instagram" style="margin-left: 15px;" width="25" height="25" alt=""></a>
            <div class="navbar-brand">
              <p> <a href="logout.php"><img src="images/loginicon.png" title="LOG UIT" style="margin-left: 15px;" width="25" height="25" alt=""></a></p> </div>    

          </li>
        </ul>
      </div>
    </div>
  </nav>
        
    