<!DOCTYPE html>
<html>
    <head>
        <title>Contactez-Moi !</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="http//:fonts.googleapis.com/css?familly=lato" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="csss/style.css">
<link href="animate.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
      
    </head>
    
    
    <body>
        
       <div class="container">
            <div class="divider" style="width:50%;"></div>
            <div class="heading">
              <a href="index.php" class="btn btn-warning btn-lg" style="margin-left: 50px;"><span class="glyphicon glyphicon-hand-left"></span> retour</a>
                <h2><a href="#" style="text-decoration: none;">NaN-Fric</a></h2>
                <h3 style="text-transform: uppercase; color: green;">merci pour votre inscription veillez reseigner ces champs pour vous conneter!!"</h3>
            </div>
                
           <div class="row">
               <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="post" action="traitement/verify.php" role="form">
                        <div class="row">
                            <div class="col-md-6" class="inner-addon left-addon">
                                <i class="glyphicon glyphicon-user"></i>
                                <label for="firstname"  class=" animated zoomIn"><span class="blanc">Username</span> <span class="blue">*</span></label>
                                <span class="animated zoomIn"  style="animation-delay: 0.50s;"><input id="firstname" required type="text" name="nom" class="form-control" placeholder="Votre nom"></span>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="animated zoomIn"><span class="blanc">Password</span> <span class="blue">*</span></label>
                                <span class="animated zoomIn"style="animation-delay: 0.50s;"><input id="password" required=""  type="password" name="password" class="form-control" placeholder="mot passe" value="secret"></span>
                                <span toogle="#passwor-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button1" class="form-control" value="se connecter">
                            </div> 
                            <p><a href="#">password forget</a></p>
                            <p style="position: relative;"><a href="#">change password</a></p>
                           
                        </div>
                    </form>
                </div>
           </div>
        </div>
        
    </body>

</html>