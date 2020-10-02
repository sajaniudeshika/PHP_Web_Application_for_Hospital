<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
      <title>Suwapiyasa Hospitals</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="./bootstrap-3.3.6-dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="./css/navbar.css">
      <link rel="stylesheet" type="text/css" href="./css/style_index.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

      <script src="./bootstrap-3.3.6-dist/js/bootstrap.js"></script>
      <script src="./JQuery Library.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>

      <div class="row">
        <div id="navigator">
            <header>
              <div class="logo">Suwapiyasa Hospital</div>
              <nav>
                <ul>
                  <li><a href="#" class="active">Home</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Staff</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="login.php">Login</a></li>
                </ul>
              </nav>
              <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </header>
            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script type="text/javascript">
              $(document).ready(function(){
                $('.menu-toggle').click(function(){
                  $('nav').toggleClass('active')
                })
              })
            </script>
          </div>
       </div>
      <div class="middle">
        <img src="./imgs/slider_3.jpg" style="width:100%;margin-top:50px;">
      </div>

      <div class="middle-text">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div calss="col-md-4">
                <h3 id="headding">Welcome To Suwapiyasa Hospitals</h3>
                <p id="text">Suwapiyas Hospitals is the most accredited hospital in the healthcare sector.
                  Since 2002, Lanka Hospitals has revolutionized the healthcare
                  industry through infrastructure development and advancement
                  of products and services, with a view to deliver healthcare that is on par with global medical standards. </p>
                  <center><a href="apmt.php" class="btn btn-half">Book an Appointment</a></center>
            </div>
            <div class="col-md-4">
            </div>
          </div>
      </div>

  </body>
</html>
