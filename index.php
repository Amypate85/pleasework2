<!DOCTYPE html>
<html>
<head>
	<title>WITHIN WEB DEVELOPEMENT</title>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">


<script src="https://kit.fontawesome.com/a076d05399.js"></script>


	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body>

<div class="top_section">

<div class="overlay">

<div class="top_titles">
    <h1>WITHIN WEB DEVELOPMENT</h1>
</div>
<div class="contact">
<!-- Default form contact -->
<form class="text-center" method="POST" action="">

    <p class="h4 mb-4">Contact us</p>


<?php



  $name= $_REQUEST['name'];
  $email= $_REQUEST['email'];
  $message= $_REQUEST['message'];
  if (empty($name) || empty($email) || empty($message)) 
  {

   echo "";
  }
  else
  {

     mail("amypate85@gmail.com", "Within Web Developement Message",$message." { From: ".$name." < ".$email." >");
   

 echo "Thanks For Contacting Us";

  }


?>


    <!-- Name -->
    <input type="text" required id="defaultContactFormName" class="form-control mb-4" placeholder="Name" name="name">

    <!-- Email -->
    <input type="email" name="email" required id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">


    <!-- Message -->
    <div class="form-group">
        <textarea name="message" required class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
    </div>



    <!-- Send button -->
    <button class="btn" type="submit">Send</button>

</form>
<!-- Default form contact -->
</div>





</div>
</div>


<div class="main_services cssanimation sequence fadeInBottom">
    
    <h2>OUR SERVICES</h2>
    <div class="service_name" id="service1"> 

        <div class="icon_bow">
            <i class="fa fa-code icon-font-code"></i>
        </div>

        <h4>Custom Websites</h4>
        <p>WordPress, Squarespace, Magento, Drupal, Joomla...we do it all!</p>
        <a href="#"><button>Learn More</button></a>

    </div>
<div class="service_name"> 

        <div class="icon_bow">
            <i class="fas fa-palette"></i>
        </div>

        <h4>Graphic Design</h4>
        <p>Looking for a new logo? A re-branding? We can bring your company's personality to life on your website.</p>
        <a href="#"><button>Learn More</button></a>

    </div>

<div class="service_name"> 

        <div class="icon_bow">
            <i class="fa fa-search icon-font-search"></i>
        </div>

        <h4>Webmaster Services</h4>
        <p>Maintenance, monitoring, content edits, product updates, training, new features and so much more!</p>
        <a href="#"><button>Learn More</button></a>

    </div>
</div>


<div class="products cssanimation sequence fadeInBottom">

<h2 id="product_heading">Increase Your Business With WITHIN WEB DEVELOPMENT</h2>


<div class="product_sections">


<div class="img_right">
        
        <img src="images/7.jpg" width="100%">
    </div>

    
    <div class="text_part">

        <h2>Strategy & Planning</h2>
<p>To build the best product for you, we take the time to do our research. Our team looks for 
opportunities to create the optimal user experience and validate that those choices are the right ones for real users.</p>

<ul>
    <li><i class="fas fa-chevron-circle-right"></i> CONTENT STRATEGY</li>
<li><i class="fas fa-chevron-circle-right"></i> SEARCH ENGINE OPTIMIZATION</li>
<li><i class="fas fa-chevron-circle-right"></i> DATA SCIENCE</li>
<li><i class="fas fa-chevron-circle-right"></i> RESEARCH & TESTING</li>
<li><i class="fas fa-chevron-circle-right"></i> Design & Content</li>

</ul>



<p>Our team transforms your brand into web-friendly patterns to create a consistent experience both on 
and offline, while ensuring it looks good on all devices, so your web presence truly stands out.</p>


    </div>

</div>





<div class="product_sections">
    <div class="img_left">
        
        <img src="images/hosting.jpg" width="90%">
    </div>
    <div class="text_part">

        <h2>Hosting</h2>
        <p>We can help you find the perfect hosting for your project. We also offer exclusive discounts! </p>
 
        <ul>
    <li><i class="fas fa-chevron-circle-right"></i> VISUAL DESIGN & IDENTITY</li>
<li><i class="fas fa-chevron-circle-right"></i> DIGITAL MARKETING</li>
<li><i class="fas fa-chevron-circle-right"></i> USER EXPERIENCE</li>
<li><i class="fas fa-chevron-circle-right"></i> PROTOTYPING</li>
<li><i class="fas fa-chevron-circle-right"></i> Build & Host</li>

</ul>




    </div>

</div>

<div class="product_sections">


<div class="img_right">
        
        <img src="images/9.jpg" width="100%">
    </div>

    
    <div class="text_part">

        <h2>Why Choose Us ?</h2>
<p>Our expert development team works their magic to turn your website into a reality. We are always researching the latest technologies and 
best practices for the web, so when it comes time to craft a solution that helps you reach your goals, we have 
a number of tools ready to go. Whether it’s open source tooling like WordPress, .NET or PHP, or even making 
legacy tools and data learn some new tricks, we can help.</p>

<ul>
    <li><i class="fas fa-chevron-circle-right"></i> APPLICATION DEVELOPMENT</li>
<li><i class="fas fa-chevron-circle-right"></i> MANAGED HOSTING</li>
<li><i class="fas fa-chevron-circle-right"></i> CONTENT MANAGEMENT SYSTEMS</li>
<li><i class="fas fa-chevron-circle-right"></i> WEB DEVELOPMENT</li>

</ul>






    </div>

</div>














</div>




<div class="footer">
    <div class="footer_part">
        <h4>Contact Us</h4>
   <a href="mailto:amypate85@gmail.com"><p><i class="fas fa-envelope"></i> amypate85@gmail.com</p></a>
  <a target="_blank" href="https://www.facebook.com/WithinWebDevelopment"><p id="facebook"><i class="fab fa-facebook-f"></i></p></a>

   </div> 

    <div class="footer_part">
        <h3>With Web Development</h3>
        <p>Our team transforms your brand into web-friendly patterns to create a consistent experience both on and offline, while ensuring it looks good on all devices, so your web presence truly stands out.</p>
    </div>

</div>
















</body>
</html>