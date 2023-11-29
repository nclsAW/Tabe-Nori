<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/assets/favicon-tabenori.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/template.css">
    <link rel="stylesheet" href="style/history.css">
    <link rel="stylesheet" href="style/media.css">
    <title>History | Tabe Nori</title>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <?php 
      require 'function/functions.php'; 
      
      if(isset($_SESSION['userid'])) {
        header('location:history.php');
      }
    ?>
    <div class="topnav" id="topnav">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="logo" href="home.php">
            <img id="logo" src="assets/logo.png" alt="" width="300px" height="24">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3">
              <li class="nav-item">
                <a class="nav-link active" href="guestMenu.html">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="order.php">Order Now</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="history.php">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div aria-label="container" class="wrapper ">
      <form class="input-group mx-auto p-2 justify-content-end">
        <input type="text" class="w-25 p-2 border border-end-0 rounded-start" placeholder="Please Input Invoice [TN230210xxxxxxxxxx]">
        <button class="btn btn-secondary" type="button" id="button-addon2">Search</button>
      </form>
    </div>
    <div class="footer mt-auto">
      <div class="footer-left">
        <i class="fa fa-copyright"></i><div class="copyright">2023 TabeNori</div>
      </div>
      <div class="footer-center">
        <i class="fa fa-map-marker"></i><div class="location">Indonesia, DKI Jakarta, Jakarta</div><br>
        <i class="fa fa-whatsapp"></i><div class="numphone"><a href="https://wa.me/6285158422110">+62 851-5842-2110</a></div><br>
        <i class="fa fa-instagram"></i><div class="instagram"><a target="_blank" href="https://www.instagram.com/tabe_nori.p2mw/">@tabe_nori</a></div>
      </div>
      <div class="footer-right">
        <div class="privacy-policy"><a href="guestPrivacy.html">Privacy Policy</a></div>
        <div class="faq"><a href="faq.html">FAQ</a></div>
        <div class='about'><a href='guestAboutUs.html'>About Us</a></div>
      </div>
    </div>
  </body>
  <script src="../js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</html>