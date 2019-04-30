
    <?php
    require'database.php';
session_start();
if (!(isset($_SESSION['use']))) {
  header("location:inscription.php");
}
else{
?>


<!DOCTYPE html>
<html>
    <head>
        <title>projet Avril</title>
        <meta charset="utf-8">
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
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1">
 <h1 style="text-align: center; background: orange">espaces membres</h1>
                <div class="table-responsive">
              <h4 class="animated zoomIn "style="color: #533017;animation-delay: 0.30s;">  <table class="table table-striped table-bordered" align="center">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>prenom</th>
                      <th>email</th>
                      <th>telephone</th>
                      <th>age</th>
                       <th>password</th>
                      

                    </tr>
                  </thead>
                  <tbody>
<?php

$db = Database::connect();
$recup =$db->prepare("SELECT * FROM utilisateurs WHERE id = ? ");
$recup->execute(array($_SESSION['use']));
$affiche = $recup->fetch();

?>
                            <tr>
                            <td ><?php echo $affiche['nom']?></td>
                            <td><?php echo $affiche['prenom']?></td>
                            <td><?php echo $affiche['email'] ?></td>
                            <td><?php echo $affiche['telephone']?></td>
                            <td><?php echo $affiche['naissance']?></td>
                            <td><?php echo $affiche['password']?></td>
                           
                            </tr>
                  </tbody>
                </table>
                </h4>
                </div>


<!--haehfehjfHEJGNRJGNJR-->
  <div>
        <h1 class="text-logo" style="margin: 0 auto;"> <span class="glyphicon glyphicon-object-align-left"></span>NaN quincaillerie<span class="glyphicon glyphicon-object-align-left"></span></h1>
          <nav>
      <ul class="nav nav-pills" style="padding: 20px;margin: 0 auto; font-size: 20px;">
        <li role="presentation"  ><a href="#1" data-toggle="tab">Les peintures</a></li>
        <li role="presentation"  ><a href="#2" data-toggle="tab">carrelage</a></li>
        <li role="presentation"  ><a href="#3" data-toggle="tab">materiels</a></li>
        <li role="presentation"  ><a href="#4" data-toggle="tab">W-S</a></li>
        <li role="presentation"  ><a href="#5" data-toggle="tab">ciment</a></li>
        <li role="presentation"  ><a href="#6" data-toggle="tab">vitrage</a></li>
      </ul>
        </nav>

          <div class="tab-content">
              <div class="tab-pane active" id="1">
                  <div class="row"> 
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background:#fcf9c2;">
                        <img src="image/a.jpg" alt="">
                        <div class="btn btn-primary">8000fcfa </div>
                        <div class="caption">
                          <h4>Menu peinture</h4>
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>

                      <div class="col-sm-6 col-md-3">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/b.jpg" alt="">
                        <div class="btn btn-primary">9000fcfa </div>
                        <div class="caption">
                          <h4>Menu peinture</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/c.jpg" alt="">
                        <div class="btn btn-primary">10000fcfa </div>
                        <div class="caption">
                          <h4>Menu peinture</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/d.jpg" alt="">
                        <div class="btn btn-primary">15000fcfa</div>
                        <div class="caption">
                          <h4>Menu peinture</h4>
                
                <a href="#" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/e.jpg" alt="">
                        <div class="btn btn-primary">12000fcfa</div>
                        <div class="caption">
                          <h4>Menu peinture</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/f.jpg" alt="">
                        <div class="btn btn-primary">8000fcfa </div>
                        <div class="caption">
                          <h4>Menu peinture</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>


                  </div>
              </div>
              <!--JHDQUHUHUHUHU-->

                  <div class="tab-pane " id="2">
                  <div class="row"> 
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/1.jpg" alt="">
                        <div class="btn btn-primary">8000fcfa </div>
                        <div class="caption">
                          <h4>Menu carrelage</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>

                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/2.jpg" alt="">
                        <div class="btn btn-primary">10000fcfa </div>
                        <div class="caption">
                          <h4>Menu carrelage</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/3.jpg" alt="">
                        <div class="btn btn-primary">10000fcfa </div>
                        <div class="caption">
                          <h4>Menu carrelage</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/4.jpg" alt="">
                        <div class="btn btn-primary">7000fcfa</div>
                        <div class="caption">
                          <h4>Menu carrelage</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/5.jpg" alt="">
                        <div class="btn btn-primary">6955fcfa </div>
                        <div class="caption">
                          <h4>Menu carrelage</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/6.jpg" alt="">
                        <div class="btn btn-primary">8546fcfa </div>
                        <div class="caption">
                          <h4>Menu carrelage</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>



                  </div>
              </div>
              <!--jbfjfjehefhe-->
              <div class="tab-pane " id="3">
                  <div class="row"> 
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/7.jpg" alt="">
                        <div class="btn btn-primary">4584fcfa </div>
                        <div class="caption">
                          <h4>Menu materiels</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>

                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/8.jpg" alt="">
                        <div class="btn btn-primary">8456fcfa </div>
                        <div class="caption">
                          <h4>Menu materiels</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/9.jpg" alt="">
                        <div class="btn btn-primary">7895fcfa </div>
                        <div class="caption">
                          <h4>Menu materiels</h4>
                
                <a href="client.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/10.jpg" alt="">
                        <div class="btn btn-primary">9854fcfa </div>
                        <div class="caption">
                          <h4>Menu materiels</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/11.jpg" alt="">
                        <div class="btn btn-primary">7845fcfa </div>
                        <div class="caption">
                          <h4>Menu materiels</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/12.jpg" alt="">
                        <div class="btn btn-primary">4589fcaf</div>
                        <div class="caption">
                          <h4>Menu materiel</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>


                  </div>
              </div>
              <!--jbfjfjehefhe-->
                          <div class="tab-pane " id="4">
                  <div class="row"> 
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/13.jpg" alt="">
                        <div class="btn btn-primary">14000fcfa </div>
                        <div class="caption">
                          <h4>Menu WS</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>

                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/14.jpg" alt="">
                        <div class="btn btn-primary">15000 </div>
                        <div class="caption">
                          <h4>Menu WS</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/15.jpg" alt="">
                        <div class="btn btn-primary">12000fcfa</div>
                        <div class="caption">
                          <h4>Menu WS</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/16.jpg" alt="">
                        <div class="btn btn-primary">18000fcfa</div>
                        <div class="caption">
                          <h4>Menu WS</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/17.jpg" alt="">
                        <div class="btn btn-primary">10000fcfa</div>
                        <div class="caption">
                          <h4>Menu WS</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail"  style="background: #fcf9c2;">
                        <img src="image/18.jpg" alt="">
                        <div class="btn btn-primary">8457fcfa </div>
                        <div class="caption">
                          <h4>Menu WS</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    



                  </div>
              </div>
                <!--jbfjfjehefhe-->
                                <div class="tab-pane " id="5">
                  <div class="row"> 
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background:#fcf9c2;">
                        <img src="image/19.jpg" alt="">
                        <div class="btn btn-primary">18000 </div>
                        <div class="caption">
                          <h4>Menu ciment</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>

                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/20.jpg" alt="">
                        <div class="btn btn-primary">4500fcfa </div>
                        <div class="caption">
                          <h4>Menu ciment</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/21.jpg" alt="">
                        <div class="btn btn-primary">9600fcfa </div>
                        <div class="caption">
                          <h4>Menu ciment</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/22.jpg" alt="">
                        <div class="btn btn-primary">4584fcfa </div>
                        <div class="caption">
                          <h4>Menu ciment</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background:#fcf9c2;">
                        <img src="image/23.jpg" alt="">
                        <div class="btn btn-primary">15000fcfa </div>
                        <div class="caption">
                          <h4>Menu ciment</h4>
                
                <a href="achat.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/24.jpg" alt="">
                        <div class="btn btn-primary">9000fcfa</div>
                        <div class="caption">
                          <h4>Menu ciment</h4>
                
                <a href="achat.php" class="btn btn-order" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>


                  </div>
              </div>

              <!--jbfjfjehefhe-->
                                <div class="tab-pane " id="6">
                  <div class="row"> 
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/25.jpg" alt="">
                        <div class="btn btn-primary">47000fcfa</div>
                        <div class="caption">
                          <h4>Menu vitrage</h4>
                
                <a href="client.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>

                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/26.jpg" alt="">
                        <div class="btn btn-primary">12000fcfa</div>
                        <div class="caption">
                          <h4>Menu vitrage</h4>
                
                <a href="client.php" class="btn btn-order" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/27.jpg" alt="">
                        <div class="btn btn-primary">9545fcfa</div>
                        <div class="caption">
                          <h4>Menu vitrage</h4>
                
                <a href="client.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/28.jpg" alt="">
                        <div class="btn btn-primary">7845fcfa </div>
                        <div class="caption">
                          <h4>Menu vitrage</h4>
                
                <a href="client.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/29.jpg" alt="">
                        <div class="btn btn-primary">7845fcfa</div>
                        <div class="caption">
                          <h4>Menu classic</h4>
                
                <a href="client.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>
                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail" style="background: #fcf9c2;">
                        <img src="image/30.jpg" alt="">
                        <div class="btn btn-primary">18000fcfa </div>
                        <div class="caption">
                          <h4>Menu vitrage</h4>
                
                <a href="client.php" class="btn btn-danger" role="button"><sapn class="glyphicon glyphicon-shopping-cart"> </sapn>Commander </a>
                        </div>
                      </div>
                    </div>


                  </div>
              </div>


          </div>
    </div>











































                <!--hbjejfefjjefnenfjefbjngjnrjnjzrgb-->
                <!--hbjejfefjjefnenfjefbjngjnrjnjzrgb-->
                <!--hbjejfefjjefnenfjefbjngjnrjnjzrgb-->
                <div class="col-md-4">
                  <h3 class="animated bounceInLeft" style="color: #533017;animation-delay: 2s;"><a href="traitement/deconnection.php" class="btn btn-danger btn-lg">DECONNECTION</a></h3>
                  </div>
    
                 <div class="col-md-4">
                 <h3 class="animated bounceInLeft" style="color: #533017;animation-delay: 7s;"> <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-backdrop="false" data-target="#monModal">promotions</a></h3>
               </div>
                   <!--modal-->
                   <div class="modal fade" id="monModal">
                     <div class="modal-dialog modal-xs">
                       <div class="modal-content">
                        <div class="modal-header" style="background: gray;">
                          <button class="btn btn-warning btns-xs" type="button" class="close" data-dismiss="modal" style="color: red ; font-size: 20px;">x</button> 
                          <h1 class="modal-title">promotion</h1>
                         </div>
                         <div class="modal-body" style="background: transparent;"><p>hello! cher client aucune promotion disponinle actuelement</p>
                         </div>
                          <div class="modal-footer"> <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
                            <a href="connecter.php" class="btn btn-danger">ok</a>
                          </div>
                       </div>

                     </div>
                   </div>
                  <!--modal-->
                
              </div>
            </div>
        </div>
    </body>
</html>
<?php  }?>