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

    <title>Contact - On The Rocks Still bay</title>

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

<body>

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
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>On The Rocks</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                   <!-- <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6587.150350740182!2d21.415754064539712!3d-34.361288568738274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dd6c0fb1f79485f%3A0x9f34d807443ae575!2s52+Osler+St%2C+Still+Bay%2C+6674!5e0!3m2!1sen!2sza!4v1435067709817" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>
                        For bookings and enquiries:
                    </p>
                    <p>Phone:
                        <strong>(028) 754-2367</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">jaco@otrs.co.za</a></strong>
                    </p>
                    <p>Address:
                        <strong>52 Osler Street 
                            <br>Stilbaai, 6674</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>Please send us a message if you have any complaints, concerns, or comments.</p>
                    <form  action="#" id ="form" method="post" name="form" role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name (optional)</label>
                                <input name="vname" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address (optional)</label>
                                <input name="vemail" type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number (optional)</label>
                                <input name="cell" type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea name="msg" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input id="send" name="submit" type="hidden" value="send feedback">
                                <button id="send" name="submit" type="submit" value="send feedback" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

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
        <?php
        if(isset($_POST['submit'])){
            if($_POST['vname']==""||$_POST['vemail']==""||$_POST['sub']==""||$_POST['msg']==""||$_POST['cell']){
                echo "fill all fields";
            }
            else{
                //check if the sender's email input field is filled out
                $email=$_POST['vemail'];
                //sanitise email address
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                //validate email address
                $email=  filter_var($email,FILTER_VALIDATE_EMAIL);
                if(!$email){
                    echo "invalid sender email";
                }
                else{
                    $to = "rnmayer93@gmail.com";
                    $subject =$_POST['sub'];
                    $msg=$_POST['msg'];
                    $cell=$_POST['cell'];
                    $name=$_POST['vname'];
                    if($name==""){
                        $headers= 'From: Anonymous at'.$cell."/r/n";
                    }else
                        $headers= 'From: '.$name." ".$cell."/r/n";
                    
                    //wrap message lines
                    $msg=  wordwrap($msg, 70);
                    print $msg." ".$name;
                    echo "sending message";
                    
                    $retval=mail($to,$subject,$msg,$headers);
                    if($retval == true){
                        echo "Message sent";
                    }
                    else{
                        echo "message not sent";
                    }   
                }
            }
        }
       
        // put your code here
        ?>
    </body>
</html>
