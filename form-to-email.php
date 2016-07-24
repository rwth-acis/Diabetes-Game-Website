<?php
 
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "feedback.diabetesgame@gmail.com";
 
    $email_subject = "Neues Feedback";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "Es tut uns leid, doch leider wurden folgende Fehler in der übertragenen Form gefunden. ";
 
        echo "<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Bitte gehen sie zurück und beheben diese Fehler.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['question1']) ||
 
        !isset($_POST['question2']) ||
 
        !isset($_POST['question3']) ||
 
        !isset($_POST['question4']) ||
 
        !isset($_POST['question5']) ||
		
		!isset($_POST['question6']) ||
		
		!isset($_POST['question7']) ||
		
		!isset($_POST['question8']) ||
		
		!isset($_POST['age']) ||
		
		!isset($_POST['gender']) ||
		
		!isset($_POST['diabetes']) ||
		
		!isset($_POST['computer'])) {
			
		
 
        died('Es sind nicht alle Fragen beantwortet.');       
 
    }
 
     
 
    $question1 = $_POST['question1']; // required
 
    $question2 = $_POST['question2']; // required
 
    $question3 = $_POST['question3']; // required
 
    $question4 = $_POST['question4']; // not required
 
    $question5 = $_POST['question5']; // required
	
    $question6 = $_POST['question6']; 
 
    $question7 = $_POST['question7']; // required
	
	$question7 = $_POST['question8']; // required
	
	$age = $_POST['age'];
	
	$gender = $_POST['gender'];
	
	$diabetes = $_POST['diabetes'];
	
	$computer = $_POST['computer'];
	
	$comments = $_POST['comments']; // not required
 
     
 
    $error_message = "";
 

 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Q1: ".$question1."\n";
 
    $email_message .= "Q2: ".$question2."\n";
 
    $email_message .= "Q3: ".$question3."\n";
 
    $email_message .= "Q4: ".$question4."\n";
 
    $email_message .= "Q5: ".$question5."\n";
	
	$email_message .= "Q6: ".$question6."\n";
	 
	$email_message .= "Q7: ".$question7."\n";
	
	$email_message .= "Q8: ".$question8."\n";
	  
	$email_message .= "Age: ".$age."\n";
	
	$email_message .= "Gender: ".$gender."\n";
	
	$email_message .= "Diabetes: ".$diabetes."\n";
	
	$email_message .= "Computer: ".$computer."\n";
	
	$email_message .= "Comments: ".$comments."\n";
 
     
	$email_from = "unknown@feedback.de";
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.6.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="Free Bootstrap Blog Template">
  <title>Diabetes Game</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-slider/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
</head>
<body>

<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-93">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="index.html"><img class="mbr-navbar__brand-img mbr-brand__img" src="assets/images/logo.png" alt="Mobirise"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="index.html">Diabetes Game</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="disease.html" rel="external" >KRANKHEIT</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="about.html">ÜBER DAS PROJEKT</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="community.html">COMMUNITY</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="profile.html">PROFIL</a></li></ul></div>
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-default" href="game.html">SPIEL</a></li></ul></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="jumbotron" style="background-color: rgb(49,79,79);">
    <div class="container"> 
            <div class="col-sm-8 col-sm-offset-2">
			
			</div>
	</div>
</section>

<section class="jumbotron" style="background-color: rgb(255,255,255);">
    <div class="container"> 
		<h2>Vielen Dank für ihr Feedback</h2>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		
		

	</div>
	
</section>



<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-94" style="background-color: rgb(68, 68, 68);">
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"></p><p>Copyright (c) 2016 Rwth Aachen University.</p><p></p>
            </div>
        </div>
    </div>
</footer>

  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  <script id="dsq-count-scr" src="//diabetesgame.disqus.com/count.js" async></script>
  
  
</body>
</html>
 
 