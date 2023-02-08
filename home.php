<?php

$msg='';
if (isset($_POST['submit'])){

    require_once 'vendor/autoload.php';
    require_once 'infor.php';

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
      ->setUsername(EMAIL)
      ->setPassword(PASS)
    ;
    
    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
    
    // Create a message
    $message = (new Swift_Message('New Inquiry to ZURI Labs Ltd'))
      ->setFrom([EMAIL => 'ZURI Labs Ltd'])
      ->setTo(['samuriukih@gmail.com'])
      ->setBody('Name: '.$_POST['firstname'].' &nbsp; '.$_POST['lastname'] .
     '<br> Email: '.' &nbsp; '.$_POST['email'] . '<br> Subject: '.' &nbsp; '.$_POST['subject']
      . '<br> Message: '.' &nbsp; '.$_POST['message'], 
      'text/html')
      ;
    
    // Send the message
    $result = $mailer->send($message);

    if(!$result){

        $msg='<div class="alert alert-danger text-center">

        Something went Wrong! Please Try again
        </div>';

    }
    else{

        $msg='<div class="alert alert-success text-center">

        Message Sent Successfully! Our Team will contact you soon
        </div>';
    }


}




?>

<!doctype html>
<html lang="en">
  <head>
    <title>ZURI IoT Solutions</title>
    <link rel="icon" href="images/android.png" type="image/x-icon" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   

    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <a href="#" class="text-white"><span class="mr-2 text-white icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">zuri@email.com</span></a>
            <span class="mx-md-2 d-inline-block"></span>
            <a href="#" class="text-white"><span class="mr-2 text-white icon-phone"></span> <span class="d-none d-md-inline-block">+254 7xx xxx xxx </span></a>
            

            <div class="float-right">

              <a href="https://www.facebook.com" target="_blank" class="text-white"><span class="mr-2 text-white icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>
                <span class="mx-md-2 d-inline-block"></span>

                <a href="https://www.twitter.com" target="_blank"class="text-white"><span class="mr-2 text-white icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="https://www.Instagram.com" target="_blank" class="text-white"><span class="mr-2 text-white icon-instagram"></span> <span class="d-none d-md-inline-block">Instagram</span></a>

            </div>

          </div>
          
        </div>
        
      </div>
    </div>
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
              <a href="index.html" class="text-black"><img src="images/Logo.png" alt="ZURI IoT Solutions"></a>
             
            </div>
            
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
              

                <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#team-section" class="nav-link">Team</a></li>
                   
                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                  
                  </ul>
                </li>
                <li><a href="#services-section" class="nav-link">Products & Services</a></li>

                


                
                <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                <li><a href="#contact-section" class="nav-link">Contact us</a></li>
              </ul>
              </nav>
          
            </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    
    <div class="owl-carousel slide-one-item">
        <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/banner/smart farm.jpg'); " >
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
              <div class="col-md-12 col-lg-7">
                <h1 data-aos="fade-up" data-aos-delay="">Welcome ZURI IoT Solutions</h1>  
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">We Make IT Happen...</p>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#contact-section" class="btn btn-outline-white border-w-2 btn-md">Get in touch</a></p>
               </div>
          </div>
        </div>

      </div>

      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/banner/smart agriculture.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="">Smart Farming Solutions</h1>      
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">We Provide You With the Latest and Smart IoT Solutions in Farming</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#contact-section" class="btn btn-outline-white border-w-2 btn-md">Get in touch</a></p>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/banner/smart agriculture.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="">Smart solutions in Farming</h1>      
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">We Provide You With the Latest and Smart IoT Solutions in Farming</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#contact-section" class="btn btn-outline-white border-w-2 btn-md">Get in touch</a></p>
            </div>
          </div>
        </div>

      </div>
      

    </div>
    
    <!--about us section-->


    <section class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>About Us</h2>
              <p>Founded in 2018, ZURI Labs is an engineering company with roots in Kenya. 
                At ZURI Labs we have a team of dedicated and experienced engineers, 
                software developers, researchers and project managers who aim at providing our clients 
                with reliable solutions that fit their business needs. We design and develop
                 complex engineering and software solutions that blend with initiative mobile
                  application to help our clients reach their full potential thereby increasing
                   their profitability. We offer our services to dozens of clients of all sizes 
                   and shapes. We develop solutions that matter. 
                At ZURI Labs, We Make IT Happen.</p>
            </div>
          </div>
        </div>
        <!--<div class="row mb-5">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="pricing">
              <h3 class="text-center text-black">Basic</h3>
              <div class="price text-center mb-4 ">
                <span><span>$47</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li class="remove">Lorem ipsum dolor sit amet</li>
                <li class="remove">Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary btn-md">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
              <h3 class="text-center text-black">Premium</h3>
              <div class="price text-center mb-4 ">
                <span><span>$200</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-primary btn-md text-white">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing">
              <h3 class="text-center text-black">Professional</h3>
              <div class="price text-center mb-4 ">
                <span><span>$750</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li>Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary btn-md">Buy Now</a>
              </p>
            </div>
          </div>
        </div>-->

    <div class="site-section bg-dark" id="about-section">
      <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
          <!--<div class="col-md-12 mb-5">
            <h3 class="font-size-20 text-black">Michael Njoroge</h3>
            <figure class="block-img-video-1" data-aos="fade">
              <a href="https://vimeo.com/45830194" data-fancybox data-ratio="2">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>-->
        </div>
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                <div class="block-counter-1">
                  <span class="number"><span data-number="5">0</span>+</span>
                  <span class="caption">Year of Experience</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="block-counter-1">
                  <span class="number"><span data-number="5">0</span>+</span>
                  <span class="caption">Expert Engineers</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="block-counter-1">
                  <span class="number"><span data-number="20">0</span>+</span>
                  <span class="caption">Number of Employees</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="block-counter-1">
                  <span class="number"><span data-number="100">0</span>+</span>
                  <span class="caption">Number of Projects Undertaken</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>Our Team</h2>
              <p>At ZURI IoT Solutions, we have a team of deidicated engineers that has worked together for close to 5 years. 
                During this period, the team has dedicated itself to offer our clients with exceptional experience and solutions that 
              meet their day to day challenges. Besides, the team is dedicated to create new innovations that simplify various challenges that face our clients   </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/njoro.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Michael Njoroge</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Senior Software Developer</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/sam.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Samuel Muriuki</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Software Developer</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/david.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Eng. David Githae</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Water and Irrigation Engineer</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/muturi.jpeg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Eng. Muturi Miano</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Instrumental and Control Engineer</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Bob Carry</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project Manager</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Ricky Fisher</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Engineer</span>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        
        <div class="row site-section" id="faq-section">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title text-primary">Frequently Ask Questions</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">Where are you located?</h3>
            <p>We are located in Thika-Makongeni, off Thika-Garissa highway. </p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">Do you do site visit?</h3>
              <p> Yes. We do a site visit upon request by our client. </p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">Do you offer after sales service?</h3>
            <p>Yes. Our Smart Kits have a 0ne year waranty after which we offer maintanace services at a minimal fee. 

            </p>
            </div>
            
            
          </div>
          <div class="col-lg-6">

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">Do you repair existing drip irrigation system ?</h3>
              <p> Yes. Apart from installing new drip irrigation systems, we offer consultancy services and recommend the 
                best solution to your malfunctioning drip issigation system. If we find that a repair is needed, we offer 
                one at an agreed amount.
              </p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">What is your opening time?</h3>
              <p> We are open from Monday-Saturday, 8.00am to 6.00pm. fell free to visit or call us with this period.</p>
            </div>

            
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">Can I return the Kit if it fails to perform</h3>
              <p> We recommend that you contact us before intefering with any of the kit after which we send our technician
                who will trobleshoot and give recommendations. </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="site-section">
      <div class="block__73694 mb-2" id="services-section">
        <h2 class="section-title text-primary" style="text-align:center" >Our Products and Services</h2>
        <div class="container">
          

          <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-6 block__73422" style="background-image: url('images/image.jpg');" data-aos="fade-right" data-aos-delay="">
            </div>

            

            <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
             
              <h2 class="mb-3 text-black"></h2>
              <p>At Byte Lab Technologies, we offfer our clients with tailor made services and products that suit their business requirements.
              We have a team of qualified and experienced engineers, software developers and researchers who work smart and hard to ensure 
              that we deliver the best technological soultions to our cleints.</p>

              <p>At Byte Lab Technologies, we believe in...</p>

              <ul class="ul-check primary list-unstyled mt-5">
                <li>Research</li>
                <li>Innovation</li>
                <li>Expertise</li>
                <li>Consistency</li>
                <li>Value for our clients</li>
              </ul>

              
            </div>

          </div>
        </div>      
      </div>


      <div class="block__73694">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('images/smart kit.jpg');" data-aos="fade-left" data-aos-delay="">
            </div>

            

            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-3 text-black">Smart irrigation Kit</h2>
              <p>At Byte Lab Technologies, we design and develop smart irrigation kits that enables our client to remotely 
              water their crops at the comfort of their home or office. Our Smart kit has the capability to monitor the soil moisture and
              and automatically open the water valves depending on the moisture content of the soil. This kit is applicable to both 
              open field and green house farming.</p>

              <p>Why you need this smart irrigation kit</p>

              <ul class="ul-check primary list-unstyled mt-5">
                <li>It saves your time</li>
                <li>It increases your profitability</li>
                <li>Time spent watering your crops can be utilized in other activities</li>
                <li>You can choose electric or solar powered kit</li>
                <li>Efficiency </li>
              </ul>

            </div>

          </div>
        </div>      
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="block__35630">

            <figure>
                <img src="images/smart tanks.jpg" alt="Image" class="img-fluid rounded-circle mx-md-2"">
              </figure>
              
              <h3 class="mb-3">Smart Tank Kit</h3>
              Our hand washing tanks are programmed to ensure that germs are not spread into 
              your sensitive spaces be it your green house, packaging rooms or even your office.
               Our customers can choose either solar of electricity powered kit. 
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block__35630">
            <figure>
                <img src="images/smart tanks.jpg" alt="Image" class="img-fluid rounded-circle mx-md-2"">
              </figure>
              <h3 class="mb-3">Green House system</h3>
              We have an automated green house system that enables our clients to remotely monitor temparatures, moisture and atomatically 
              water their crops. 
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block__35630">
            
              <figure>
                <img src="images/track.jpg" alt="Image" class="img-fluid rounded-circle mx-md-2"">
              </figure>
              <h3 class="mb-3">Real time tracking system</h3>
              We have a tracking system that enables our clients to remotely track the movement of their motor vehicles and 
              motor cycles.            
             </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="block__35630">
            <figure>
                <img src="images/software.jpg" alt="Image" class="img-fluid rounded-circle mx-md-2"">
              </figure>
              <h3 class="mb-3">Software Development</h3>
              At Byte Lab Technologies, we have a team of experienced and dedicated software developers who
              are eager to design and devolop a software for your business needs. Our software are designed and 
              developed to suit your every business needs thereby ensuring profitability. 
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="block__35630">   
          <figure>
                <img src="images/drip.jpg" alt="Image" class="img-fluid rounded-circle mx-md-2"">
              </figure>
              <h3 class="mb-3">Drip Irrigation</h3>
              We have a dedicated team of Water and irigation engineers who will help you to install and 
              rehabilitate your drip irrigation system. We offer our services to all clients regardless of the size of their 
              land. Our aim is to make your land profitable. <a href="#contact-section" class="nav-link"><b>contact us now </b> </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block__35630">
            <figure>
                <img src="images/house.jpg" alt="Image" class="img-fluid rounded-circle mx-md-2"">
              </figure>
              <h3 class="mb-3">Smart Homes</h3>
              We have a smart home kit that enables our clients to automate their home. This kit has the capability of 
              intruder detection hence enabling one to remotely monitor their home at the comfort of their workplace. 
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <!--<div class="site-section" id="product-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
              <h2>Our Products</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled">
              <li class="mb-5" data-aos="fade-right" data-aos-delay="">
                <span class="d-block text-muted mb-3">Apr 19, 2019</span>
                <h2 class="h4"><a href="press-single.html" class="text-black">How To Find Gold In Mining</a></h2>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
              </li>
              <li class="mb-5" data-aos="fade-right" data-aos-delay="100">
                <span class="d-block text-muted mb-3">Apr 19, 2019</span>
                <h2 class="h4"><a href="press-single.html" class="text-black">How To Find Gold In Mining</a></h2>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
              </li>
              <li class="mb-5" data-aos="fade-right" data-aos-delay="200">
                <span class="d-block text-muted mb-3">Apr 19, 2019</span>
                <h2 class="h4"><a href="press-single.html" class="text-black">How To Find Gold In Mining</a></h2>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>-->

    <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
      <div class="container">
        
        <div class="text-center mb-5">
          <div class="block-heading-1">
            <h2>Testimonials</h2>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13">
          <div>
            <div class="block-testimony-1 text-center">
              
              <blockquote class="mb-4">
                <p>&ldquo; I contracted Byte Lab Technologies to supply and install a smart irrigation system on my farm 
                and i have seen its effectiness. I can now remotely water my farm from the comfort of my home. Try them
                 and you will not be disapointed &rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/jumbo.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Jumbo Farm</h3>
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="images/njoro.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 mb-4 text-black">Ken </h3>

              <blockquote class="mb-4">
                <p>&ldquo;I admire how Byte Lab Technologies create solutions that suit your business needs.
                I would recommend them to businesses and farmers that want to integrate Smart technologies into their system&rdquo;</p>
              </blockquote>

              
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">
              

              <blockquote class="mb-4">
                <p>&ldquo;Byte Lab Technologies are best at what they do. Their smart irrigation kit saves you not only time but also money 
                &rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/davie.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black"> Griffin</h3>

              
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="images/smart tank.jpeg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 mb-4 text-black">Robert</h3>

              <blockquote class="mb-4">
                <p>&ldquo; I admire how Byte Lab Technologies use technology to simplify our day to day challenges as farmers. To ensure 
                hygine in your office or farm, i would encourage organizations or individuals to acquire their samrt tank that limits 
                the spread of germs?&rdquo;</p>
              </blockquote>

              
            </div>
          </div>


        </div>

      </div>
    </div>

    

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <span>Get In Touch</span>
              <h2>Contact Us</h2>
            </div>

            <p></p>
                    <div><?= $msg ?></div>
          </div>
        </div>
       
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <form class="contact_box" name="contactform" id="contactform" action=" " method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                <b>  <label>First Name:</label> </b><input type="text" class="form-control input_box" id="firstname" name="firstname" placeholder="First Name">
                </div>
                <br/>

                <div class="col-md-6">
                 <b><label>Last Name:</label> </b><input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                </div>
              </div>
              <br/>


              <div class="form-group row">
                <div class="col-md-12">
               <b> <label>Email Address: </label></b> <input type="email" class="form-control" id="email"  name="email" placeholder="Email Address">
                </div>
              </div>
              <br/>

              <div class="form-group row">
                <div class="col-md-12">
                <b><label>Subject: </label></b> <input type="text" class="form-control" id="subject"  name="subject" placeholder="Subject">
                </div>
              </div>
              <br/>

              <div class="form-group row">
                <div class="col-md-12">
  
               <textarea  class="form-control" name="message" id="message" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <button type="submit" class="btn btn-block btn-primary text-white py-3 px-5" id="submit" name="submit" value="" onclick="return contact_check();">Send Message</button>

                <!--  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">-->
                </div>
              </div>
            </form>

            <script>
              function contact_check()
              {
                  if(document.getElementById("firstname").value.split(" ").join("")=="")
                  {
                      alert("Please Enter Your First Name.");
                      document.getElementById("firstname").focus();
                      return false;
                  }
                  if(document.getElementById("lastname").value.split(" ").join("")=="")
                  {
                      alert("Please Enter Your Last Name.");
                      document.getElementById("lastname").focus();
                      return false;
                  }
                  
                  if(document.getElementById("email").value.split(" ").join("") == "")
                  {
                      alert("Please Enter Email.");
                      document.getElementById("email").focus();
                      return false;
                  }
                  else
                  {
                      var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                      if(emailPattern.test(document.getElementById('email').value)==false)
                      {
                          alert("Please enter valid Email address.");
                          document.getElementById('email').focus();
                          return false;
                      }
                  }
                  
                  if(document.getElementById("subject").value.split(" ").join("")=="")
                  {
                      alert("Please Enter the Subject for your Message.");
                      document.getElementById("subject").focus();
                      return false;
                  }

                  if(document.getElementById("message").value.split(" ").join("")=="")
                  {
                      alert("The Message cannot be empty.");
                      document.getElementById("message").focus();
                      return false;
                  }
                 
                 
                 
              }
          </script>


          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
          <h3>Contact Us</h3>  
          <p> <b> Need to know more detail about us, our services and products we offer... Write to us and we will get back to you </b></p>
         
         
          <div class="row">
                <div class="col-12">
                <a href="#" class="text-black"><span class="mr-2 text-black icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">zuri@email.com</span></a>
                <span class="mx-md-2 d-inline-block"></span><br/> <p></p>
                <a href="#" class="text-black"><span class="mr-2 text-black icon-phone"></span> <span class="d-none d-md-inline-block">+254 7xx xxx xxx </span></a>
            
             </div>
          
        </div>
        
          </div>
        </div>
      </div>
    </div>
    

    <!--try here-->

    <div class="addres-area black-bg section-padding">
      <div class="container">
          <div class="row">
              <div class="col-xl-4 col-md-4">
                  <div class="single-address text-center">
                      <div class="addres-icon">
                          <img src="images/icons/1.png" alt="">
                      </div>
                      <h3>Our Location</h3>
                      <p>Makongeni, Thika <br>
                          Thika-Garissa Highway, Kenya</p>
                      <a class="underline-hover" href="#contact-section"> Get Direction</a>
                  </div>
              </div>
              <div class="col-xl-4 col-md-4">
                  <div class="single-address text-center">
                      <div class="addres-icon">
                          <img src="images/icons/2.png" alt="">
                      </div>
                      <h3>Opening hour</h3>
                      <p>Mon-Sat (08.00-18.00) <br>
                          Sun <a class="underline-hover" href="#">(Closed)</a></p>
                  </div>
              </div>
              <div class="col-xl-4 col-md-4">
                  <div class="single-address text-center">
                      <div class="addres-icon">
                          <img src="images/icons/3.png" alt="">
                      </div>
                      <h3>Send Us a Message</h3>
                      <p><i class="fa fa-envelope"></i> &nbsp; support24@zuri.com <br>
                          <i class="fa fa-phone"></i> &nbsp; +254 xxx xxx xxxx
                              
                  </p>
                      <a class="underline-hover" href="contact.html">Contact Us</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- location-area-end -->



    <!--try here-->


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Founded in 2018, ZURI Labs is an engineering company with roots in Kenya. 
                At ZURI Labs we have a team of dedicated and experienced engineers, 
                software developers, researchers and project managers who aim at providing our clients 
                with reliable solutions that fit their business needs. We design and develop
                 complex engineering and software solutions that blend with initiative mobile
                  application to help our clients reach their full potential thereby increasing
                   their profitability.</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                
                  <li><a href="#about-section" class="nav-link">About Us</a></li>
                  <li><a href="#product-section" class="nav-link">Our Products</a></li>
                  <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                  <li><a href="#services-section" class="nav-link">Our Services</a></li>
                 
                  <li><a href="#contact-section" class="nav-link">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>

          <div class="col-md-4 ml-auto">

<div class="mb-5">
  <h2 class="footer-heading mb-4"><b>Mission</b></h2>
                    
                    <p>To Develop First Class Solutions Through Sustainable Technological Developments </p>

                    <h2 class="footer-heading mb-4"><b>Vision </b></h2>

                    <p>To be a Leading organization that provide our clients with 
                    tailor made solutions by using the recent advancements in technology<p> 


  <form action="#" method="post" class="footer-suscribe-form">
    <div class="input-group mb-3">
      <div class="input-group-append">
        
      </div>
    </div>
  </div>


  <h2 class="footer-heading mb-4">Follow Us</h2>
  <a href="https://facebook.com" target="_blank" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
  <a href="https://wwww.twitter.com" target="_blank" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
  <a href="https://www.instagram.com" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        
</form>
</div>
</div>
<div class="row pt-5 mt-5 text-center">
<div class="col-md-12">
<div class="border-top pt-5">
<p class="copyright"><medium>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <a href="https://bytelabtechnologies.com" target="_blank">Byte Lab Technologies</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</small></p>
</div>
</div>

</div>
</div>
</footer>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>
</html>