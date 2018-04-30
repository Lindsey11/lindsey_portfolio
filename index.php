<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Lindsey Drew</title>
    <link href='//fonts.googleapis.com/css?family=Poppins:400,600,500,300,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="media.css">
    <link rel="stylesheet" href="css/lytebox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" media="screen" />
    <?php
//error_reporting(0);
$result = "";
$error = "";

if (isset($_POST["submit"])) {
      
     if (empty($_POST['name'])) {
       $error="<br />Please enter your name";

     }

      
     if (empty($_POST['email'])) {
       $error.="<br />Please enter your email address";

     }
    
     
     if (empty($_POST['subject'])) {
      $error.="<br /> Please enter your phone number";

     }


     if (empty($_POST['message'])) {
      $error.="<br />Please enter a message";

     }
    

     if ($_POST['email']!="" AND !filter_var($_POST['email'],
      FILTER_VALIDATE_EMAIL)) {
      $error.="<br />Please enter a valid email address";

     }




         
     if (!empty($error)) {

         $result = '<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>' . $error . '</div>';

     }
     else {

         $headers = "From: info@revolutionweb.co.za" . "\r\n";
         $mailed  = mail( "info@revolutionweb.co.za", "Contact Message",

             "Name: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\nPhone: " . $_POST['phone'] . "\nMessage: " . $_POST['message'], $headers );

         if ( $mailed ) {

             $result = '<div class="alert alert-success" align="center"> <strong> Thanks for contacting us</strong> - We\'ll get back to you shortly.</div>';
         } else {
             $error = '<div class="alert alert-danger" align="center">Sorry, there was
                an error sending your message. Please try again later.</div>';

         }

     }
}
?>
</head>

