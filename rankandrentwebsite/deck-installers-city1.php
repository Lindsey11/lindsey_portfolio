
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

       if (!$_POST['city-name']) {
     
      $error.="<br /> Please select your city";
     
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
  if (mail("info@yourdomainname.com", "Message from Deck Installation City1",


"Name: ".$_POST['name']."
Email: ".$_POST['email']."
Phone: ".$_POST['phone']." 
City: ".$_POST['city-name'])) {
$result='<div class="alert alert-success"> <strong> Thank
you!</strong> We\'ll get back to you shortly.</div>';
} else {
$result='<div class="alert alert-danger">Sorry, there was
an error sending your message. Please try again later.</div>';
}
}
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="description" content=""/> 
    <!-- Meta Description -->

  
      <title>Deck Installation in City 'x'</title> <!-- Your Page Title -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


     <!--CSS STYLESHEETS<-->
    <link rel="stylesheet" type="text/css" href="css/navbar.css" />
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

    <p>CHOOSE CITY<span class="caret"></span></p></button>

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

  </div>  <!--- /#city-selection-->

</div>  <!--- /#banner-->  
    
  
  
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


<div class="display-banner">

  <h1 align="center">Deck Installation<br />
    <span style="font-size:40px;letter-spacing: 1px">in CITY 1</span></h1>

    <div class="quote-main">

        <a href="https://yourwebsitename.com/get-a-quote.php"><button type="submit" id="free-quote" class="btn btn-lg center-block">GET YOUR FREE QUOTE</button></a><br />

          <div class="row">

              <div class="col-md-6 col-md-offset-3">

            
                              <!--Form Success Message will display here-->
                      <p align="center" id="result"> <strong> <?php echo $result; ?> </strong></p>

                </div>

          </div> <!--- /Form success/failure message -->

    </div><!--end quote-main-->

    </div> <!--end of intro-div--> <br />

    <!--FORM SUCCESS MESSAGE-->
  
</div> <!--display-banner--> 


<div class="container intro-text">
  
  <div class="row">
    
      <div class="col-md-8 col-md-offset-2">

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tortor sapien, commodo euismod mollis in, aliquet iaculis libero. Sed volutpat dapibus nunc et ultrices. Vestibulum at porttitor augue.</p>

        <p>Pellentesque vulputate sapien a sem imperdiet fringilla. Phasellus eget eros pulvinar, sagittis elit nec, malesuada enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tortor sapien, commodo euismod mollis in, aliquet iaculis libero. Sed volutpat dapibus nunc et ultrices. Vestibulum at porttitor augue. Cras sit amet ultricies eros, vel blandit libero. Suspendisse vitae velit magna. Praesent semper odio magna.</p>

      </div>

  </div><!--row-->

</div><!--end of intro-text-->



      <!--GET A QUOTE FORM-->
  <div class="get-quote-form">

    <div class="row">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">

        <form method="post">
          <p align="center">SEE HOW MUCH<br>
          <span style="font-weight: bold; font-size: 50px; position:relative; top:5px; line-height: 50px;">You Can Save</span><br>
          ON YOUR STUNNING<br>
          NEW DECK</p><br>
          <br>

          <div class="form-group center-block">
            <div class="icon-addon addon-lg">
              <input class="form-control" name="name" placeholder="Name" type="text" value="<?php echo $_POST['name']; ?>"> 
              <label class="glyphicon glyphicon glyphicon-user" for="name" title="name"></label>
            </div>
          </div>

          <div class="form-group center-block">
            <div class="icon-addon addon-lg">
              <input class="form-control" name="email" placeholder="Email" type="email" value="<?php echo $_POST['email']; ?>"> 
              <label class="glyphicon glyphicon-envelope" for="email" rel="tooltip" title="email"></label>
            </div>
          </div>

          <div class="form-group center-block">
            <div class="icon-addon addon-lg">
              <input class="form-control" name="phone" placeholder="Phone" type="tel" value="<?php echo $_POST['phone']; ?>"> 
              <label class="glyphicon glyphicon-earphone" for="email" rel="tooltip" title="email"></label>
            </div>
          </div>
          
          <div class="form-group center-block">
          <select align="center" name="city-name" class="form-control citynames center-block" value="<?php echo $_POST['city-name']; ?>" >

          <option disabled selected><strong>Choose your city</strong></option>

          <option align="center">CITY 1</option>
          <option>CITY 2</option>
          <option>CITY 3</option>
          <option>CITY 4</option>
          <option>CITY 5</option>
          <option>CITY 6</option>

          </select> 

          </div>

          <p align="center"> <input type="submit" name="submit" class="btn btn-default btn-lg quote-submit center-block" value="GET A QUOTE" ></input/> </p>

          </form>

        </div>

    </div><!--end row-->

  </div><!--end get-quote-form-->


<div class="deck-installation">

<div class="row why-deck-installation" align="center"><!--row 1-->

<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 padding-0 side-img1">


</div>


<div class="col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 patterned">

<p align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tortor sapien, commodo euismod mollis in, aliquet iaculis libero. Sed volutpat dapibus nunc et ultrices. Vestibulum at porttitor augue. <br /> <br />Pellentesque vulputate sapien a sem imperdiet fringilla. Phasellus eget eros pulvinar, sagittis elit nec, malesuada enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

</div>




</div><!--end row1-->


<p align="center" class="durable-decks">Transform your Home with a Stunning Deck!</p>


<div class="row why-deck-installation"><!--row 2-->

<div class="col-md-6 col-sm-6 padding-0 side-img2">


       
        </div>


<div class="col-md-6 col-sm-6 patterned padding-0">

<p align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tortor sapien, commodo euismod mollis in, aliquet iaculis libero. Sed volutpat dapibus nunc et ultrices. Vestibulum at porttitor augue. <br /> <br />Pellentesque vulputate sapien a sem imperdiet fringilla. Phasellus eget eros pulvinar, sagittis elit nec, malesuada enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

</div>


</div><!--row1-->

</div><!--end of deck-installation-->

<br /> <br /><br /> <br /><br /> <br /> <br />



<div class="container">

  <div class="row">

    <div class="col-md-2"></div>

      <div class="col-md-8">

          <p align="center"><img src="images/beautiful-wooden-deck.jpg" class="img-responsive" alt="deck-installation-ocean-view"></p>

      </div>

      <div class="col-md-2"></div>

  </div><!--- /.row--> 


  <br /><br /><br />


  <div class="city-description">

    <div class="row"> <br />

      <div class="col-md-8 col-md-offset-2" align="center">

            <p align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tortor sapien, commodo euismod mollis in, aliquet iaculis libero. Sed volutpat dapibus nunc et ultrices. Vestibulum at porttitor augue.</p><br /> 
            <p>Pellentesque vulputate sapien a sem imperdiet fringilla. Phasellus eget eros pulvinar, sagittis elit nec, malesuada enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p><br /> 
            <p>Curabitur varius, leo rhoncus porttitor auctor, dolor nisi faucibus leo, a bibendum odio erat quis dolor. Cras eget commodo dui, eget sollicitudin sapien. Quisque a justo nec dui interdum gravida. Suspendisse id consectetur elit. Donec ligula urna, pulvinar vel quam volutpat, sodales consectetur tellus.</p>

      </div>  <!--- /.col-md-->

    </div>  <!--- /.row-->

  </div>  <!--- /.city-description-->

</div>  <!--- /.container-->

<br /> <br /> <br /><br /> <br /> <br />


<a href="https://yourwebsitename.com/get-a-quote.php"><button type="submit" id="get-quote" class="btn btn-lg center-block">GET A QUOTE</button></a>



<br /> <br /> <br /> <br /> <br /> <br />

<div class="social-links" align="center">

<p>CONNECT WITH US</p>

<a href="https://www.instagram.com/YOUR-INSTGRAM-ACCOUNT" target="_blank"><svg style="width:30px;height:30px" viewBox="0 0 24 24">
    <path fill="#774220" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
</svg></a>

<a href="https://www.facebook.com/" target="_blank"><svg style="width:30px;height:30px" viewBox="0 0 24 24"><path fill="#774220" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" />
</svg></a>
 
 <br /> <br />  

</div> <br /> 




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