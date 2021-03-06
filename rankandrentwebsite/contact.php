<?php

if ($_POST["submit"]) {

      
      
     if (!$_POST['name']) {

       $error="<br />Please enter your name";

     }
      
     if (!$_POST['email']) {

       $error.="<br />Please enter your email address";

     }
     
      
      if (!$_POST['phone']) {
     
      $error.="<br /> Please enter your phone number";
     
     }

      if (!$_POST['message']) {

       $error.="<br />Please enter a message";

     }
      
     if ($_POST['email']!="" AND !filter_var($_POST['email'],
FILTER_VALIDATE_EMAIL)) {
      
     $error.="<br />Please enter a valid email address";

     }
     
      
     if ($error) {

 $result='<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>'.$error.'</div>';

     } else {

 /* THE EMAIL WHERE YOU WANT TO RECIEVE THE CONTACT MESSAGES */
  if (mail("info@yourdomainname.com", "Contact Message from Deck Installation", 


 
"Name: ".$_POST['name']."
Email: ".$_POST['email']."
Phone: ".$_POST['phone']." 
Message: ".$_POST['message'])) {
$result='<div class="alert alert-success"> <strong> Thank
you!</strong> We\'ll get back to you shortly.</div>';
} else {
$result='<div class="alert alert-danger">Sorry, there was
an error sending your message. Please try again later.</div>';
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/> 
    <!-- Meta Description -->

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Contact Deck Installation</title> <!-- Your Page Title -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

     <!--CSS STYLESHEETS<-->
    <link rel="stylesheet" type="text/css" href="css/navbar.css" />
    <link rel="stylesheet" type="text/css" href="css/get-quote-style.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!--GOOGLE FONT  STYLE<-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
    <!--end-fonts-->
  
    <link rel="icon" href="images/deck-installation-favicon.jpg">
    <!--Your Website Favicon-->
   
  </head>

  <body>

<div class="container-fluid" id="banner">
  
        <a href="https://yourwebsitename.com"> <img src="images/deck-installers-logo.png" align="center" class="img-responsive logo center-block" alt="deck-installers-logo"> </a>
        <!-- YOUR WEBSITE LOGO-->
        

        <h2 align="center" class="tagline center-block">Wooden Decking Prices</h2>

    <!--City Dropdown-->
  <div class="dropdown" id="city-selection" >
    <button class="btn btn-default dropdown-toggle dropdown-button" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

    <p>CHOOSE CITY
        <span class="caret"></span></p>
    </button>
    <ul class="dropdown-menu">
      <li><a href="https://yourwebsitename.com/">CITY 1</a></li>

        <li role="separator" class="divider"></li>

      <li><a href="https://yourwebsitename.com/">CITY 2</a></li>
        
        <li role="separator" class="divider"></li>

      <li><a href="https://yourwebsitename.com/">CITY 3</a></li>
        
        <li role="separator" class="divider"></li>

      <li><a href="https://yourwebsitename.com/">CITY 4</a></li>
        
        <li role="separator" class="divider"></li>

      <li><a href="https://yourwebsitename.com/">CITY 5</a></li>
    
        <li role="separator" class="divider"></li>

      <li><a href="https://yourwebsitename.com/">CITY 6</a></li>

    </ul>

  </div>

</div>
    
  
  
  <nav class="navbar navbar-default navbar-static-top" role="navigation" id="topnavbar">
  
      
  
           <div class="navbar-header">
      
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      
                      <span class="sr-only">Toggle navigation </span>
          
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
          
                 </button>
      
          </div>

    
          <div class="collapse navbar-collapse">
      
                   <ul align="center" class="nav navbar-nav" >
          
                      <li> <a href="https://yourwebsitename.com/composite-decking.php"><span class="center-underline">COMPOSITE DECKING</span></a></li>
                      <li> <a href="https://yourwebsitename.com/hardwood-decking.php"><span class="center-underline">HARDWOOD DECKING</span></a></li>
                      <li> <a href="https://yourwebsitename.com/blog.html"><span class="center-underline">BLOG</span></a></li>
                      <li> <a class="quote" href="https://yourwebsitename.com/get-a-quote.php"><span style="color:#774220">GET A QUOTE</span></a></li>
              
              
                  </ul>

           </div><!--end navbar-collapse-->

  </nav><!--end nav-->



  <div class="contact-banner">

      <h3>CONTACT US

          <div class="row">

              <div class="col-md-6 col-md-offset-3">

            
                              <!--Form Success Message will display here-->
                      <p align="center" id="result"> <strong> <?php echo $result; ?> </strong></p>

                </div>

          </div> <!--- /Form success/failure message -->

      </h3>

  </div>  <!--- /.contact-banner-->


  <br />


<div class="get-quote-form">

     <div class="row">

            <p class="message-text" align="center">COMPLETE THIS SHORT FORM BELOW <br />AND WE WILL CONTACT YOU AS SOON AS POSSIBLE</p>

        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> <br /><br />

              <form method="post"><br /><br /> 

                      <div class="form-group center-block">

                            <div class="icon-addon addon-lg">

                                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $_POST['name']; ?>" />

                                    <label for="name" class="glyphicon glyphicon glyphicon-user" title="name"></label>

                              </div>

                        </div>



                        <div class="form-group center-block">

                            <div class="icon-addon addon-lg">

                                  <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_POST['email']; ?>" />

                                      <label for="email" class="glyphicon glyphicon-envelope" rel="tooltip" title="email"></label>

                            </div>

                      </div>



                      <div align="center" class="form-group center-block">
                
                            <div class="icon-addon addon-lg">
                        
                                <input type="tel" name="phone" class="form-control" placeholder="Your Phone" value="<?php echo $_POST['phone']; ?>" />
                        
                                    <label for="email" class="glyphicon glyphicon-earphone" rel="tooltip" title="email"></label>
                
                            </div>

                      </div>

           

                      <div align="center" class="form-group center-block mess">

                               <textarea class="form-control" id="message" placeholder="Your Message" name="message">

                                   <?php echo $_POST['message']; ?> </textarea><br /> 

                      </div>

                              <p align="center"> <input type="submit" name="submit" class="btn btn-default btn-lg quote-submit center-block con-btn" value="CONTACT US" ></input/> </p><br />

                </form><br /> <br />

            </div> <!--- /.col-md-->

            <br />

        </div>  <!--- /.row-->

    </div> <!--- /.get-quote-form-->



<div class="email-us">

    <div class="row">
 
      <div class="col-md-6 col-md-offset-3">

          <p align="center">Or just email us directly at <span class="email-add" style="color: #ed3641;"> info[at]yourwebsitename.com</span><br /> and we will be pleased to help you!</p>

      </div> <!--- /.email-us-->

    </div> <!--- /.row-->

</div><!--end of email-us-->



<footer>

    <div align="center" id="footer">

      <a href="https://yourwebsitename.com/composite-decking.php">COMPOSITE DECKING</a> 

      <a href="https://yourwebsitename.com/hardwood-decking.php">HARDWOOD DECKING</a> <a href="https://yourwebsitename.com/blog.html">BLOG</a> 

      <a href="https://yourwebsitename.com/get-a-quote.php">GET A QUOTE</a>

    </div><!--end of footer-->


    <div align="center" class="footerlinks">

      <a href="https://yourwebsitename.com/about.html">About</a> 

      <a href="https://yourwebsitename.com/privacy-policy.html" rel="nofollow">Privacy Policy</a> 

      <a href="https://yourwebsitename.com/terms-and-conditions.html" rel="nofollow">Terms &amp; Conditions</a>

      <a href="https://yourwebsitename.com/contact.php" rel="nofollow">Contact</a>

     
      <p align="center" class="text-muted copyright">&copy; yourwebsitename.com</p>

    </div><!--end footerlinks-->

  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
  </script> 
  <!-- Include all compiled plugins (below), or include individual files as needed -->

   
   <!--FIXED NAVBAR SCRIPT-->
  <script src="js/bootstrap.min.js">
  </script> 
  <script>
  $('#topnavbar').affix({
     offset: {
         top: $('#banner').height()
     }   
  }); 
  </script>


  </body>

</html>