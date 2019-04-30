<!DOCTYPE html>
<html>
    <head>
        <title>Contactez-Moi !</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="http//:fonts.googleapis.com/css?familly=lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
<link rel="stylesheet" href="csss/style.css">
<link href="animate.css" rel="stylesheet">
   
    </head>
    
    
    <body>
        
       <div class="container admin">
            <div class="divider" style="width:100%;"></div>
            <div class="heading">
              <a href="index.php" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-hand-left"></span> retour</a>
                <h2><a href="#" style="text-decoration: none;">Creer son compte NaN-Fric</a></h2>
            </div>
                
           <div class="row">
               <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="post" action="traitement/ajouter.php" role="form" >
                        <div class="row">
                            <div class="col-md-6" class="inner-addon left-addon"  class="form-group">
                                <i class="glyphicon glyphicon-user"></i>
                                <label for="firstname"   class=" animated zoomIn"><span class="blanc">Nom</span> <span class="blue">*</span></label>
                                   <span class="animated zoomIn"  style="animation-delay: 0.50s"><input id="firstname" required type="text" name="nom" class="form-control" placeholder="Votre Nom"></span> 
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6"  class="form-group">
                                <label for="name"  class=" animated zoomIn"><span class="blanc">prenom</span> <span class="blue">*</span></label>
                                 <span class="animated zoomIn"  style="animation-delay: 0.50s">  <input id="name" required type="text" name="prenom" class="form-control" placeholder="Votre prenom"></span> 
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6"  class="form-group">
                                <label for="email"  class=" animated zoomIn"><span class="blanc">Email</span> <span class="blue">*</span></label>
                                 <span class="animated zoomIn"  style="animation-delay: 0.50s"><input required id="email" type="email" name="email" class="form-control" placeholder="email" ></span> 
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6" class="form-group">
                                <label for="phone"  class=" animated zoomIn"><span class="blanc">Téléphone</span></label>
                                 <span class="animated zoomIn"  style="animation-delay: 0.50s"><input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone"></span> 
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6"  class="form-group">
                                <label for="year"  class=" animated zoomIn"><span class="blanc">Naissance</span></label>
                               <span class="animated zoomIn"  style="animation-delay: 0.50s"><input id="date" required type="date" name="age" class="form-control" placeholder="aa/jj/mm"></span> 
                                <p class="comments"></p>
                                
                            </div>
            

                             <div class="col-md-6">
                                <label for="password"><span class="blanc">Creer password</span></label>
                                <input id="password" type="password" required name="password" class="form-control" placeholder="password">
                                <p class="comments"></p>
                            </div>
                            

                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                            </div>
                            <div class="col-md-12" class="form-actions">
                                <input type="submit" class="button1" name="button1" class="form-control" value="S'inscrire">
                            </div>    
                        </div>
                    </form>
                </div>
           </div>
        </div>
        
    </body>

</html>