<body id="main_loader" data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="150">
    <div id="home" class="site-main">
        <header class="main-header">
            <div class="container">
                <div class="row">
                    <div class="logo col-sm-2"><img src="images/logo.png" alt="logo">
                        <a href="index.html"></a>
                    </div>
                    <div class="header-right text-right col-sm-8 pull-right">
                        <div class="main-menu">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#home">Home</a></li>
                                            <li><a href="#about">About</a></li>
                                            <li><a href="#resume">Resume</a></li>
                                            <li><a href="#portfolio">Portfolio</a></li>
                                            
                                           
                                            
                                         <li><a href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="main">
    
        <!--banner-->
        <section class="banner">
            <div class="container .rel-position">
                <div class="banner-container">
                    <div class="row">
                        <div class="col-md-4 pr">
                            <img class="banner-img" src="images/main.png" alt="image">
                        </div>
                        <div class="details pull-right col-md-7 col-sm-12 mar-right-mid col-xs-12 animated wow fadeInUp" data-wow-delay="0.5s">
                            <h1>I’M LINDSEY DREW</h1>
                            <span class="banner-subhead">Software Engineer and web developer</span>
                            <p class="mar-bottom-mid">I am a bright, talented and ambitious developer with a strong technical background who possesses self-discipline and the ability to work with the minimum of supervision</p>
                            <div class="button">
                                <div class="mountain-meadow-button mar-right-big"><a href="#contact">HIRE ME</a></div>
                                <div class="white-button"><a href="#contact">DOWNLOAD RESUME</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner-->

        <!--about-->
        <section id="about" class="about animated wow fadeInUp" data-wow-delay="0.5s">
            <div class="container">
                <h2>ABOUT ME</h2>
                <span class="sub-title mar-bottom-bigger">Know more about me as a person</span>
                <div class="row">
                    <div class="about-left col-sm-3 col-xs-12">
                        <div class="abtImg"><img src="images/propic.png" alt="img"></div>
                    </div>
                    <div class="about-right col-md-7 col-sm-8 col-xs-12">
                        <p>Hello! I’m Lindsey Drew, As an ambitious and hard-working individual, I am often recognized for my commitment and ability by highly respected companies. </p>
                        <p> I handle multiple tasks on a daily basis competently, working well under the pressure. Frequent acknowledgment of my contribution from senior management illustrates my potential value to your company. I would welcome the opportunity to discuss my suitability in more detail.</p>
                        <div class="about-social-icon">
                            <strong class="social-head">FOLLOW ME:</strong>
                            <div class="icon">
                                <a href="https://www.facebook.com/lindsey.drew.140"><span class="icon-facebook fIcon"></span></a>
                                <a href="https://www.linkedin.com/in/lindsey-drew-870459137/"><span class="icon-linkedin fIcon"></span></a>
                                <a href="https://plus.google.com/u/0/105019371170043796012"><span class="icon-google fIcon"></span></a>
                                <a href="#"><span class="icon-skype fIcon"></span></a>
                                <a href="#"><span class="icon-dribbble fIcon"></span></a>
                                <a href="#"><span class="icon-pintrest fIcon"></span></a>
                                <a href="#"><span class="icon-behance fIcon"></span></a>
                            </div>
                        </div>
                        <div class="divider">
                            <i></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about-->

        <!--services-->
        <section id="resume" class="services wow animated fadeInUp" data-wow-delay="0.5s">
            <div class="container">
                <h2>MY SERVICES</h2>
                <span class="sub-title mar-bottom-bigger">See how can I help you</span>
                <div class="row">
                    <div class="col-md-4 col-sm-12 services-block">
                        <div class="cont">
                            <i><span class="icon-code fIcon"></span></i>
                            <h3>CLEAN CODE</h3>
                            <p class="nomargin">With prompt service, modern code and professional designs, I am here to maximize your success through quality.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 services-block">
                        <div class="cont">
                            <i><span class="icon-love fIcon"></span></i>
                            <h3>DESIGN</h3>
                            <p class="nomargin">I provide a wide variety of design skills and resources for logos, business cards, brochures, email templates, posters, letterheads and any other design concept.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 services-block">
                        <div class="cont">
                            <i><span class="icon-support fIcon"></span></i>
                            <h3>SUPPORT</h3>
                            <p class="nomargin">Contributing to both the requirements and technical aspects of any basic hardware issues. Support and providing solutions, also assisting in the resolution of software support issues.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--services-->

        <!--expertise-->
        <section id="resume-expert" class="expertise wow animated fadeInUp" data-wow-delay="0.5s">
            <div class="container">
                <h2>AREAS OF EXPERTISE</h2>

               <!-- <span class="sub-title mar-bottom-bigger">My specialization revolves around these 3 areas</span> -->
                <div class="row">
                    <div class="col-sm-5">
                        <label class="progress-head">HTML5</label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-sm-offset-2">
                        <label class="progress-head">CSS(Bootstrap and SASS)</label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <label class="progress-head">Javascript(Angualr.js)</label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5 col-sm-offset-2">
                        <label class="progress-head">PHP(Symfony,Laravel and codignitor frameworks)</label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:58%">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <label class="progress-head">RUBY ON RAILS</label>
                        <div class="progress nomargin">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:55%">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-sm-offset-2">
                        <label class="progress-head">SQL(mysql)</label>
                        <div class="progress nomargin">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--expertise-->

        <!--education-->
        <section class="education wow animated fadeInUp" data-wow-delay="0.5s">
            <div class="container">
                <h2>MY EDUCATION</h2>
                <span class="sub-title mar-bottom-bigger">Where I went to study</span>
                <div class="row pr">
                    <i class="education-line"></i>
                    <div class="col-sm-12 col-xs-12 pull-right box mar-bottom-mid edu">
                        <div class="box-cont edu-bor">
                            <h3 class="nomargin">Advanced Diploma in Information Technology(Damelin)</h3>
                            <h4>Feb 2014 to Nov 2017</h4>
                            <p class="nomargin">The Course was centernd arround programming that coverd variours delopment methods and programing languages.</p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12  pull-right box mar-bottom-mid edu">
                        <div class="box-cont edu-bor">
                            <h3 class="nomargin">Diploma in Accounting(Damelin)</h3>
                            <h4>Feb 2014 to Nov 2016</h4>
                            <p class="nomargin">Basic accounting needed to run a buiness and control personal finances</p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12  pull-right box edu">
                        <div class="box-cont edu-bor">
                            <h3 class="nomargin">CompTia A+ </h3>
                            <h4>Feb 2013 to Nov 2013</h4>
                            <p class="nomargin">Advanced hardware and Networking.Importanat skills needed to fix Hardware and software issues and install and setup a network</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--education-->

        <!--experience-->
        <section class="experience wow animated fadeInUp" data-wow-delay="0.5s">
            <div class="container">
                <h2>MY EXPERIENCE</h2>
                <span class="sub-title mar-bottom-bigger">Get a peek inside my work profile.Contact me dircetly for the full details and my reffernces</span>
                <div class="row pr">
                    <i class="experience-line"></i>
                    <div class="col-sm-11 col-xs-12  box mar-bottom-mid pull-right edu experience-box">
                        <div class="box-cont edu-bor">
                            <div class="date">February 2017 (6 Month practical Internship)</div>
                            <h3 class="nomargin">IT support for all staff and Software devlopment for company growth(C# and asp.net)</h3>
                            <h4>ShopFit National<span class="text-primary">(Port Elizabeth, South Africa)</span></h4>
                            <p class="nomargin">Contributing to both the requirements and technical aspects of any basic hard ware issues. Support & providing solutions, also assisting in the resolution of software support issues</br>
								Duties:</br>  
										•	Working on the incorporation of smart technology & the use of portable devices.</br> 
										•	Implementation of new services, applications and demonstrating them. </br>
										•	Identifying and analyse performance bottlenecks and rectifying them. </br>
										•	Technical design and documentation of new hardware additions. </br>
										•	Involvement in analysis and design meetings. </br>
										•	Responsible for requirements capture, design, coding, testing, installation.</br>  
										•	Web Application maintenance. </br>
										•	Providing support & maintenance of existing software.</br>  
										•	Coding and development of application for company growth .</p>
                        </div>
                    </div>
                    <div class="col-sm-11 col-xs-12  box mar-bottom-mid pull-right edu experience-box">
                        <div class="box-cont edu-bor">
                            <div class="date">September 2017 (Currently employed)</div>
                            <h3 class="nomargin">Software engineer and IT support.</h3>
                            <h4>Boxchamp facility management <span class="text-primary">(Cape Town, South Africa)</span></h4>
                            <p class="nomargin">Working with clients to solve issues and bugs in the system. Development and brain storming of new features for the system that could benefit the company and the clients. </br> 
							Duties:  </br> 
									•	Working with customers/employees to identify software problems and advising</br> 
										on the solution/fixing the problem</br> 
									•	Logging and keeping records of customer/employee queries</br> 
									•	Analysing query logs so you can spot common trends and underlying problems,</br> 
										thereby building solutions to prevent from happening in future</br> 
									•	Updating self-help documents so customers/employees can try to fix problems</br> 
										themselves</br> 
									•	Working with customers/employees if the problem is more serious</br> 
									•	Testing and fixing faulty software</br> 
									•	Carrying out tech requests from customers and employees</br> 
									•	Working closely with the team to ensure software is working as intended</br> 
									•	Clear communication on issues/timelines
								</p>
                        </div>
                    </div>
                </div>
                   <!-- <div class="col-sm-11 col-xs-12  box pull-right edu experience-box">
                        <div class="box-cont edu-bor">
                            <div class="date">2014 - 2015</div>
                            <h3 class="nomargin">Graphic designer</h3>
                            <h4>Kin-dox <span class="text-primary">(Thibodaux, LA)</span></h4>
                            <p class="nomargin">Mfficitur fusce sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc tempus eros sit amet tquam. Fusce efficitur sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc temap us eros sit ameet aliquam sagittis blandit tquieam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--experience-->

        <!--interest-->
        <section class="interest wow animated fadeInUp" data-wow-delay="0.5s">
            <div class="container">
                <h2>MY INTERESTS</h2>
                <span class="sub-title mar-bottom-bigger">What I like doing</span>
                <div class="row">
                    <div class="col-sm-3 col-xs-6 interest-box">
                        <div class="box light-border no-shadow">
                            <span class="glyph-icon flaticon-game fIcon"></span>
                            <span class="title">Sports</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 interest-box">
                        <div class="box light-border no-shadow">
                            <span class="glyph-icon flaticon-photo fIcon"></span>
                            <span class="title">Technology</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 interest-box">
                        <div class="box light-border no-shadow">
                            <span class="glyph-icon flaticon-technology-1 fIcon"></span>
                            <span class="title">Music</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 interest-box">
                        <div class="box light-border no-shadow">
                            <span class="glyph-icon flaticon-departures fIcon"></span>
                            <span class="title">Aviation</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--interest-->

        <!--portfolio-->
        <section id="portfolio" class="portfolio wow animated fadeInUp" data-wow-delay="0.5s">
            <div class="container">
                <h2>MY PORTFOLIO</h2>
                <span class="sub-title mar-bottom-bigger">See the amazing work I did in the past</span>
                <div class="button-group filters-button-group">
                    <button class="button is-checked" data-filter="*">All</button>
                    <!--<button class="button" data-filter=".metal">Logo</button>-->
                    <!--<button class="button" data-filter=".transition">Branding</button>-->
                    <!--<button class="button" data-filter=".alkali, .alkaline-earth">PHOTOGRAPHY</button>-->
                </div>
                <div class="grid">
                    <div class="row">
                        <div class="element-item transition alkali metal col-sm-4 col-xs-6 nopadding " data-category="transition">
                            <a href="http://www.revolutionweb.co.za/lindsey/rankandrentwebsite"><img src="images/rankandrent.png" alt="portfolio-1" /></a>
                        </div>
                        <div class="element-item metalloid alkali transition col-sm-4 col-xs-6 nopadding" data-category="metalloid ">
                            <a href="http://www.revolutionweb.co.za/lindsey/accountantwebsite" ><img src="images/accounts.png" alt="portfolio-2" /></a>
                        </div>
                        <div class="element-item post-transition metal col-sm-4 col-xs-6 nopadding" data-category="post-transition">
                            <a href="http://www.revolutionweb.co.za/lindsey/agencywebsite"><img src="images/dentist.png" /></a>
                        </div>
                        <div class="element-item transition metal col-sm-4 col-xs-6 nopadding" data-category="transition">
                            <a href="http://www.revolutionweb.co.za/lindsey/portfoliowebsite" class="lytebox" data-title="Shopping Bag" data-description="Fusce efficitur sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc temapus eros sit ameet tquieam. <br/><br/> Gravida ex luctus aliquam sagittis blandit leo non aliquet Donec hendrerit est id luctus tincidunt. Sed ultrices."><img src="images/coffee.png" alt="portfolio-4" /></a>
                        </div>
                        <div class="element-item transition metal col-sm-4 col-xs-6 nopadding" data-category="transition">
                            <a href="http://www.revolutionweb.co.za/lindsey/directorywebsite" class="lytebox" data-title="Shopping Bag" data-description="Fusce efficitur sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc temapus eros sit ameet tquieam. <br/><br/> Gravida ex luctus aliquam sagittis blandit leo non aliquet Donec hendrerit est id luctus tincidunt. Sed ultrices."><img src="images/chiro.png" alt="portfolio-5" /></a>
                        </div>
                        <div class="element-item alkali metal col-sm-4 col-xs-6 nopadding" data-category="alkali">
                            <a href="#" class="http://www.revolutionweb.co.za/lindsey/productwebsite" data-title="Shopping Bag" data-description="Fusce efficitur sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc temapus eros sit ameet tquieam. <br/><br/> Gravida ex luctus aliquam sagittis blandit leo non aliquet Donec hendrerit est id luctus tincidunt. Sed ultrices."><img src="images/agency.png" alt="portfolio-6" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--portfolio-->

        <!--pricing-plans-->
       <!-- <section id="pricing" class="pricing-plans wow animated fadeInUp" data-wow-delay="0.5s">
            <div class="container">
                <h2>PRICING PLANS</h2>
                <span class="sub-title mar-bottom-bigger">A deal for every pocket</span>
                <div class="row">
                    <div class="col-lg-4 col-xs-4 pBox">
                        <div class="priceBox p-fixed">
                            <div class="price-top">
                                <h4 class="priceTitle"> Fixed </h4>
                                <h2> <span>$</span>100 </h2>
                                <h5> PER HOUR </h5>
                            </div>
                            <ul>
                                <li> Lorem </li>
                                <li> Ipsum dolor sit amet </li>
                                <li> Consectetur </li>
                            </ul>
                            <a href="#" class="buyBtn">buy now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4 pBox pHours">
                        <div class="priceBox hourly">
                            <div class="price-top">
                                <h4 class="priceTitle"> Hourly </h4>
                                <h2> <span>$</span>150 </h2>
                                <h5> PER HOUR </h5>
                            </div>
                            <ul>
                                <li> Incididunt </li>
                                <li> Exercitation </li>
                                <li> Consectetur adipisicing elit </li>
                                <li> Sed do eiusmod </li>
                            </ul>
                            <a href="#" class="buyBtn">buy now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4 pBox">
                        <div class="priceBox p-support">
                            <div class="price-top">
                                <h4 class="priceTitle"> Support </h4>
                                <h2> <span>$</span>200 </h2>
                                <h5> PER HOUR </h5>
                            </div>
                            <ul>
                                <li> Excepteur </li>
                                <li> Exercitation ullamco laboris </li>
                                <li> Aliquip </li>
                                <li> Voluptate </li>
                            </ul>
                            <a href="#" class="buyBtn">buy now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing-plans-->

        <!--testimonials
        <section id="testimonials" class="testimonials wow animated fadeInUp" data-wow-delay="0.5s">
            <div class="container">
                <h2>TESTIMONIALS</h2>
                <span class="sub-title mar-bottom-bigger">What people are saying</span>
                <div class="row">
                    <ul class="bxslider">
                        <li class="col-sm-12">
                            <div class="col-lg-2 col-sm-3 v-middle display-ib text-center">
                                <div class="testImg"><img src="http://placehold.it/206x206" alt="img" /></div>
                                <h5>Claris Millar</h5>
                                <h4>Founder & CEO</h4>
                            </div>
                            <div class="col-lg-10 col-sm-9 v-middle display-ib pad-top-mid">
                                <p>Mfficitur fusce sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc tempus eros sit amet quam. Fusce efficitur sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc temap us eros sit ameet aliquam sagittis blandit tquieam.</p>
                            </div>
                        </li>
                        <li class="col-sm-12">
                            <div class="col-lg-2 col-sm-3 v-middle display-ib text-center ">
                                <div class="testImg"><img src="http://placehold.it/206x206" alt="img" /></div>
                                <h5>Russell Rolan</h5>
                                <h4>Manager, Digital Media</h4>
                            </div>
                            <div class="col-lg-10 col-sm-9 v-middle display-ib pad-top-bigger">
                                <p>Mfficitur fusce sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc tempus eros sit amet quam. Fusce efficitur sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc temap us eros sit ameet aliquam sagittis blandit tquieam.</p>
                            </div>
                        </li>
                        <li class="col-sm-12">
                            <div class="col-lg-2 col-sm-3 v-middle display-ib text-center ">
                                <div class="testImg"><img src="http://placehold.it/206x206" alt="img" /></div>
                                <h5>Williams Atkin</h5>
                                <h4>Operations Manager</h4>
                            </div>
                            <div class="col-lg-10 col-sm-9 v-middle display-ib pad-top-bigger">
                                <p>Mfficitur fusce sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc tempus eros sit amet quam. Fusce efficitur sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc temap us eros sit ameet aliquam sagittis blandit tquieam.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--testimonials-->

        <!--blog
        <section id="blog" class="blog wow animated fadeInUp" data-wow-delay="0.5s">
            <div class="container">
                <h2>Blog</h2>
                <span class="sub-title mar-bottom-bigger">Get daily updates on web design</span>
                <div class="row">
                    <div class="col-md-6 col-sm-12 pr blog-box">
                        <div class="blog-date">08 JAN</div>
                        <img src="http://placehold.it/1920x1005" alt="img">
                        <div class="col-sm-11 auto-marging whitebackground pull-none blog-cont">
                            <h3><a href="blog-detail.html">Lorem ipsum dolor sit amet</a></h3>
                            <p>Fusce efficitur sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc temapus eros sit ameet tquieam.</p>
                            <p>Gravida ex luctus aliquam sagittis blandit leo non aliquet Donec hendrerit est id luctus tincidunt. Sed ultrices.</p>
                            <div class="blog-bottom">
                                <span><span class="icon-user fIcon"></span><a href="#">John Smith</a></span>
                                <span><span class="icon-comments fIcon"></span>18</span>
                                <span><span class="icon-tags fIcon"></span><a href="#">Web Design</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 pr blog-box">
                        <div class="blog-date">12 FEB</div>
                        <img src="http://placehold.it/1920x1005" alt="img">
                        <div class="col-sm-11 auto-marging whitebackground pull-none blog-cont">
                            <h3><a href="blog-detail.html">Nullam aliquet mauris</a></h3>
                            <p>Efficitur sem ut erat eleifend, a gravida ex luctus aliquam sagittis blandit leo non aliquet. Nunc temapus eros sit ameet tquieam.</p>
                            <p>Luctus aliquam Gravida ex sagittis blandit leo non aliquet Donec hendrerit est id luctus tincidunt.</p>
                            <div class="blog-bottom">
                                <span><span class="icon-user fIcon"></span><a href="#">John Smith</a></span>
                                <span><span class="icon-comments fIcon"></span>18</span>
                                <span><span class="icon-tags fIcon"></span><a href="#">Web Design</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--blog-->

        <!--contact me-->
        <section id="contact" class="contact pad-bottom-most wow animated fadeInUp" data-wow-delay="0.5s">
            <div class="container">
                <h2>CONTACT ME</h2>
                <span class="sub-title mar-bottom-bigger">Having an exciting project? Let's connect</span>
                <div class="row">
                    <div class="col-md-6 col-sm-12 container-left cntct-form">
                        <form class="contact-form" method="post">
                            <div class="row">
                                <div class="col-sm-12 pad-bottom-bigger form-item">
                                    <input type="text" name="name" placeholder="Your Name" value="<?php echo $_POST['name']; ?>"/>
                                </div>
                                <div class="col-sm-12 pad-bottom-bigger form-item">
                                    <input type="text" name="subject" placeholder="Subject" value="<?php echo $_POST['subject']; ?>"/>
                                </div>
                                <div class="col-sm-12 pad-bottom-bigger form-item">
                                    <input type="email" name="email" placeholder="Email" value="<?php echo $_POST['email']; ?>"/>
                                </div>
                                <div class="col-sm-12 form-item">
                                    <textarea placeholder="message" value="<?php echo $_POST['message']; ?>"></textarea>
                                </div>
                                <div class="col-lg-5 col-md-5 send-btn">
                                    <input type="submit" name="submit" value="SEND MESSAGE">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 col-md-offset-1 col-sm-12 cntct-info">
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="map">
                                    <div class="googlemaps">
                                                                                
                                </div>
                            </div>
                            <div class="col-sm-12 bottom-border whitebackground contact-right">
                                <div class="col-sm-12 contact-right-details">
                                    <span class="glyph-icon flaticon-placeholder fIcon"></span>
                                    <div class="col-lg-10 col-md-9">
                                        <span class="mape-cont">ADDRESS</span> <span class="contact-add">6 prion lane summerstrand Port Elizabeth</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 contact-right-details">
                                    <span class="glyph-icon flaticon-technology-2 fIcon"></span>
                                    <div class="col-lg-10  col-md-9">
                                        <span class="mape-cont">CALL ME</span> 0765099266
                                    </div>
                                </div>
                                <div class="col-sm-12 contact-right-details">
                                    <span class="glyph-icon flaticon-note fIcon"></span>
                                    <div class="col-lg-10 col-md-9">
                                        <span class="mape-cont">EMAIL</span>
                                        <a href="#">drewlindsey017@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact me-->
    </div>

    <!--footer-->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="footer-icon">
                        <a href="#"><span class="icon-facebook fIcon"></span></a>
                        <a href="#"><span class="icon-twitter fIcon"></span></a>
                        <a href="#"><span class="icon-linkedin fIcon"></span></a>
                        <a href="#"><span class="icon-google fIcon"></span></a>
                        <a href="#"><span class="icon-skype fIcon"></span></a>
                        <a href="#"><span class="icon-dribbble fIcon"></span></a>
                        <a href="#"><span class="icon-pintrest fIcon"></span></a>
                        <a href="#"><span class="icon-behance fIcon"></span></a>
                    </div>
                </div>
                <div class="col-sm-12 text-center mar-top-big text-primary copyrights wow animated fadeInUp" data-wow-delay="0.5s">
                    &copy; 2017 lindsey is powered by <a href="https://store.multidots.com/" target="blank">Revolution Web</a>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-->

    <!-- Back-to-top -->
    <a href="#" class="back-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
    <!-- Back-to-top -->

    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/isotope-docs.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/element.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add Lytebox main JS and CSS files -->
    <script type="text/javascript" src="js/lytebox.js"></script>

    <!-- Add WOW main JS files -->
    <script type="text/javascript" src="js/wow.min.js"></script>

    <!-- Map -->
     <script type="text/javascript" src="js/maps.js"></script>
        

</body>

</html>