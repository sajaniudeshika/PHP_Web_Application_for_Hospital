<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Login</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="./css/loginstyle.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="row">
      <div class="col-md-12">
        <div class="header">
          <div class="logo" style="margin-left:15px">Suwapiyasa Hospital</div>
        </div>
      </div>
    </div>
    <div class="middle">
      <div class="row">
        <div class="col-md-8">
        </div>
        <div class="col-md-3">
            <div class="card" id="login-frame">
              <img src="./imgs/login.png" style="width:100%;height:200px;">
               <div class="container">
                 <form action="loginfunc.php" class="form-group" method="post" style="width:285px;;">
                   <input type="text" name="username" class="form-control" placeholder="Enter Username"><br>
                   <input type="password" name="password" class="form-control" placeholder="Enter Password"><br>
                   <input type="submit" name="login" class="btn btn-primary" value="login">
                 </form>
               </div>
            </div>
          </div>
          <div class="col-md-1">
          </div>
       </div>
    </div>
  </body>
</html>
