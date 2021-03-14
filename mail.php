<?php

require "PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
            

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;

        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'mail.excelandmaster.com';
        $mail->Port = 465;
        $mail->Username = 'autoreply@excelandmaster.com';
        $mail->Password = 'L0ndon96';

   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);

        $mail->IsHTML(true);
        $mail->From="autoreply@excelandmaster.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $_POST['requirements'];

        $companyName = $_POST['company'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $requirement = $_POST['requirements'];
        $system = $_POST['system'];
        $bodyMessage = "$name from $companyName has submitted the quote form. <br>". PHP_EOL;
        $bodyMessage .= "Email: $email <br>".PHP_EOL;
        $bodyMessage .= "Phone Number: $number <br>".PHP_EOL;
        $bodyMessage .= "Requirements: $requirement <br>".PHP_EOL;
        $bodyMessage .= "System: $system <br>".PHP_EOL;
        $bodyMessage .= "Message: $message <br>".PHP_EOL;

        $mail->Body = $bodyMessage;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error;
        }
        else
        {
            $error = "Thanks we will be in touch soon!";
            return $error;
        }
    }

    $to   = 'info@excelandmaster.com';
    $from = 'autoreply@excelandmaster.com';
    $name = 'autoreply';
    $subj = 'New message';
    $msg = 'You recieved a message';


    $error=smtpmailer($to,$from, $name ,$subj, $msg);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Want to maximise efficiency in excel? We Automate Processes to Save You Time, So You can Focus on What Matters by Creating a Bespoke Solution.">
     <link rel="icon" type="image/x-icon" href="consulting logo square.png" />
  <title>Maximise Efficiency with Custom Automated Solutions, built by professionals at Excel and Master</title>

  <!-- CSS  -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Open+Sans:wght@400;600&family=Oswald&family=Poppins:wght@500&family=Source+Serif+Pro:wght@600&family=Yantramanav:wght@500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css2/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css2/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  <!-- Global site tag (gtag.js) - Google Ads: 659750461 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-659750461"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-659750461');
  gtag('config', 'UA-190668359-1');
</script>

<!-- Event snippet for Page view conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-659750461/8y-MCO_asfkBEL38y7oC'});
</script>



</head>
<body>
  <nav class="navbar-default white" role="navigation">
    <div class="nav-wrapper">
      <img src="logo.png" href="index.html"class="img-fluid" alt="Excel and Master Logo">
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">HOME</a></li>
        <li><a href="about.html">ABOUT US</a></li>
        <li><a href="quote.php">GET A QUOTE</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.html">HOME</a></li>
        <li><a href="about.html">ABOUT US</a></li>
        <li><a href="quote.php">GET A QUOTE</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container" align="center">
        <br><br>
        <h3 class="header center white-text text-lighten-2">Need to maximise efficiency in Excel?</h3>
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>

        <div class="row center">
          <a href="index.html" id="button2" class="btn-large waves-effect">Back To Homepage</a>
        </div>

        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="contactus.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

    <div class="boxed">
      <h4>
        Thank you for getting in touch!

We appreciate you contacting us. One of our colleagues will get back in touch with you soon!

Have a great day!
      </h4>
    </div>
      </div>
        </div>
          </div>

</div>
      </div>
        </div>
          </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="js/materialize.min.js"></script>
	 
	 
  </body>
</html>
