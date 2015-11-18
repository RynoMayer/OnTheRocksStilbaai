<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">                 
        
        <title>Menu - On The Rocks Still Bay</title>
        
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/business-casual.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target=".scrollspy">
        <div class="brand">On The Rocks Steakhouse & Seafood</div>
        <div class="address-bar">52 Osler Street | Stilbaai | (028) 754-2367</div>
        
    <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="index.php">On The Rocks Still Bay</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="newMenu.php">Menu</a>
                        </li>
                        <li>
                            <a href="gallery.php">Gallery</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
      <!-- /.container -->
        
        <!-- Side-navbar -->
            <div id="sidenav" class="col-md-3 scrollspy">
                <ul id="nav" class="nav hidden-xs hidden-sm affix-top" data-spy="affix">
                    <li >
                    <a href="#Starters">Starters</a>
                  </li>
                  <li >
                    <a href="#Mains">Mains</a>
                    <ul class="nav">
                      <li >
                        <a href="#Burgers">
                          <span class="fa fa-angle-double-right"></span>Burgers
                        </a>
                      </li>
                      <li >
                        <a href="#Vegetarian">
                          <span class="fa fa-angle-double-right"></span>Vegetarian
                        </a>
                      </li>
                      <li >
                        <a href="#Kids">
                          <span class="fa fa-angle-double-right"></span>Kids
                        </a>
                      </li>
                      <li >
                        <a href="#Baskets">
                          <span class="fa fa-angle-double-right"></span>Baskets
                        </a>
                      </li>
                      <li >
                        <a href="#Seafood">
                          <span class="fa fa-angle-double-right"></span>Seafood
                        </a>
                      </li>
                      <li >
                        <a href="#Grill">
                          <span class="fa fa-angle-double-right"></span>From The Grill
                        </a>
                      </li>
                      <li >
                        <a href="#Chicken">
                          <span class="fa fa-angle-double-right"></span>Chicken
                        </a>
                      </li>
                      <li >
                        <a href="#Pizza">
                          <span class="fa fa-angle-double-right"></span>Pizza
                        </a>
                      </li>
                    </ul><!--end of sub navigation-->
                  </li>    
                 <li >
                    <a href="#Desserts">Desserts</a>
                  </li>
                  <li >
                    <a href="#Extra">Extra's</a>
                  </li>
                  <li >
                    <a href="#Sauces">Sauces</a>
                  </li>
                  <li >
                    <a href="#Beverages">Beverages</a>
                  </li>
                </ul><!-- end of main navigation -->
             </div>
        
        <?php
         include 'menuClass.php';
         
         $menu = new menuClass();
         
         $menu->displayMainMenuStart();
         $menu->displayStartersBegin();
             //$menu->menuItem('6 Crumb Butterfly Prawns', '54.90', 'img/placeholdMenuItem.png');
             
         $fileArray = $menu->readMyFile();
         
         $starterArray = $menu->SplitFile($fileArray,"STR");
         foreach ($starterArray as $key => $value) {
            $menu->menuItem($value[0], $value[1], $value[2]);
         }
   
             
            // $menu->menuItemFile('MAINS', 'img/placeholdMenuItem.png');
          $menu->displayStartersEnd();
         //Mains
          $menu->displayMains();
         echo '<h2>Popular Mains<br></h2>';
         $mainsArray = $menu->SplitFile($fileArray,"MAN");   
         foreach ($mainsArray as $key => $value) {
            $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
         }
         echo '</div>';
         //Burgers
         $menu->menuItemHeader('Burgers', 'Burgers');
         $burgerArray = $menu->SplitFile($fileArray,"BRG");   
         foreach ($burgerArray as $key => $value) {
            $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
         }    
         echo '</div>';
         //Vegetarian
          $menu->menuItemHeader('Vegetarian', 'Vegetarian');
          $vegArray = $menu->SplitFile($fileArray,"VEG");   
          foreach ($vegArray as $key => $value) {
            $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
          }   
         echo '</div>';
         //Kids
          $menu->menuItemHeader('Kids', 'Kids');
            $kidArray = $menu->SplitFile($fileArray,"KID");   
            foreach ($kidArray as $key => $value) {
              $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
            } 
         echo '</div>';
         //Baskets
          $menu->menuItemHeader('Baskets', 'Baskets');
          $basketArray = $menu->SplitFile($fileArray,"BSK");   
            foreach ($basketArray as $key => $value) {
              $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
            }
         echo '</div>';
         //Seafood
          $menu->menuItemHeader('Seafood', 'Seafood');
          $seafoodArray = $menu->SplitFile($fileArray,"SEA");   
            foreach ($seafoodArray as $key => $value) {
              $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
            }
         echo '</div>';
         //Grill
          $menu->menuItemHeader('Grill', 'From The Grill');
          $grillArray = $menu->SplitFile($fileArray,"GRL");   
            foreach ($grillArray as $key => $value) {
              $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
            }
         echo '</div>';
         //Chicken
          $menu->menuItemHeader('Chicken', 'Chicken');
          $chicArray = $menu->SplitFile($fileArray,"CKN");   
            foreach ($chicArray as $key => $value) {
              $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
            }
         echo '</div>';
         //Pizza
          $menu->menuItemHeader('Pizza', 'Pizza');
          $pizzaArray = $menu->SplitFile($fileArray,"PZA");   
            foreach ($pizzaArray as $key => $value) {
              $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
            }
         echo '</div>';
         //Desserts
          $menu->menuItemHeader('Desserts', 'Desserts');
          $dessertArray = $menu->SplitFile($fileArray,"DST");   
            foreach ($dessertArray as $key => $value) {
              $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
            }
         echo '</div>';
         //Extra
          $menu->menuItemHeader('Extra', "Extra's");
          $extraArray = $menu->SplitFile($fileArray,"EXA");   
            foreach ($extraArray as $key => $value) {
              $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
            }
         echo '</div>';
          //Sauces
          $menu->menuItemHeader('Sauces', 'Sauces');
          $saucesArray = $menu->SplitFile($fileArray,"SCS");   
            foreach ($saucesArray as $key => $value) {
              $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
            }
         echo '</div>';
          //Beverages
          $menu->menuItemHeader('Beverages', 'Beverages');
          $bevArray = $menu->SplitFile($fileArray,"BEV");   
            foreach ($bevArray as $key => $value) {
              $menu->menuItem($value[0], $value[1], 'img/placeholdMenuItem.png');
            }
         echo '</div>'
            . ' </div>
            </div>
        </div>';
         
        ?>
        
       
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright &copy; Ryno Mayer 2015</p>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            $('#nav').affix({
            offset: {
              top: $('#nav').offset().top,
              bottom: $('footer').outerHeight(true) + $('.application').outerHeight(true) + 40
                }
            });
        </script>
        
       
    </body>
</html>
