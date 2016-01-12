<?php 
if(isset($_POST['submit'])){
    $date = new DateTime();
    $datafile = fopen("contact.txt", "a");
    fwrite($datafile, " ----- " . $date->getTimestamp() . 
                      " ----- \n" .
                      "[name] => " . 
                      $_POST['name'] .
                      " [email] => " .
                      $_POST['email'] .
                      " [message] => " .
                      $_POST['message'] .
                      "\n\n"
    );
    fclose($datafile);
    $to = "info@toypig.co"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Toy Pig Co Contact Form";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From: \"" . $from . "\"\n";
    $headers2 = "From: \"" . $to . "\"\n";
    ini_set('sendmail_from', $to);
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: index.html'); 
    }
?>

<!doctype html>
<html class="no-js" lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toy Pig Co. | Contact</title>
    <link rel="shortcut icon" type="image/x-icon" href="/toypig.ico">
    <meta name="keywords" content="boston, digital, marketing, advertising, web, development, experience, agency, consultancy design, boston digital marketing, boston advertising, boston advertising agency, boston web devleopment, boston web design, julie vera, robby grodin,">
    <meta name="description" content="Toy Pig Co. | A Boston-based Digital Experience Company.">
    <meta property="og:title" content="Toy Pig Co.">
    <meta property="og:image" content="http:toypig.co/toypig_logo_black.svg" />
    <meta property="og:site_name" content="Toy Pig Co.">
    <meta property="og:url" content="http://toypig.co/">
    <meta property="og:description" content="Toy Pig Co. is a Boston-based digital experience company. We believe that every problem should be approached with child-like curiosity.">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@toypigco">
    <meta name="twitter:title" content="Toy Pig Co. | Welcome">
    <meta name="twitter:description" content="Toy Pig Co. is a Boston-based digital experience company. We believe that every problem should be approached with child-like curiosity.">
    <meta name="twitter:image:src" content="http://toypig.co/toypig_logo_black.svg">
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Six+Caps' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-54234016-1', 'auto');
      ga('send', 'pageview');

    </script>

  </head>
  <body>
                
      
       
  
      <div class="row">
        <div class="large-3 columns">
          
        </div>
        <div class="large-9 columns">
         
        </div>
      </div>
      
       
      
      
      <div class="row">    
         
         <hr>
        <div class="large-12 columns" id="maincontent">
          
          <h2>TOY PIG CO.<span><small> let's chat.</small></span></h2>
                   
        </div>

     
      </div>

      <div class="row">
        <div class="large-12 columns contact">
          <form action="" method="post">
              <div class="row">
                <div class="large-1 columns">
                  <div>
                      <label for="name">Name:</label>
                  </div>
                </div>
                <div class="large-11 columns">
                  <input type="text" id="name" name="name"/>
                </div>
              </div>

              <div class="row">
                <div class="large-1 columns">
                  <div>
                      <label for="email">E-mail:</label>
                  </div>
                </div>
                <div class="large-11 columns">
                  <input type="email" id="email" name="email"/>
                </div>
              </div>

              <div class="row">
                <div class="large-1 columns">
                  <div>
                      <label for="message">Message:</label>
                  </div>
                </div>
                <div class="large-11 columns">
                  <textarea id="message" name="message"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="large-1 columns">
                  <div>
                      <button id="submit" type="submit" name="submit">Send!</button>
                  </div>
                </div>
                <div class="large-11 columns">
                </div>
              </div>
          </form>             
        </div>
      </div>
        
      
       
      
      <footer class="row">
        <div class="large-12 columns">
          <hr/>
          <div class="row">
            <div class="large-6 columns">
              <p>(c) Toy Pig Co., LLC | Boston | 2015</p>
            </div>
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="capabilities.html">Capabilities</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div> 
      </footer>
   
  </body>
</html>
