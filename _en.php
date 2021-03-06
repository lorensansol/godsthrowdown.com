<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'Contacto GodsThrowdown'; 
    $to = 'vivoboxcrossfitmurcia@gmail.com'; 
    $subject = 'Mensaje de Formulario de Contacto de GodsThrowdown';
    $body ="Nombre: $name\nE-Mail: $email\nMensaje:\n $message";
    // Comprobar si si ha introducido nombre
    if (!$_POST['name']) {
      $errName = 'Enter a name';
    }
    // Comprobar si si ha introducido email y es válido
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Enter a valid email';
    }
    // Comprobar si si ha introducido mensaje
    if (!$_POST['message']) {
      $errMessage = 'Enter a message';
    }
    // Si no hay errores, enviar email
    if (!$errName && !$errEmail && !$errMessage) {
      if (mail ($to, $subject, $body, $from)) {
        $result='<script language="javascript">alert("Thank you! We will contact you shortly."); window.location.href = "http://godsthrowdown.com/en";</script>';
      } else {
        $result='<script language="javascript">alert("Sorry, there was an error sending your message. Please try again later."); window.location.href = "http://godsthrowdown.com/en";</script>';
      }
    }
  }
?>
<?php echo $result; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-P7H5LZD');</script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gods Throwdown: International Functional Competition</title>
  <meta name="description" content="Competition in Murcia at the international level of functional fitness, not only focused on crossfiters.">
  <link rel="canonical" href="http://godsthrowdown.com/en">
  <link rel="alternate" hreflang="es" href="http://godsthrowdown.com/" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/estilos.css" type="text/css">
  <style type="text/css">.collapse{display:block;}</style>
  <link href="https://fonts.googleapis.com/css?family=Oswald:700|lato:300,500" rel="stylesheet" type="text/css">
  <meta name="twitter:card" content="summary">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en">
  <meta property="og:site_name" content="Gods Throwdown: International Functional Competition">
  <meta name="twitter:title" property="og:title" content="Gods Throwdown: International Functional Competition">
  <meta name="twitter:description" property="og:description" content="Competition in Murcia at the international level of functional fitness, not only focused on crossfiters.">
  <meta property="og:url" content="http://godsthrowdown.com/en">
  <meta name="twitter:image" property="og:image" content="http://godsthrowdown.com/img/logo.png">
  <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
  <link rel="publisher" href="https://plus.google.com/106879912255223521410">
  <meta name="google-site-verification" content="qQ7W3Jc1-skfZ-z82qvHlMhPBtd1qSiSOczCUmvUMEI" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2157126-18"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-2157126-18');
  </script>
  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window,document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
   fbq('init', '236579230106765'); 
  fbq('track', 'PageView');
  </script>
  <noscript>
   <img height="1" width="1" 
  src="https://www.facebook.com/tr?id=236579230106765&ev=PageView
  &noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7H5LZD"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand page-scroll" href="#">
        <h1 class="h3 mb-0">
          <img style="position:absolute" src="img/favicon.png" width="32" height="32" alt="Logo Gods Throwdown">
          <span style="position:relative;left:37px">GodsThrowdown</span>
        </h1>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item" lang="es">
            <a class="nav-link" href="/" title="Versión en Español">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHkAAABRCAMAAADB2/kgAAAAElBMVEXGCx7+xADDACLypAf/xwDCAB4ft08gAAAARUlEQVRoge3YOQGAAADEsOPzb5kFDx1IDHTvBgDwa2dlV2V3ZUdFWVlZWVlZWVlZWVlZWVlZWfkrd2+o+2FPpZ6fAACtFzDTG2sMi3I6AAAAAElFTkSuQmCC" alt="Bandera España" width="27" height="18" style="position:relative;bottom:2px;border:#de928c 1px solid;" />
              Esp
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#que"><i class="fa d-inline fa-lg fa-question-circle"></i> What is this?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#contacto"><i class="fa d-inline fa-lg fa-envelope"></i> Contact</a>
          </li>
        </ul>
        <a class="btn navbar-btn ml-2 text-white btn-secondary page-scroll" href="#inscripciones"><i class="fa d-inline fa-lg fa-sign-in"></i> Inscription</a>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center opaque-overlay bg-secondary fondo-oscuro jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(&quot;http://www.vivoboxcrossfit.com/wp-content/uploads/manos-magnesio-crossfit.jpg&quot;);">
    <div class="container py-5 text-white">
      <div class="row">
        <div class="col-md-12">
          <img class="img-fluid d-block mx-auto mb-5 bloque" data-scale="5" src="img/logo.png" width="290" height="306" alt="Logo Gods Throwdown" />
          <p class="mb-5 lead bloque" data-move-y="200px" data-scale="5">Functional Fitness Competition in Murcia at an International Level</p>
        </div>
      </div>
      <div class="row mb-5">
        <div class="p-4 col-lg-3 col-6 bloque" data-move-x="-500px" data-rotate="90deg">
          <i class="d-block fa fa-money fa-5x"></i>
          <h2 class="my-3 text-uppercase">28.000€<br>in cash</h2>
        </div>
        <div class="p-4 col-lg-3 col-6 bloque" data-move-x="-500px" data-move-y="500px" data-rotate="90deg">
          <i class="d-block fa fa-calendar-check-o fa-5x"></i>
          <h2 class="my-3 text-uppercase">8, 9 & 10<br>June 2018</h2>
        </div>
        <div class="p-4 col-lg-3 col-6 bloque" data-move-x="500px" data-move-y="500px" data-rotate="-90deg">
          <i class="d-block fa fa-users fa-5x"></i>
          <h2 class="my-3 text-uppercase">460<br>athletes</h2>
        </div>
        <div class="p-4 col-lg-3 col-6 bloque" data-move-x="500px" data-rotate="-90deg">
          <i class="d-block fa fa-th fa-5x"></i>
          <h2 class="my-3 text-uppercase">17<br>categories</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-white">
          <a href="#que" class="btn btn-lg m-1 btn-light page-scroll bloque" data-move-x="-500px" data-rotate="90deg"><i class="fa fa-lg d-inline fa-question-circle"></i> What is this?</a>
          <a href="#clasificaciones" class="btn btn-lg m-1 btn-secondary page-scroll bloque" data-move-x="-500px" data-move-y="500px" data-rotate="90deg"><i class="fa fa-lg d-inline fa-signal"></i> Classifications</a>
<!--
          <a href="https://arena.wodbuster.com/competition.aspx?id=37" target="_blank" class="btn btn-lg m-1 btn-secondary page-scroll bloque" data-move-x="-500px" data-move-y="500px" data-rotate="90deg"><i class="fa fa-lg d-inline fa-signal"></i> Clasificaciones</a>
-->
          <a href="#wods" class="btn btn-lg m-1 btn-light page-scroll bloque" data-move-x="500px" data-move-y="500px" data-rotate="-90deg"><i class="fa fa-lg d-inline fa-certificate"></i> Classifications WODs</a>
          <a href="#inscripciones" class="btn btn-lg btn-primary m-1 page-scroll bloque" data-move-x="500px" data-rotate="-90deg"><i class="fa fa-lg d-inline fa-sign-in"></i> Inscription</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5" id="que">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mb-4 display-4 text-center text-primary bloque" data-move-y="200px" data-scale="5">WHAT IS THIS?</h2>
        </div>
      </div>
      <div class="row text-justify">
        <div class="col-md-6 bloque" data-rotate-y="90deg" data-transform-Origin="0%">
          <p>GODS' THROWDOWN (GT) aims to be an <strong>internationally recognised competition of functional fitness</strong>, not only focused on crossfitters, but to all those in the sports environment such as fitness, runners, gymnasts, weightlifters etc. .. as all these disciplines are those that are used in this sport modality.</p>
          <p>A total of <strong>460 athletes</strong> will face each other in the final of Gods Throwdown. They will fight hard in each of the chosen tests and bring out the best of each of them to be able to win the prizes of this 1st edition.</p>
        </div>
        <div class="col-md-6 bloque" data-rotate-y="-90deg" data-transform-Origin="100%">
          <p>The scheduled date is <strong>8th, 9th and 10th June 2018</strong>, the qualifiers will be <strong>from 9th February to 25th February</strong>. The competition will take place in the “Palacio de deportes” in Murcia. (to be confirmed by the sponsoring brand).</p>
          <p>There will be a minimum of <strong>€ 28,000 in cash prizes</strong>, this may vary in the coming days depending on contributors, as well as the prizes offered by collaborating brands, shirts, products, etc....</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <a href="reglamento.pdf" class="btn btn-lg m-1 btn-secondary bloque" data-move-x="-500px" data-rotate="90deg" target="_blank"><i class="fa fa-lg d-inline fa-file-pdf-o"></i> Rules</a>
          <a href="consentimiento-menores.pdf" class="btn btn-lg m-1 btn-secondary bloque" data-move-x="-500px" data-rotate="90deg" target="_blank"><i class="fa fa-lg d-inline fa-file-pdf-o"></i> Authorization of Minors</a>
          <a href="#inscripciones" class="btn btn-lg btn-primary m-1 page-scroll bloque" data-move-x="500px" data-rotate="-90deg"><i class="fa fa-lg d-inline fa-sign-in"></i> Inscription</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-secondary opaque-overlay fondo-oscuro jarallax" data-jarallax='{"speed": 0.2}' id="normas" style="background-image: url(&quot;http://www.vivoboxcrossfit.com/wp-content/uploads/entrenamiento-vivobox-crossfit.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-5">
          <h2 class="mb-5 display-4 text-center text-white bloque" data-move-y="200px" data-scale="5">RULES</h2>
          <div id="accordion_normas" role="tablist" class="text-white">
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <div class="card-header" role="tab" id="headingOne">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h3 class="mb-0">General</h3>
                </a>
              </div>
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <ol>
                    <li>The registered athletes must meet the requirements that are required for each of the different categories.</li>
                    <li>Any unsportsmanlike behaviour within the competition, whether with a judge, athlete, volunteer or any of the attendees, may be grounds for expulsion.</li>
                    <li>The videos must be correctly recorded according to the bases of this competition, they will be indicated in the standards of the qualifying phase.</li>
                    <li>The movements in the videos must be clearly seen for correct revision, any movement that generates doubt will be considered as NO REP.</li>
                    <li>The recording will be as follows: presentation of the athlete and the box they represent, presentation of the material and the measurements that are required (including time and cage)</li>
                    <li>During the recording, the athlete, material and clock must not leave the shot at any time, if this happens the video will be penalized and not counted for the classification.</li>
                    <li>The video will be uploaded to YOUTUBE or VIMEO, the link will be provided to the organization along with the score for its review by the judges committee. The athletes themselves will be responsible for the content of the video, its correct recording and preview. The video must be uploaded publicly.</li>
                    <li>The title of the video must be as follows:</li>
                  </ol>
                  <p class="text-center text-primary">GT18_NAME_CATEGORY_NAME OF BOX BEING REPRESENTED</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <div class="card-header" role="tab" id="headingTwo">
                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h3 class="mb-0">Video revision</h3>
                </a>
              </div>
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  <ol>
                    <li>The team of judges will review the videos once the registration period ends, starting with wod 1. The athlete is responsible for ensuring the repetitions and their correct execution by following the criteria of the recording standards.</li>
                    <li>Once the videos have been received a provisional list of the qualifying athletes will be made until they are definitively corrected by the judges.</li>
                    <li>Once the correction period has ended, the definitive classification will be established. At this time, a period will be opened for possible claims.</li>
                    <li>Once the claim period has ended, and having carefully studied each of which, the definitive classification will be established. The invitation to the final phase of our competition will be sent via email to all athletes / teams which have qualified.</li>
                    <li>If an athlete / team refuses the invitation, it will be sent to the next athlete / team in the classification.</li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <div class="card-header" role="tab" id="headingThree">
                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h3 class="mb-0">Punctuation system</h3>
                </a>
              </div>
              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  <ul>
                    <li>0 points will be assigned in each wod, adding the number of points equal to its position, if the athlete achieves first place they will receive 1 point, the second 2 points and so on.</li>
                    <li>In case of a tie see rules.</li>
                    <li>The total points won will be added up to until the final phase, when the winner will be found.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <div class="card-header" role="tab" id="headingFour">
                <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <h3 class="mb-0">Judges</h3>
                </a>
              </div>
              <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                  <li>The team of judges will be composed of about 25 judges, the requirement for these will be the following:</li>
                  <ul>
                    <li>All of them will practise or have practised this sport.</li>
                    <li>They will have taken the Crossfit course for judges.</li>
                    <li>They will pass a test that has been created by the organizers of the event.</li>
                  </ul>
                  <p>A judge of judges will be appointed who will be in charge of organizing all other judges, the heat that they will judge and the respective athletes.</p>
                  <p>This judge of judges will be responsible for the rest of the judges, having the last word if any scoring error was made.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5" id="categorias">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mb-4 display-4 text-center text-primary bloque" data-move-y="200px" data-scale="5">CATEGORIES</h2>
        </div>
      </div>
      <div class="row  justify-content-center">
        <div class="col-lg-4 col-md-5 bloque" data-rotate-y="90deg" data-transform-Origin="0%">
          <p>Wanting to be an internationally recognized championship, the vast majority of existing categories to date will be incorporated, thus having a participation of the highest number possible of athletes in the qualifying phases.</p>
        </div>
        <div class="col-lg-3 col-md-4 bloque" data-rotate-y="-90deg" data-transform-Origin="100%">
          <ul>
            <li>Rx elite m/f</li>
            <li>Rx intermediate m/f</li>
            <li>Scaled m/f</li>
            <li>Master +35 m/f</li>
            <li>Master +40 m/f</li>
            <li>Master +45 m/f</li>
            <li>Master +50 m</li>
            <li>Teenager 15/17 m/f</li>
            <li>Rx Team</li>
            <li>Scaled Team</li>
          </ul>
        </div>
      </div>
      <div class="row text-dark">
        <div class="col-md-12 mb-5">
          <div id="accordion_categorias" role="tablist">
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a data-toggle="collapse" href="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
                <div class="card-header" role="tab" id="headingUno">
                  <h3 class="mb-0"> RX Elite </h3>
                </div>
              </a>
              <div id="collapseUno" class="collapse show" role="tabpanel" aria-labelledby="headingUno" data-parent="#accordion">
                <div class="card-body">
                  <p>The 40 best male athletes and 20 best female athletes in this category, will have the opportunity to face each other throughout the weekend in our WODs, which will be designed with the aim of finding the fittest athlete.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
                <div class="card-header" role="tab" id="headingDos">
                  <h3 class="mb-0"> RX Intermediate </h3>
                </div>
              </a>
              <div id="collapseDos" class="collapse" role="tabpanel" aria-labelledby="headingDos" data-parent="#accordion">
                <div class="card-body">
                  <p>The next 20 athletes in the RX category who do not get a place, will have the opportunity to face each other to fight for the podium in a new one, here there will also be cash prizes. This category is intended to give more opportunities to fight for a prize, and it will also be important for the scaled category to continue climbing with the aim of becoming an RX.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                <div class="card-header" role="tab" id="headingTres">
                  <h3 class="mb-0"> SCALED </h3>
                </div>
              </a>
              <div id="collapseTres" class="collapse" role="tabpanel" aria-labelledby="headingTres" data-parent="#accordion">
                <div class="card-body">
                  <p>This category is designed for those athletes who do not meet the minimum requirements for a rx, or they do not efficiently control them. Here you will have the opportunity to start competing without having a very demanding level, so you can experience the sensations and stress of a competition, and be more prepared for your rise to the premier category.</p>
                    <p>With the rise of this category we will give 60 athletes the opportunity to face each other in the final.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">
                <div class="card-header" role="tab" id="headingCuatro">
                  <h3 class="mb-0"> MASTER +35 +40 +45 +50 </h3>
                </div>
              </a>
              <div id="collapseCuatro" class="collapse" role="tabpanel" aria-labelledby="headingCuatro" data-parent="#accordion">
                <div class="card-body">
                  <p>They will have the same tests, except for the category + 45, which will have a reduction in weight of approximately 20%. The movements and weights will be the same as the rx, here the only difference is age, an influential factor in the world of competition.</p>
                  <ol>
                    <li>Master + 35: 20 men and 10 women</li>
                    <li>Master + 40: 20 men and 10 women</li>
                    <li>Master + 45: 10 men and 5 women</li>
                    <li>Master + 50: 10 men</li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">
                <div class="card-header" role="tab" id="headingCinco">
                  <h3 class="mb-0"> TEENAGERS </h3>
                </div>
              </a>
              <div id="collapseCinco" class="collapse" role="tabpanel" aria-labelledby="headingCinco" data-parent="#accordion">
                <div class="card-body">
                  <p>The category of the youngest and future promises of our sport, 15 boys and 10 girls in this category will be measured to achieve their victory, these will be teenagers who are 15 years old and up to 17 years old, and who are not yet 18 years old the same days that the event is held.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseSeis" aria-expanded="false" aria-controls="collapseSeis">
                <div class="card-header" role="tab" id="headingSeis">
                  <h3 class="mb-0"> TEAMS </h3>
                </div>
              </a>
              <div id="collapseSeis" class="collapse" role="tabpanel" aria-labelledby="headingSeis" data-parent="#accordion">
                <div class="card-body">
                  <p>A category that is having great acceptance, here scaled teams we will also be incorporated, Rx teams and Scaled teams will face each other on the days of the event.</p>
                  <p>The teams of both will be formed by 2 men and 1 woman,  the movements and weights will be to Rx standard, and those of scaled to scaled standard.</p>
                  <p>In total there will be 20 RX teams and 20 Scaled teams.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center bg-secondary text-white opaque-overlay fondo-oscuro jarallax" data-jarallax='{"speed": 0.2}' id="premios" style="background-image: url(&quot;http://www.vivoboxcrossfit.com/wp-content/uploads/ejercicios-crossfit-murcia.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-5">
          <h2 class="mb-4 display-4 bloque" data-move-y="200px" data-scale="5">PRIZES</h2>
          <p class="bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">This is one of the parts where we also want to differentiate ourselves from the rest of championships. We will have cash prizes for all the categories, since we want to reward the effort made by all competitors who attend the event, both for the previous preparation, as well as the economic expense for assistance.</p>
          <div class="my-4 bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%" style="overflow: scroll;">
            <table class="cebreada w-100">
              <tbody class="text-white">
                <tr>
                  <th>Category</th>
                  <th>Subcategories</th>
                  <th>1st</th>
                  <th>2nd</th>
                  <th>3rd</th>
                </tr>
                <tr>
                  <th>Elite</th>
                  <td>Masculine and Feminine</td>
                  <td>3.000€</td>
                  <td>1.500€</td>
                  <td>900€</td>
                </tr>
                <tr>
                  <th>Intermediate</th>
                  <td>Masculine and Feminine</td>
                  <td>700€</td>
                  <td>400€</td>
                  <td>250€</td>
                </tr>
                <tr>
                  <th>Escaled</th>
                  <td>Masculine and Feminine</td>
                  <td>300€</td>
                  <td>150€</td>
                  <td>50€</td>
                </tr>
                <tr>
                  <th>Masters +35</th>
                  <td>Masculine and Feminine</td>
                  <td>700€</td>
                  <td>350€</td>
                  <td>100€ + Gifts</td>
                </tr>
                <tr>
                  <th>Masters +40</th>
                  <td>Masculine and Feminine</td>
                  <td>700€</td>
                  <td>350€</td>
                  <td>100€ + Gifts</td>
                </tr>
                <tr>
                  <th>Masters +45</th>
                  <td>Masculine and Feminine</td>
                  <td>700€</td>
                  <td>350€</td>
                  <td>100€ + Gifts</td>
                </tr>
                <tr>
                  <th>Masters +50</th>
                  <td>Masculine</td>
                  <td>700€</td>
                  <td>350€</td>
                  <td>100€ + Gifts</td>
                </tr>
                <tr>
                  <th>Teenagers from 15 to 17</th>
                  <td>Masculine and Feminine</td>
                  <td>300€</td>
                  <td>150€</td>
                  <td>50€</td>
                </tr>
                <tr>
                  <th>Elite Team</th>
                  <td>1 Team de 2 Boys + 1 Girl</td>
                  <td>2.000€</td>
                  <td>1.000€</td>
                  <td>600€</td>
                </tr>
                <tr>
                  <th>Escaled Team</th>
                  <td>1 Team de 2 Boys + 1 Girl</td>
                  <td>600€</td>
                  <td>200€ + Gifts</td>
                  <td>50€ + Gifts</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center" id="clasificaciones">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-4">
          <h2 class="mb-4 display-5 text-center text-primary bloque" data-move-y="200px" data-scale="5">CLASSIFICATIONS</h2>
          <p class="lead text-center">Athletes classified</p>
          <script src="https://arena.wodbuster.com/js/wbarena.js"></script>
          <script>
           new WodBusterArena().Init(37);
          </script>
          <a id="inscripciones" href="https://arena.wodbuster.com/register.aspx?id=37" class="btn btn-lg btn-primary m-1 mt-5 px-4 py-3 bloque" data-move-y="200px" data-scale="5" target="_blank">
            <h2><i class="fa fa-lg d-inline fa-sign-in"></i> Inscription</h2>
          </a>
          <p class="bloque" data-move-y="200px" data-scale="5"> By pressing the button you accept the <a href="rules.pdf" target="_blank">rules</a>.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-secondary text-white" id="wods">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mb-4 display-5 text-center bloque" data-move-y="200px" data-scale="5">Classifications WODs</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 bloque" data-rotate-y="90deg" data-transform-Origin="0%">
          <h3 class="mb-4 display-4 text-center">WOD 1</h3>
          <div class="embed-responsive embed-responsive-16by9 mb-4">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/TzWRcy58Rnc?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <h4>AMRAP 5 '</h4>
          <p>The objective is to get the maximum number of calories before the time cap is met.</p>
          <p>Before being able to row the athlete has to complete:</p>
            <ul>
              <li>21/15/9</li>
              <li>Thruster</li>
              <li>Chest to bar/pull up</li>
            </ul>
          <p>The sum of the repetitions of “Fran", plus the calories from the row, will be the total number of reps we add.</p>
          <p>In the case of a draw of repetitions, the tie break will be the time of "Fran"</p>
          <h4>STANDARDS BY CATEGORY</h4>
          <h5>Rx / Master 35 male</h5>
          <ul>
            <li>Chest to bar</li>
            <li>Thruster 40</li>
          </ul>
          <h5>Rx/ Master 35 female</h5>
          <ul>
            <li>Thruster 30</li>
            <li>Pull up</li>
          </ul>
          <h5>Scaled Man / Master 40-45-50 / Teens</h5>
          <ul>
            <li>21/15/9 Thruster 30</li>
            <li>12/9/6 Pull up</li>
          </ul>
          <h5>Scaled Woman / Master 40-45 teens</h5>
          <ul>
            <li>12/9/6</li>
            <li>Thruster 25</li>
            <li>Pull up</li>
          </ul>
          
          <h5>Rx Team</h5>
          <ul>
            <li>CAP 10 '</li>
            <li>63/45/27</li>
            <li>Thruster 40/30</li>
            <li>Chest to bar / Pull up</li>
          </ul>
          <p>At the beginning of the Wod the team must establish the order of participation. While one teammate does repetitions the other 2 athletes rest. When the athlete stops, the next teammate continues to accumulate repetitions.</p>
          <p>At the end of the last repetition of chest to bar / pull up the next athlete to participate starts to row and begins to add calories. Every 10 cal there must be a change to another teammate. Following this pattern until the end of the time cap.</p>
          <h5>Scaled Team</h5>
          <ul>
            <li>CAP 10 '</li>
            <li>63/45 / 27 Thruster 30</li>
            <li>36/27/18 Pull up</li>
          </ul>
          <p>At the beginning of the Wod the team must establish the order of participation. While one teammate does repetitions the other 2 athletes rest. When the athlete stops, the next teammate continues to accumulate repetitions.</p>
          <p>At the end of the last repetition of pull up the next athlete to participate starts to row and begins to add calories. Every 10 cal there must be a change to another teammate. Following this pattern until the end of the time cap.</p>
          <h4>VALID EXECUTIONS</h4>
          <ul>
            <li>Chest to bar / Pull up
              <ul>
                <li>Butterfly</li>
                <li>Kipping</li>
              </ul>
            </li>
            <li>Thruster
              <ul>
                <li>You can start with squat clean or power clean</li>
              </ul>
            </li>
            <li>Rowing
              <ul>
                <li>It should be set to off, the athlete will be responsible for turning it on, either starting to row or touching the screen.</li>
              </ul>
            </li>
          </ul>
          <h4>NON VALID EXECUTIONS</h4>
          <ul>
            <li>Chest to bar
              <ul>
                <li>The chest does not touch the bar</li>
                <li>Elbows are not fully extended</li>
              </ul>
            </li>
            <li>Pull up
              <ul>
                <li>The chin does not exceed the bar</li>
                <li>Elbows are not extended</li>
              </ul>
            </li>
            <li>Thruster
              <ul>
                <li>Parallel is not broken</li>
                <li>Hip-knee not extended</li>
                <li>Elbows are not extended</li>
                <li>The ear does not reach the height of the arm</li>
              </ul>
            </li>
            <li>Rowing
              <ul>
                <li>It is turned on when before starting to row</li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-md-6 bloque" data-rotate-y="-90deg" data-transform-Origin="100%">
          <h3 class="mb-4 display-4 text-center">WOD 2</h3>
          <div class="embed-responsive embed-responsive-16by9 mb-4">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/zKAxOUKQpNw?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <h4>AFAP (CAP 10 ')</h4>
          <p>The objective is to complete 5 rounds of Clean and unders in the shortest possible time, where the number of reps stays the same but the weight is increased in each round.</p>
          <p>Only one bar can be used</p>
          <p>Barbell clamps must be used</p>
          <p>Allowed variants</p>
          <ul>
            <li>Power clean</li>
            <li>Squat clean</li>
          </ul>
          <p>Changes of weights for both teams as for individuals can be done by an assistant.</p>
          <h4>STANDARDS BY CATEGORY</h4>
          
          <h5>Rx / Master 35 Male</h5>
          <ul>
            <li>10 Clean (60-70-80-90-100)</li>
            <li>40 DU</li>
          </ul>
          <h5>Rx / Master 35 Female</h5>
          <ul>
            <li>10 clean (30/40/50/60/70)</li>
            <li>40 DU</li>
          </ul>
          <h5>Master 40 Male</h5>
          <ul>
            <li>10 clean (50,60,70,80,90)</li>
            <li>40 DU</li>
          </ul>
          <h5>Master 40 Female</h5>
          <ul>
            <li>10 clean (30/35/40/45/50)</li>
            <li>20 DU</li>
          </ul>
          <h5>Scaled / Master 45/50 teens Male</h5>
          <ul>
            <li>10 Clean (50-55-60-65-70)</li>
            <li>20 DU</li>
          </ul>
          <h5>Scaled / Master 45 / Female teens</h5>
          <ul>
            <li>10 clean (25/30/35/40/45)</li>
            <li>80 SU</li>
          </ul>
          <h5>Equipment</h5>
          <ul>
            <li>Each athlete will have their own bar with the weight corresponding to category and sex, they will also have their own rope.</li>
            <li>All 3 athletes have to complete the repetitions of Clean, before any member is able to touch the rope, and vice versa.</li>
           </ul>
          <p>In the Scaled Team category each member will perform 40 simple unders each.</p>
          <ul>
            <li>5 RFT</li>
            <li>10 Clean</li>
            <li>BOYS (50-55-60-65-70)</li>
            <li>GIRLS (25-30-35-40-45)</li>
            <li>40 SU</li>
          </ul>
          <h4>VALID EXECUTIONS</h4>
          <ul>
            <li>Power clean</li>
            <li>Squat clean</li>
            <li>Weight changes can be done by helpers</li>
            <li>Elbows and knees must be extended</li>
            <li>Barbell clamps must be used</li>
          </ul>
          <h4>NO VALID EXECUTIONS</h4>
          <ul>
            <li>Hips and knees are not extended</li>
            <li>The elbows do not exceed the bar</li>
            <li>The bar does not touch the ground</li>
          </ul>
          <h4>PENALTIES</h4>
          <ul>
            <li><strong>Good Video:</strong> The athlete meets the required movement standards on all repetitions in the workout, and the score they posted is correct. Their score will be accepted.</li>
            <li><strong>Valid with Minor Penalty:</strong> Over the course of the video, the athlete demonstrates 1 to 4 “no-reps” that may be removed from the athlete’s final score as required. This penalty is used for video submissions for which the score needs to be adjusted by fewer than 5 reps. If the score is posted in the form of a time, the total time to complete the workout will be adjusted accordingly</li>
            <li><strong>Valid with Major Penalty:</strong> Over the course of the video, the athlete demonstrates 5 or more “no-reps.” In this case, the score may be modified by subtracting 15 percent from the total rep count. If the score is posted in the form of a time, the total time to complete the workout will be adjusted accordingly.</li>
            <li><strong>Invalid:</strong> Over the course of the video, the athlete fails to complete the workout as required, a significant and unacceptable number of reps performed are “no-reps” or the video does not contain the criteria listed in the video submission standards. The athlete’s score will be rejected.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-white" id="packs">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="mb-4 display-5 text-primary text-center bloque" data-move-y="200px" data-scale="5">Athletes Packs</h2>
            <p>There are two options for boys and two options for girls, this is the information that must be expressed on the web:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 bloque" data-rotate-y="90deg" data-transform-Origin="0%">
          <h3 class="mb-4 text-center">Registration Pack 1</h3>
          <p>Backpack, towel, identification bracelet, athlete identification card, gifts from sponsors and personalized t-shirt with your name:</p>
          <ul>
            <li>PACK WOMAN: 50 €</li>
            <li>PACK MEN: 50 €</li>
          </ul>
        </div>
        <div class="col-md-6 bloque" data-rotate-y="-90deg" data-transform-Origin="100%">
          <h3 class="mb-4 text-center">Registration Pack 2</h3>
          <p>Backpack, towel, identification bracelet, athlete identification card, gifts from sponsors, personalized t-shirt with your name and shorts:</p>
          <ul>
            <li>PACK WOMAN: 70 €</li>
            <li>PACK MEN: 75 €</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 bloque" data-rotate-y="90deg" data-transform-Origin="0%">
          <img class="img-fluid" src="img/bolsa-atletas-pack-woman.jpg" alt="bolsa-atletas-pack-woman" width="510" height="427">
        </div>
        <div class="col-md-6 mb-4 bloque" data-rotate-y="-90deg" data-transform-Origin="100%">
          <img class="img-fluid" src="img/bolsa-atletas-pack-men.jpg" alt="bolsa-atletas-pack-men" width="510" height="427">
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-primary text-white" id="faqs">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mb-4 display-4 text-center bloque" data-move-y="200px" data-scale="5">FAQS</h2>
          <p class="lead text-center">Frequently Asked Questions</p>
          <div id="accordion_faqs" role="tablist" class="text-dark">
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a data-toggle="collapse" href="#collapsePrimero" aria-expanded="true" aria-controls="collapsePrimero">
                <div class="card-header" role="tab" id="headingPrimero">
                  <h3 class="mb-0">Where is the championship being held?</h3>
                </div>
              </a>
              <div id="collapsePrimero" class="collapse show" role="tabpanel" aria-labelledby="headingPrimero" data-parent="#accordion">
                <div class="card-body">
                  <p>The event will be held at the “Palacio de los Deportes”, located at Calle Molina de Segura, 7 Puente Tocinos, Murcia (<a href="#contacto">map</a>). In the surroundings there is: a shopping center, hotels, restaurants and shops,  everything in less than 500mt, making it comfort for athletes in all aspects.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseSegundo" aria-expanded="false" aria-controls="collapseSegundo">
                <div class="card-header" role="tab" id="headingSegundo">
                  <h3 class="mb-0">Where and when do athletes do the registration?</h3>
                </div>
              </a>
              <div id="collapseSegundo" class="collapse" role="tabpanel" aria-labelledby="headingSegundo" data-parent="#accordion">
                <div class="card-body">
                  <p>The registration of athletes is on June 8, 2018, from 1:00 p.m. to 3:00 p.m. for scaled, scaled, master and teens teams. For elite Rx, intermediate rx and rx teams it will be until 20:00.</p>
                  <p>If an athlete cannot make the Friday registration, they have another period on Saturday from 7:30 to 8:00.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseTercero" aria-expanded="false" aria-controls="collapseTercero">
                <div class="card-header" role="tab" id="headingTercero">
                  <h3 class="mb-0">What are the dates of the qualifying wods?</h3>
                </div>
              </a>
              <div id="collapseTercero" class="collapse" role="tabpanel" aria-labelledby="headingTercero" data-parent="#accordion">
                <div class="card-body">
                  <p>The periods for the qualifying wods will be held:</p>
                  <p>Wod 1: from February 10, 2018 to February 25 at 23:59.</p>
                  <p>Wod 2: from February 17 at 12:00, 2018 to February 25, 2018 at 23:59.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseCuarto" aria-expanded="false" aria-controls="collapseCuarto">
                <div class="card-header" role="tab" id="headingCuarto">
                  <h3 class="mb-0">What can I expect from both the qualifying wods and the final ones?</h3>
                </div>
              </a>
              <div id="collapseCuarto" class="collapse" role="tabpanel" aria-labelledby="headingCuarto" data-parent="#accordion">
                <div class="card-body">
                  <p>The norms and movements of the exercises will be standardized at regional-European level for all categories except for Scaled.</p>
                  <p>As a novelty and evolution of the scaled category, the following are incorporated:</p>
                  <p>Double unders and toes to bar. Chest to bar only for the male category.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseQuinto" aria-expanded="false" aria-controls="collapseQuinto">
                <div class="card-header" role="tab" id="headingQuinto">
                  <h3 class="mb-0">How are the teams made up?</h3>
                </div>
              </a>
              <div id="collapseQuinto" class="collapse" role="tabpanel" aria-labelledby="headingQuinto" data-parent="#accordion">
                <div class="card-body">
                  <p>The teams are composed of 3 athletes, (2 men and 1 woman), they must record the qualifiers all together.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseSexto" aria-expanded="false" aria-controls="collapseSexto">
                <div class="card-header" role="tab" id="headingSexto">
                  <h3 class="mb-0">Is it obligatory to be present on Friday 8th June in the registration or briefing?</h3>
                </div>
              </a>
              <div id="collapseSexto" class="collapse" role="tabpanel" aria-labelledby="headingSexto" data-parent="#accordion">
                <div class="card-body">
                  <p>The presence of the athlete is not mandatory, but it is mandatory for someone to pick up the athlete's pack, and give them the information given in the briefing, and also doing their registration.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseSeptimo" aria-expanded="false" aria-controls="collapseSeptimo">
                <div class="card-header" role="tab" id="headingSeptimo">
                  <h3 class="mb-0">Am I in the master category?</h3>
                </div>
              </a>
              <div id="collapseSeptimo" class="collapse" role="tabpanel" aria-labelledby="headingSeptimo" data-parent="#accordion">
                <div class="card-body">
                  <p>The master category is divided from 5 to 5 years starting at 35 (+35 +40 +45 +50), so you must be the age of that category at least the same day the event starts (8/06/2018)</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseOctavo" aria-expanded="false" aria-controls="collapseOctavo">
                <div class="card-header" role="tab" id="headingOctavo">
                  <h3 class="mb-0">Where can I stay?</h3>
                </div>
              </a>
              <div id="collapseOctavo" class="collapse" role="tabpanel" aria-labelledby="headingOctavo" data-parent="#accordion">
                <div class="card-body">
                  <div class="row text-center">
                    <div class="col-6 p-1 bloque" data-move-x="500px" data-move-y="500px" data-rotate="-90deg">
                      <a href="http://www.agaliahotel.es/" title="Agalia Hotel" target="_blank">
                        <img class="img-fluid" src="img/logo-agalia-hotel.png" width="232" height="159" alt="logo agalia hotel">
                      </a>
                    </div>
                    <div class="col-6 p-1 bloque" data-move-x="500px" data-move-y="500px" data-rotate="-90deg">
                      <a href="http://www.hotelazarbe.com/" title="Hotel Azarbe" target="_blank">
                        <img class="img-fluid" src="img/logo-azarbe-hotel.jpg" width="232" height="159" alt="logo azarbe hotel">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseNoveno" aria-expanded="false" aria-controls="collapseNoveno">
                <div class="card-header" role="tab" id="headingNoveno">
                  <h3 class="mb-0">How can I be a judge or volunteer?</h3>
                </div>
              </a>
              <div id="collapseNoveno" class="collapse" role="tabpanel" aria-labelledby="headingNoveno" data-parent="#accordion">
                <div class="card-body">
                  <p>You should write an email to: godsthrowdown@gmail.com, sending your information (experience as a crossfitter, judge or volunteer) and what you are interested in assisting.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseDecimo" aria-expanded="false" aria-controls="collapseDecimo">
                <div class="card-header" role="tab" id="headingDecimo">
                  <h3 class="mb-0">How many athletes qualify for the Sunday final?</h3>
                </div>
              </a>
              <div id="collapseDecimo" class="collapse" role="tabpanel" aria-labelledby="headingDecimo" data-parent="#accordion">
                <div class="card-body">
                  <p>The 10 best rx elite male and 10 female, 10 intermediate rx male and 10 female, 10 scaled male and 10 female, 10 master +35 male and 6 female, 10 master +40 male and 6 female, 6 master +45 male and 6 female, 6 master +50 male, 6 male and 6 female teenagers, 5 scaled teams and 5 rx teams, are the ones who will confront each other in a last wod on Sunday to achieve a place on the podium.</p>
                </div>
              </div>
            </div>
            <div class="card bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%">
              <a class="collapsed" data-toggle="collapse" href="#collapseUndecimo" aria-expanded="false" aria-controls="collapseUndecimo">
                <div class="card-header" role="tab" id="headingUndecimo">
                  <h3 class="mb-0">When is the registration deadline?</h3>
                </div>
              </a>
              <div id="collapseUndecimo" class="collapse" role="tabpanel" aria-labelledby="headingUndecimo" data-parent="#accordion">
                <div class="card-body">
                  <p>On February 17, 2018 at 12:00.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center bg-secondary" id="patrocinadores">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mb-5 text-white display-5 bloque" data-move-y="200px" data-scale="5">SPONSORS</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="-500px" data-rotate="90deg">
          <a href="http://ochowear.es/" title="OCHOWEAR" target="_blank">
            <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 232 155" enable-background="new 0 0 232 155" width="232" height="155"><!--<path d="M0 0h232v155H0z"/>--><path fill="#FEEE00" d="M15.2 118c0-1.1.2-2 .5-2.7.3-.7 1-1.4 1.9-2 .8-.6 1.7-1 2.7-1.4 1-.3 2.2-.5 3.7-.7 1.5-.1 3.3-.2 5.4-.3 2.1 0 5.4-.1 9.8-.1s7.7 0 9.8.1c2.1 0 3.9.1 5.4.3 1.5.1 2.7.4 3.7.7 1 .3 1.9.8 2.7 1.4.9.6 1.6 1.3 1.9 2 .3.7.5 1.6.5 2.7v13.1c0 1.1-.2 2-.5 2.8-.3.8-1 1.4-1.9 2-.8.6-1.7 1-2.7 1.3-1 .3-2.3.5-3.8.7-1.5.1-3.4.2-5.6.3-2.2 0-5.4.1-9.6.1-4.2 0-7.4 0-9.5-.1-2.2 0-4-.1-5.5-.3-1.5-.1-2.8-.4-3.7-.7-1-.3-1.9-.7-2.7-1.3-.9-.6-1.6-1.3-1.9-2-.3-.8-.5-1.7-.5-2.8V118zm10.3 12c0 .6.2 1 .7 1.2.5.2 1.3.3 2.6.3h20.7c1.2 0 2.1-.1 2.7-.4.6-.3.9-.6.9-1.1v-10.9c0-.6-.2-1.1-.7-1.3-.5-.2-1.4-.3-2.7-.3H28.9c-1.2 0-2.1.1-2.6.4-.5.3-.8.7-.8 1.2V130z"/><path fill="none" stroke="#FEEE00" stroke-miterlimit="10" d="M15.2 118c0-1.1.2-2 .5-2.7.3-.7 1-1.4 1.9-2 .8-.6 1.7-1 2.7-1.4 1-.3 2.2-.5 3.7-.7 1.5-.1 3.3-.2 5.4-.3 2.1 0 5.4-.1 9.8-.1s7.7 0 9.8.1c2.1 0 3.9.1 5.4.3 1.5.1 2.7.4 3.7.7 1 .3 1.9.8 2.7 1.4.9.6 1.6 1.3 1.9 2 .3.7.5 1.6.5 2.7v13.1c0 1.1-.2 2-.5 2.8-.3.8-1 1.4-1.9 2-.8.6-1.7 1-2.7 1.3-1 .3-2.3.5-3.8.7-1.5.1-3.4.2-5.6.3-2.2 0-5.4.1-9.6.1-4.2 0-7.4 0-9.5-.1-2.2 0-4-.1-5.5-.3-1.5-.1-2.8-.4-3.7-.7-1-.3-1.9-.7-2.7-1.3-.9-.6-1.6-1.3-1.9-2-.3-.8-.5-1.7-.5-2.8V118zm10.3 12c0 .6.2 1 .7 1.2.5.2 1.3.3 2.6.3h20.7c1.2 0 2.1-.1 2.7-.4.6-.3.9-.6.9-1.1v-10.9c0-.6-.2-1.1-.7-1.3-.5-.2-1.4-.3-2.7-.3H28.9c-1.2 0-2.1.1-2.6.4-.5.3-.8.7-.8 1.2V130z"/><path fill="#FEEE00" d="M67.1 122.5v-3.9c0-2.5 1-4.3 2.9-5.6 1.9-1.3 4.9-1.9 8.9-1.9h31.4v6.6h-30c-1.1 0-1.9.1-2.4.4-.5.3-.8.6-.8 1l-.1 2.2v6.4l.1 2.1c0 .5.3.9.8 1.2.5.3 1.3.4 2.4.4h30.2v6.5H79c-4 0-7-.6-8.9-1.9-1.9-1.3-2.9-3.1-2.9-5.5v-8z"/><path fill="none" stroke="#FEEE00" stroke-miterlimit="10" d="M67.1 122.5v-3.9c0-2.5 1-4.3 2.9-5.6 1.9-1.3 4.9-1.9 8.9-1.9h31.4v6.6h-30c-1.1 0-1.9.1-2.4.4-.5.3-.8.6-.8 1l-.1 2.2v6.4l.1 2.1c0 .5.3.9.8 1.2.5.3 1.3.4 2.4.4h30.2v6.5H79c-4 0-7-.6-8.9-1.9-1.9-1.3-2.9-3.1-2.9-5.5v-8z"/><path fill="#FEEE00" d="M125.8 128v10h-11.4v-26.8h11.4v9.6h24.3v-9.6h11.4V138h-11.4v-10z"/><path fill="none" stroke="#FEEE00" stroke-miterlimit="10" d="M125.8 128v10h-11.4v-26.8h11.4v9.6h24.3v-9.6h11.4V138h-11.4v-10z"/><path fill="#FEEE00" d="M165.5 118c0-1.1.2-2 .5-2.7.3-.7 1-1.4 1.9-2 .8-.6 1.7-1 2.7-1.4 1-.3 2.2-.5 3.7-.7 1.5-.1 3.3-.2 5.4-.3 2.1 0 5.4-.1 9.8-.1s7.7 0 9.8.1c2.1 0 3.9.1 5.4.3 1.5.1 2.7.4 3.7.7 1 .3 1.9.8 2.7 1.4.9.6 1.6 1.3 1.9 2 .3.7.5 1.6.5 2.7v13.1c0 1.1-.2 2-.5 2.8-.3.8-1 1.4-1.9 2-.8.6-1.7 1-2.7 1.3-1 .3-2.3.5-3.8.7-1.5.1-3.4.2-5.6.3-2.2 0-5.4.1-9.6.1-4.2 0-7.4 0-9.5-.1-2.2 0-4-.1-5.5-.3-1.5-.1-2.8-.4-3.7-.7-1-.3-1.9-.7-2.7-1.3-.9-.6-1.6-1.3-1.9-2-.3-.8-.5-1.7-.5-2.8V118zm10.3 12c0 .6.2 1 .7 1.2.5.2 1.3.3 2.6.3h20.7c1.2 0 2.1-.1 2.7-.4.6-.3.9-.6.9-1.1v-10.9c0-.6-.2-1.1-.7-1.3-.5-.2-1.4-.3-2.7-.3h-20.8c-1.2 0-2.1.1-2.6.4-.5.3-.8.7-.8 1.2V130z"/><path fill="none" stroke="#FEEE00" stroke-miterlimit="10" d="M165.5 118c0-1.1.2-2 .5-2.7.3-.7 1-1.4 1.9-2 .8-.6 1.7-1 2.7-1.4 1-.3 2.2-.5 3.7-.7 1.5-.1 3.3-.2 5.4-.3 2.1 0 5.4-.1 9.8-.1s7.7 0 9.8.1c2.1 0 3.9.1 5.4.3 1.5.1 2.7.4 3.7.7 1 .3 1.9.8 2.7 1.4.9.6 1.6 1.3 1.9 2 .3.7.5 1.6.5 2.7v13.1c0 1.1-.2 2-.5 2.8-.3.8-1 1.4-1.9 2-.8.6-1.7 1-2.7 1.3-1 .3-2.3.5-3.8.7-1.5.1-3.4.2-5.6.3-2.2 0-5.4.1-9.6.1-4.2 0-7.4 0-9.5-.1-2.2 0-4-.1-5.5-.3-1.5-.1-2.8-.4-3.7-.7-1-.3-1.9-.7-2.7-1.3-.9-.6-1.6-1.3-1.9-2-.3-.8-.5-1.7-.5-2.8V118zm10.3 12c0 .6.2 1 .7 1.2.5.2 1.3.3 2.6.3h20.7c1.2 0 2.1-.1 2.7-.4.6-.3.9-.6.9-1.1v-10.9c0-.6-.2-1.1-.7-1.3-.5-.2-1.4-.3-2.7-.3h-20.8c-1.2 0-2.1.1-2.6.4-.5.3-.8.7-.8 1.2V130z"/><path fill="#FEEE00" d="M15.2 101.9h202.2v6.3H15.2z"/><path fill="none" stroke="#FEEE00" stroke-miterlimit="10" d="M15.2 101.9h202.2v6.3H15.2z"/><path fill="#FEEE00" d="M15.2 141.1h202.2v6.3H15.2z"/><path fill="none" stroke="#FEEE00" stroke-miterlimit="10" d="M15.2 141.1h202.2v6.3H15.2z"/><path fill="#FEEE00" d="M93.9 96.1c-3.7 0-7.2-1-10.4-2.9s-6-4.5-8.4-7.9c-2.4-3.3-4.3-7.2-5.7-11.7-1.4-4.5-2.1-9.3-2.1-14.4v-15c0-5 .7-9.8 2.1-14.2 1.4-4.5 3.3-8.4 5.7-11.7 2.4-3.3 5.2-5.9 8.4-7.9 3.2-1.9 6.7-2.9 10.4-2.9h44.9c3.7 0 7.2 1 10.4 2.9s6 4.5 8.4 7.9c2.4 3.3 4.3 7.2 5.7 11.7 1.4 4.5 2.1 9.2 2.1 14.2v15.1c0 5.1-.7 9.9-2.1 14.4-1.4 4.5-3.3 8.4-5.7 11.7-2.4 3.3-5.2 5.9-8.4 7.9-3.2 1.9-6.7 2.9-10.4 2.9H93.9zm61.3-51.9c0-3.1-.4-6-1.3-8.8-.9-2.8-2-5.2-3.5-7.3-1.5-2.1-3.2-3.7-5.2-4.9-2-1.2-4.1-1.8-6.4-1.8H93.9c-2.3 0-4.4.6-6.4 1.8-2 1.2-3.8 2.8-5.3 4.9-1.5 2.1-2.7 4.5-3.6 7.3-.9 2.8-1.3 5.7-1.3 8.8v15.1c0 3.2.4 6.1 1.3 8.9.9 2.8 2 5.2 3.6 7.2 1.5 2 3.3 3.7 5.3 4.9 2 1.2 4.1 1.8 6.4 1.8h44.9c2.3 0 4.4-.6 6.4-1.8 2-1.2 3.7-2.8 5.2-4.9 1.5-2 2.6-4.5 3.5-7.2.9-2.8 1.3-5.7 1.3-8.9V44.2z"/><path fill="none" stroke="#FEEE00" stroke-miterlimit="10" d="M93.9 96.1c-3.7 0-7.2-1-10.4-2.9s-6-4.5-8.4-7.9c-2.4-3.3-4.3-7.2-5.7-11.7-1.4-4.5-2.1-9.3-2.1-14.4v-15c0-5 .7-9.8 2.1-14.2 1.4-4.5 3.3-8.4 5.7-11.7 2.4-3.3 5.2-5.9 8.4-7.9 3.2-1.9 6.7-2.9 10.4-2.9h44.9c3.7 0 7.2 1 10.4 2.9s6 4.5 8.4 7.9c2.4 3.3 4.3 7.2 5.7 11.7 1.4 4.5 2.1 9.2 2.1 14.2v15.1c0 5.1-.7 9.9-2.1 14.4-1.4 4.5-3.3 8.4-5.7 11.7-2.4 3.3-5.2 5.9-8.4 7.9-3.2 1.9-6.7 2.9-10.4 2.9H93.9zm61.3-51.9c0-3.1-.4-6-1.3-8.8-.9-2.8-2-5.2-3.5-7.3-1.5-2.1-3.2-3.7-5.2-4.9-2-1.2-4.1-1.8-6.4-1.8H93.9c-2.3 0-4.4.6-6.4 1.8-2 1.2-3.8 2.8-5.3 4.9-1.5 2.1-2.7 4.5-3.6 7.3-.9 2.8-1.3 5.7-1.3 8.8v15.1c0 3.2.4 6.1 1.3 8.9.9 2.8 2 5.2 3.6 7.2 1.5 2 3.3 3.7 5.3 4.9 2 1.2 4.1 1.8 6.4 1.8h44.9c2.3 0 4.4-.6 6.4-1.8 2-1.2 3.7-2.8 5.2-4.9 1.5-2 2.6-4.5 3.5-7.2.9-2.8 1.3-5.7 1.3-8.9V44.2z"/><path fill="#FEEE00" d="M87.5 35.4c.1-1.4.5-2.7 1.1-3.8.6-1.2 1.4-2.2 2.4-3.1 1-.9 2.1-1.6 3.3-2.1 1.2-.5 2.5-.8 3.9-.9h37.5c1.4 0 2.7.3 3.9.8 1.2.5 2.3 1.2 3.3 2.1.9.9 1.7 1.9 2.3 3.1.6 1.2 1 2.5 1.1 3.9v11.5c-.1 1.2-.2 2-.4 2.6-.2.5-.5 1.1-.9 1.6.6.7 1 1.5 1.1 2.4.1.8.2 1.7.2 2.7V67c-.1 1-.3 2.1-.7 3.1-.4 1-.9 2-1.7 3-1.1 1.4-2.3 2.4-3.7 2.9-1.4.6-2.9.8-4.7.8H98.2c-1.8 0-3.3-.3-4.7-.8-1.4-.6-2.6-1.5-3.7-2.9-.8-1-1.3-2-1.7-3-.4-1-.6-2.1-.7-3.1V56.1c0-.9.1-1.8.3-2.7.2-.8.5-1.6 1.1-2.4-.4-.5-.7-1.1-.9-1.6-.2-.5-.4-1.4-.4-2.5V35.4zm6.7 10.8c0 .3.2.6.5.7.3.1.6.2.8.2h42.6c.3 0 .7-.1 1-.2.3-.1.5-.4.5-.7v-9.8c-.2-.9-.7-1.6-1.3-2.1-.7-.5-1.4-.8-2.2-.8H97.8c-.8 0-1.5.3-2.2.8-.7.5-1.1 1.2-1.3 2.1v9.8zm4 22.7h37.4c.6 0 1.1-.1 1.5-.2.4-.1.8-.3 1.1-.4.3-.2.6-.5.9-.8.3-.3.4-.7.4-1.1V56.2c0-.4-.2-.7-.5-.8-.3-.1-.7-.2-1-.2H95.7c-.3 0-.7.1-1 .2-.3.1-.5.4-.5.8v10.2c0 .4.2.8.4 1.1.3.3.5.6.8.8.7.4 1.6.6 2.8.6"/><path fill="none" stroke="#FEEE00" stroke-miterlimit="10" d="M87.5 35.4c.1-1.4.5-2.7 1.1-3.8.6-1.2 1.4-2.2 2.4-3.1 1-.9 2.1-1.6 3.3-2.1 1.2-.5 2.5-.8 3.9-.9h37.5c1.4 0 2.7.3 3.9.8 1.2.5 2.3 1.2 3.3 2.1.9.9 1.7 1.9 2.3 3.1.6 1.2 1 2.5 1.1 3.9v11.5c-.1 1.2-.2 2-.4 2.6-.2.5-.5 1.1-.9 1.6.6.7 1 1.5 1.1 2.4.1.8.2 1.7.2 2.7V67c-.1 1-.3 2.1-.7 3.1-.4 1-.9 2-1.7 3-1.1 1.4-2.3 2.4-3.7 2.9-1.4.6-2.9.8-4.7.8H98.2c-1.8 0-3.3-.3-4.7-.8-1.4-.6-2.6-1.5-3.7-2.9-.8-1-1.3-2-1.7-3-.4-1-.6-2.1-.7-3.1V56.1c0-.9.1-1.8.3-2.7.2-.8.5-1.6 1.1-2.4-.4-.5-.7-1.1-.9-1.6-.2-.5-.4-1.4-.4-2.5V35.4zm6.7 10.8c0 .3.2.6.5.7.3.1.6.2.8.2h42.6c.3 0 .7-.1 1-.2.3-.1.5-.4.5-.7v-9.8c-.2-.9-.7-1.6-1.3-2.1-.7-.5-1.4-.8-2.2-.8H97.8c-.8 0-1.5.3-2.2.8-.7.5-1.1 1.2-1.3 2.1v9.8zm4 22.7h37.4c.6 0 1.1-.1 1.5-.2.4-.1.8-.3 1.1-.4.3-.2.6-.5.9-.8.3-.3.4-.7.4-1.1V56.2c0-.4-.2-.7-.5-.8-.3-.1-.7-.2-1-.2H95.7c-.3 0-.7.1-1 .2-.3.1-.5.4-.5.8v10.2c0 .4.2.8.4 1.1.3.3.5.6.8.8.7.4 1.6.6 2.8.6z"/><path fill="#333333" d="M112.4 85.1l-1.1 7.5h-3.1c-.3-1.2-.5-2.5-.7-3.9-.1.6-.3 1.9-.7 3.9h-3.1l-1.1-7.5h2.4l.3 2.6.3 2.5c.1-1.3.3-3 .7-5.1h2.6c0 .2.1 1 .3 2.5l.3 2.9c.1-1.8.4-3.6.7-5.3h2.2zM112.9 85.1h4.2v1.5h-1.7V88h1.5v1.5h-1.5v1.6h1.8v1.5h-4.3zM122.2 85.1l1.4 7.5h-2.5l-.1-1.3h-.9l-.1 1.3h-2.6l1.3-7.5h3.5zm-1.3 4.8c-.1-.8-.3-1.9-.4-3.2-.3 1.4-.4 2.5-.5 3.2h.9zM124 85.1h1.7c1.2 0 2 0 2.4.1.4.1.7.3 1 .5.3.3.4.8.4 1.4 0 .6-.1 1-.3 1.2-.2.2-.5.3-1.1.4.5.1.8.2 1 .4.2.2.3.3.3.4 0 .1.1.5.1 1.1v2h-2.3v-2.5c0-.4 0-.6-.1-.7-.1-.1-.3-.1-.6-.1v3.4H124v-7.6zm2.5 1.3v1.7c.3 0 .5 0 .6-.1.1-.1.2-.3.2-.6V87c0-.2-.1-.4-.2-.5-.1-.1-.3-.1-.6-.1"/><ellipse cx="167.9" cy="16.5" fill="none" stroke="#FEEE00" stroke-miterlimit="10" rx="5" ry="5.5"/><path fill="#FEEE00" d="M166 12.9h2.3c.3 0 .6.1.9.2.3.1.5.3.6.5.1.2.2.4.3.6.1.2.1.5.1.7 0 .3 0 .5-.1.7-.1.2-.2.4-.3.6-.1.2-.3.3-.5.4-.2.1-.4.2-.6.2l1.6 2.7h-.7l-1.6-2.6h-1.5v2.6h-.5v-6.6zm2.3 3.4c.2 0 .4 0 .6-.1.2-.1.3-.2.4-.3.1-.1.2-.3.3-.4.1-.2.1-.4.1-.6 0-.4-.1-.7-.4-1-.2-.2-.6-.3-1-.3h-1.7v2.7h1.7z"/></svg>
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-y="500px">
          <a href="http://www.maniakfitness.com/" title="Maniak Fitness" target="_blank">
            <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 232 159" width="232" height="159"><path fill="#EA7C1E" d="M165.4,152.1c11.5,0.1,23,0.5,34.5,0.6c2.8-0.1,5.6,0,8.4,0.1c-14.3,0.5-28.6,0.7-43,1 C165.4,153.4,165.4,152.5,165.4,152.1 M32.1,152.7c11.5-0.2,22.9-0.5,34.4-0.7c0,0.4,0,1.3,0,1.7c-14.3-0.2-28.5-0.5-42.8-0.9 C26.4,152.7,29.2,152.6,32.1,152.7 M88.3,146.5c1,0,2,0,3,0c0,4.1,0,8.2,0,12.3c-1,0-2,0-3,0C88.3,154.6,88.3,150.5,88.3,146.5 M152.7,146.7c1.3-1,3-0.5,4.5-0.3c0,1,0.1,2,0.1,2.9c-0.9-0.2-3.3-1.2-3.2,0.5c0.8,1.3,2.2,2,3.1,3.2c1.3,1.7,0.9,4.5-1,5.5 c-1.4,0.9-3.1,0.5-4.6,0.1c0-1,0-2,0.1-3c1.2,0.5,2.4,1.1,3.6,0.2c-0.6-1.8-2.6-2.5-3.5-4.1C150.7,150.1,151.1,147.7,152.7,146.7 M140,146.6c1.3-0.9,3-0.5,4.5-0.2c0,1,0,2,0.1,3c-1-0.2-2-1-3-0.3c-0.7,1.2,1.1,1.9,1.8,2.7c1.9,1.3,2.8,4.2,1.1,6 c-1.3,1.6-3.6,1.5-5.4,0.8c0-1,0-1.9,0-2.9c1,0.4,3.1,1.4,3.3-0.4c-0.7-1.3-2.2-1.9-3-3.1C138,150.5,138.2,147.8,140,146.6 M126.5,146.5c1.9,0,3.8,0,5.7,0c0,0.9,0,1.7,0,2.6c-0.9,0-1.8,0-2.7,0c0,0.6,0,1.7,0,2.2c0.8,0,1.6,0,2.3,0c0,0.9,0,1.7,0,2.6 c-0.8,0-1.6,0-2.3,0c0,0.5,0,1.6,0,2.1c0.9,0,1.8,0,2.7,0c0,0.9,0,1.8,0,2.7c-1.9,0-3.8,0-5.7,0 C126.5,154.6,126.5,150.5,126.5,146.5 M110.4,146.4c1,0,1.9,0.1,2.9,0.1c1.1,1.9,1.7,4.1,3.2,5.7c0.1-1.9,0-3.8,0-5.8 c1,0,1.9,0,2.9-0.1c0.1,4.1,0,8.2,0,12.3c-1,0-1.9,0-2.9,0c-1.1-2.2-2.2-4.4-3.1-6.6c-0.1,2.2-0.1,4.4-0.1,6.7c-1,0-1.9,0-2.9,0 C110.4,154.6,110.3,150.5,110.4,146.4 M97.4,146.4c2.3,0,4.5,0,6.8,0c0,1,0,1.9,0,2.9c-0.7,0-1.3,0-2,0c0,3.1,0,6.2,0,9.4 c-0.9,0-1.8,0-2.7,0c-0.1-3.1,0-6.3-0.1-9.4c-0.7,0-1.3,0-2,0C97.4,148.4,97.4,147.4,97.4,146.4 M76.2,146.5c1.9,0,3.7,0,5.6,0 c0,0.9,0,1.8,0,2.7c-0.9,0-1.8,0-2.7,0c0,0.5,0,1.6,0,2.1c0.8,0,1.6,0,2.5,0c0,0.9,0,1.7,0,2.6c-0.8,0-1.7,0-2.5,0 c0,1.6,0,3.2,0,4.8c-0.9,0-1.9,0-2.8,0C76.3,154.6,76.2,150.5,76.2,146.5 M128.9,102c3.3-0.2,6.6-0.4,9.9-0.7c0,11.2,0,22.5,0,33.7 c-3.3-0.2-6.6,0-9.9-0.2C129,123.9,129,113,128.9,102 M93.1,100.9c5.6,0.3,11.1,0.9,16.7,1.1c1.6,4.2,3.2,8.4,4.8,12.7 c0.3-4.1,0.1-8.3,0.1-12.4c3.4,0,6.8,0.1,10.2-0.2c0,10.9,0,21.8,0,32.7c-3.4,0-6.8,0-10.2,0c-1.7-4.4-3.6-8.7-5-13.1 c-0.4,4.4-0.1,8.9-0.2,13.3c-3.1,0-6.1,0.2-9.2,0.1c0-10.4,0-20.8,0-31.1c1.3,0,2.7,0.1,4,0.3C100.5,103.1,96.7,102.2,93.1,100.9 M81.3,124.4c-0.8,0.4-1.7,0.4-2.3,1.1c2.2,0.1,4.4,0,6.6,0.1c-0.7-4-1.4-7.9-2.1-11.9C82.4,117.1,82.2,120.9,81.3,124.4 M78.1,99.1 c3.5,0.4,7.1,0.9,10.6,1.2c2.9,11.6,5.8,23.2,9,34.8c-3.4,0.2-6.7,0.3-10.1,0.5c-0.3-1.4-0.6-2.9-0.8-4.3c-2.2,0-4.5,0.1-6.7,0.1 c-0.3,1.5-0.6,3-0.9,4.6c-3.3,0.2-6.7,0.5-10,0.7C71.9,124.1,74.9,111.6,78.1,99.1 M153.8,124.3c-1.4,0.3-2.9,0.6-4.3,0.9 c2.8,0.3,5.7,0.2,8.5,0.2c-0.8-4.1-1.4-8.2-2.2-12.2C155.1,116.9,154.4,120.6,153.8,124.3 M150.4,100.2c3.6-0.5,7.2-0.9,10.7-1.4 c3,12.6,6.1,25.3,8.9,38c-3.3-0.2-6.7-0.6-10-0.7c-0.3-1.6-0.6-3.1-0.9-4.7c-2.2,0-4.5-0.2-6.7-0.2c-0.3,1.4-0.3,3-1,4.3 c-3.3-0.1-6.6-0.3-9.9-0.4C144.6,123.4,147.6,111.8,150.4,100.2 M189.2,94.6c5.8-0.9,11.7-1.8,17.6-2.1c-3.5,1.5-7.1,2.8-10.5,4.4 c0.8-0.1,1.6-0.2,2.5-0.2c-1.5,5.4-3,10.8-4.5,16.2c-0.3,1-0.7,2-0.3,3.1c1.6,7,3.3,14,4.8,21c-0.8-0.1-1.7-0.2-2.5-0.4 c3.5,1.7,7.1,3.3,10.7,4.9c-2.2,0-4.3-0.5-6.4-0.8c-3.9-0.7-7.9-1.3-11.9-1.8c-1.3-6.1-2.6-12.2-3.9-18.3c-0.6,0-1.3,0-1.9,0 c0,5.8,0,11.6,0,17.4c-3.4-0.2-6.8-0.7-10.2-1c0-13.3,0-26.6,0-40c3.4-0.5,6.8-1,10.2-1.5c0,6.1,0,12.1,0,18.2c0.3,0,1,0,1.3,0.1 C185.9,107.3,187.6,101,189.2,94.6 M25.1,92.3c6.8,0.6,13.5,1.2,20.2,2.3c1.7,6.2,3.2,12.4,5.3,18.4c1.6-5.2,3.1-10.4,4.8-15.5 c0.3-0.5,0.3-1.7,1.2-1.4c3.3,0.4,6.6,0.9,10,1.4c0,13.1,0,26.2,0,39.3c-3.3,0.3-6.5,0.5-9.8,0.9c0-6.1,0.1-12.2-0.1-18.3 c-0.4,0.6-0.7,1.2-1,1.9c-1.8,4.7-3.4,9.4-5.1,14.1c-2-5.4-3.9-10.8-5.9-16.2c-0.2,0.8-0.3,1.7-0.2,2.5c0,5.8,0,11.6,0,17.4 c-6.6,0.8-13.1,1.7-19.7,2.7c3.6-1.7,7.2-3.4,11-4.7c-0.2,0-0.7-0.2-0.9-0.2c0-11,0-22,0-33c0-2.5-0.1-5.1,0.2-7.6 C31.7,95,28.3,93.9,25.1,92.3 M100.3,16.8c3.5-2.3,7.4-3.9,11.3-5.3c-0.8,1.9-2.1,3.6-2.3,5.7c-0.6,4.8,1.2,9.5,2.9,13.9 c1.7,4,3.5,7.9,5.3,11.9c1.7-4.8,3.9-9.3,6-13.9c1.5-3.4,2.9-7.1,2.6-10.9c0-2.4-1.3-4.5-2.4-6.6c7.1,2.2,14.3,5.8,18.5,12.1 c1.3,2.3,3.1,4.6,3.3,7.3c-2.1,13.3-6.6,26.6-15.7,36.8c-1.6,2.2-4.6,2.3-7.1,3c3.2-7,6.3-14.2,8.2-21.7c1.6-6.2,2.2-12.5,2.2-18.9 c-5.4,11-10.3,22.3-15.7,33.3c-5.3-11-10.6-22-16-32.9c0.3,13.9,4.4,27.5,10.5,40c-1.7-0.5-3.7-0.6-5.2-1.7 C96.6,58.8,91.2,44.7,89.4,30.7C91.6,25.2,95.2,20,100.3,16.8 M111.9,7c-7.1,1.1-13.9,4.6-18.9,9.8c-10.8,10.5-13,28.2-5.5,41.2 c4.3,7.5,11.4,13.3,19.6,15.9c9.1,2.9,19.5,1.8,27.7-3.1c5.9-3.4,10.7-8.6,13.6-14.7c4.4-8.9,4.6-19.7,0.6-28.8 c-3.3-7.6-9.4-14-17-17.4C125.8,6.8,118.7,6,111.9,7 M104.8,2c10.2-3.3,21.8-2.4,31.4,2.5c11.9,6,20.4,18.2,22,31.5 c6.1,1.7,12.3,3.2,18.5,4.9c-6.1,1.7-12.3,3.2-18.5,4.9c-1,8-4.3,15.6-9.5,21.7c-6.3,7.4-15.4,12.5-25,13.9c-10,1.6-20.6-0.8-29-6.5 c-10-6.6-16.7-17.8-17.9-29.7c-6.1-1.6-12.3-2.6-18.3-4.5c6.1-1.5,12.2-2.7,18.2-4.3c0.8-5.5,2.3-10.9,5.2-15.8 C86.7,11.9,95.1,5.1,104.8,2"/></svg>
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="500px" data-rotate="-90deg">
          <a href="https://wodbox.es/" title="Wodbox Sport Shop" target="_blank">
            <img class="img-fluid" src="img/logo-wodbox.png" width="232" height="159" alt="logo wodbox sport shop">
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="500px" data-move-y="500px" data-rotate="-90deg">
          <a href="http://www.banbroken.com/" title="Tienda deportiva Banbroken" target="_blank">
            <img class="img-fluid" src="img/logo-banbroken.png" width="232" height="159" alt="logo banbroken">
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="-500px" data-rotate="90deg">
          <a href="https://www.valkyriagear.com/" title="Valkyria Gear - Ropa y Accesorios para Crossfit y Fitness" target="_blank">
            <img class="img-fluid" src="img/logo-valkyria-gear.png" width="232" height="159" alt="logo valkyriag gear">
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-y="500px">
          <a href="https://www.jvsports.es/" title="JVSPORT – Were are Winners!" target="_blank">
            <img class="img-fluid" src="img/logo-jv-sports.png" width="232" height="159" alt="logo jv sports">
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="500px" data-rotate="-90deg">
          <a href="http://bicibio.com/" title="BiciBio - cítricos de agricultura ecológica" target="_blank">
            <img class="img-fluid" src="img/logo-bici-bio.png" width="232" height="159" alt="logo bici bio">
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="500px" data-move-y="500px" data-rotate="-90deg">
          <a href="http://www.agaliahotel.es/" title="Agalia Hotel" target="_blank">
            <img class="img-fluid" src="img/logo-agalia-hotel.png" width="232" height="159" alt="logo agalia hotel">
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="500px" data-move-y="500px" data-rotate="-90deg">
          <a href="http://www.hotelazarbe.com/" title="Hotel Azarbe" target="_blank">
            <img class="img-fluid" src="img/logo-azarbe-hotel.jpg" width="232" height="159" alt="logo azarbe hotel">
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="500px" data-rotate="-90deg">
          <a href="https://www.scienceforyou.es/" title="SFY - Profesional Nutrition" target="_blank">
            <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 232 159" width="232" height="159"><path fill="#fff" d="M56.7 69.7c2.5-11.1 5-22.5 6.5-29.5L53 50.2c-.7.7-1.8.9-2.5.4-4.8-3.6-16.2-6.2-18.9 2.3-1.4 4.2 5.5 6.6 8.7 7.2h.1c6.1 1.6 13.1 4.2 16.3 9.6zM104 24.3c-14.5-2-17.1 11.3-17.1 11.3h17.3c1 0 1.8.7 2 1.6l8.3 35.3c.5 2 3.2 2.2 4 .4L140.1 22c.8-1.8 3.3-1.7 4 .1l10.7 26.7c.2.5.2 1.1-.1 1.6l-46.2 106c-.8 1.8-3.4 1.7-4-.2l-8.8-25.7c-.2-.5-.1-1.1.1-1.6l9.5-20.8c1-1.9.5-3.1-1.7-3.3l-1.4.1c-1 0-1.9-.6-2.1-1.6l-13-47c-.1-.5-.4-.9-.8-1.1-.4-.3-.8-.4-1.3-.4-1.2 0-2.1 1-2.1 2.1l-8.6 44.9c0 1.2-1 2.1-2.1 2.1H51.7c-1.2 0-2.1-1-2.1-2.1l1.5-6.6c-5.6 5.9-14.1 8.8-26.2 8.8-10.4 0-19.1-2.9-24.6-10.8-.5-.7-.3-1.6.4-2.3l10-9.7c.8-.8 1.9-.9 2.5-.3 7.5 7 19.2 9.1 23 3.7 2.9-4.1 1.3-8-5.5-9-35.6-5.8-21.8-43.9 11-44.3 6.6-.1 15.3 1.3 21.8 6.2.1.1.2.2.3.3.5-2.5.9-4 .9-4.2 0 0 3.9-33.9 35.6-32.3.9 0 1.6.7 1.9 1.5l3.9 18.8c.3 1.3-.7 2.9-2.1 2.7zM139.6 93.5l5.5-13.1h2.5l1.9 8 3.3-8h2.7L150 93.5h-2.5l-1.9-8.1-3.4 8.1h-2.6zM159.5 80.4l-3.7 8.8c-.1.3-.2.6-.2.8 0 .3.1.5.2.7.1.2.3.3.6.4.2.1.5.2.8.2.3 0 .6-.1 1-.2.3-.1.6-.3.9-.4.3-.2.6-.4.8-.7.2-.3.4-.5.5-.8l3.7-8.8h2.7l-3.7 8.8c-.3.6-.6 1.2-1.1 1.7-.5.5-1.1 1-1.7 1.4-.6.4-1.3.7-2 1-.7.2-1.4.4-2.1.4-.7 0-1.3-.1-1.8-.3-.5-.2-.9-.5-1.2-.9-.3-.4-.5-.9-.5-1.4 0-.5.1-1.1.3-1.8l3.7-8.8h2.8zM172.8 82.7l-4.5 10.8h-2.7l4.5-10.8h-3.4l1-2.4h9.4l-1 2.4h-3.3zM178.9 93.5l-1.1-6v-.3l-2.7 6.3h-2.7l5.5-13.1h4c.6 0 1.1.1 1.6.3.4.2.8.5 1 .8.2.4.4.8.4 1.2 0 .5-.1 1-.3 1.5-.3.7-.8 1.4-1.5 2-.7.6-1.5 1.1-2.4 1.4.1.5.2.9.3 1.4.1.5.2 1 .3 1.5.1.5.2 1 .3 1.5.1.5.2 1 .2 1.4h-2.9zm.9-7.8c.2 0 .5 0 .7-.1.2-.1.5-.2.7-.3.2-.1.4-.3.6-.5.2-.2.3-.4.4-.6.2-.4.2-.8 0-1.1-.2-.3-.5-.4-1-.4h-1.4l-1.3 3h1.3zM190.8 80.4l-5.5 13.1h-2.7l5.5-13.1h2.7zM196.5 82.7L192 93.5h-2.7l4.5-10.8h-3.4l1-2.4h9.4l-1 2.4h-3.3zM204.2 80.4l-5.5 13.1H196l5.5-13.1h2.7zM212.8 80.2c1 0 1.9.2 2.7.5.8.3 1.4.8 1.8 1.4.4.6.7 1.3.7 2.1.1.8-.1 1.7-.5 2.6-.4.9-.9 1.8-1.7 2.6-.7.8-1.6 1.5-2.5 2.1-2.1 1.3-4.1 2-6.2 2-2.1 0-3.6-.7-4.6-2-.4-.6-.6-1.3-.7-2.1-.1-.8.1-1.7.5-2.6.4-.9 1-1.8 1.7-2.6s1.6-1.5 2.5-2.1c.9-.6 1.9-1.1 3-1.4 1.2-.3 2.2-.5 3.3-.5zm1.9 3.7c-.6-.9-1.6-1.3-2.9-1.3s-2.7.4-4 1.3c-1.3.8-2.2 1.9-2.7 3.1-.2.6-.4 1.1-.3 1.7 0 .5.2 1 .5 1.4.3.4.7.7 1.2.9.5.2 1.1.3 1.8.3s1.3-.1 2-.3c.7-.2 1.3-.5 1.9-.9.6-.4 1.1-.8 1.6-1.4.5-.5.8-1.1 1.1-1.7.4-1.2.4-2.3-.2-3.1zM216.1 93.5l5.5-13.1h2.5l1.9 8 3.3-8h2.7l-5.5 13.1H224l-1.9-8.1-3.4 8.1h-2.6zM149.2 75.6l-1.2 2.8h-1.4l2.9-6.9h2.2c.3 0 .6.1.8.2.2.1.4.3.5.4.1.2.2.4.2.6 0 .2 0 .5-.2.8-.1.3-.3.5-.5.8-.2.2-.5.5-.8.6-.3.2-.6.3-.9.4-.3.1-.6.2-1 .2h-.6zm.5-1.2h.8c.1 0 .2 0 .4-.1.1 0 .2-.1.4-.2.1-.1.2-.2.3-.3.1-.1.2-.2.2-.3.1-.2.1-.4 0-.6-.1-.2-.3-.2-.5-.2h-.8l-.8 1.7zM154.5 78.5l-.6-3.2v-.2l-1.4 3.3h-1.4l2.9-6.9h2.1c.3 0 .6.1.8.2.2.1.4.3.5.4.1.2.2.4.2.6 0 .2 0 .5-.2.8-.2.4-.4.7-.8 1.1-.4.3-.8.6-1.3.8 0 .2.1.5.1.8.1.3.1.5.2.8 0 .3.1.5.1.8 0 .3.1.5.1.7h-1.3zm.5-4.1c.1 0 .2 0 .4-.1.1 0 .2-.1.4-.2.1-.1.2-.2.3-.3.1-.1.2-.2.2-.3.1-.2.1-.4 0-.6-.1-.2-.3-.2-.5-.2h-.7l-.7 1.6h.6zM163.1 71.5c.5 0 1 .1 1.4.3.4.2.7.4.9.8.2.3.4.7.4 1.1 0 .4-.1.9-.3 1.4-.2.5-.5.9-.9 1.4-.4.4-.8.8-1.3 1.1-1.1.7-2.2 1-3.3 1-1.1 0-1.9-.3-2.4-1-.2-.3-.3-.7-.4-1.1 0-.4 0-.9.3-1.4.2-.5.5-.9.9-1.4.4-.4.8-.8 1.3-1.1.5-.3 1-.6 1.6-.8.7-.2 1.2-.3 1.8-.3zm1 1.9c-.3-.5-.8-.7-1.5-.7s-1.4.2-2.1.7c-.7.4-1.2 1-1.4 1.6-.1.3-.2.6-.2.9 0 .3.1.5.2.7.1.2.3.4.6.5.3.1.6.2.9.2.4 0 .7-.1 1.1-.2.4-.1.7-.3 1-.5.3-.2.6-.4.9-.7.3-.3.4-.6.6-.9.2-.6.2-1.1-.1-1.6zM167.6 74.4h2.3l-.5 1.2h-2.3l-1.2 2.9h-1.4l2.9-6.9h4l-.5 1.3h-2.6l-.7 1.5zM174.9 72.8h-2.6l-.7 1.6h2.5l-.5 1.2h-2.5l-.7 1.6h2.9l-.5 1.3h-4.3l2.9-6.9h4l-.5 1.2zM179.4 73.5c-.2-.3-.3-.5-.4-.6-.1-.1-.2-.1-.3-.2-.2 0-.4-.1-.6-.1-.2 0-.3 0-.5 0-.1 0-.3.1-.4.1-.1.1-.2.1-.3.2-.1.1-.2.2-.2.3-.1.2.1.4.6.7.3.1.5.3.7.4.2.1.4.3.6.5.4.3.4.8.2 1.5-.1.3-.3.6-.6.9-.3.3-.5.5-.8.7-.3.2-.6.4-1 .5-.4.1-.7.2-1 .2-.2 0-.5 0-.7-.1-.2-.1-.4-.2-.6-.3-.2-.1-.3-.3-.4-.5-.1-.2-.1-.4-.1-.7l1.5-.6c0 .3 0 .5.2.7.1.2.3.2.6.2.2 0 .3 0 .5-.1s.3-.1.4-.2c.1-.1.3-.2.4-.3.1-.1.2-.2.2-.4.1-.3 0-.5-.2-.6-.1-.1-.2-.2-.3-.2s-.2-.1-.4-.2-.4-.2-.6-.4c-.2-.1-.4-.3-.5-.4-.3-.3-.3-.7 0-1.3.1-.3.3-.5.5-.7.2-.2.5-.4.8-.5.3-.2.6-.3.9-.3.3-.1.6-.1 1-.1s.7 0 .9.1.5.2.8.3l-.9 1.5zM184.4 73.5c-.2-.3-.3-.5-.4-.6-.1-.1-.2-.1-.3-.2-.2 0-.4-.1-.6-.1-.2 0-.3 0-.5 0-.1 0-.3.1-.4.1-.1.1-.2.1-.3.2-.1.1-.2.2-.2.3-.1.2.1.4.6.7.3.1.5.3.7.4.2.1.4.3.6.5.4.3.4.8.2 1.5-.1.3-.3.6-.6.9-.3.3-.5.5-.8.7-.3.2-.6.4-1 .5-.4.1-.7.2-1 .2-.2 0-.5 0-.7-.1-.2-.1-.4-.2-.6-.3-.2-.1-.3-.3-.4-.5-.1-.2-.1-.4-.1-.7l1.5-.6c0 .3 0 .5.2.7.1.2.3.2.6.2.2 0 .3 0 .5-.1s.3-.1.4-.2c.1-.1.3-.2.4-.3.1-.1.2-.2.2-.4.1-.3 0-.5-.2-.6-.1-.1-.2-.2-.3-.2s-.2-.1-.4-.2-.4-.2-.6-.4c-.2-.1-.4-.3-.5-.4-.3-.3-.3-.7 0-1.3.1-.3.3-.5.5-.7.2-.2.5-.4.8-.5.3-.2.6-.3.9-.3.3-.1.6-.1 1-.1s.7 0 .9.1c.3.1.5.2.8.3l-.9 1.5zM187.3 71.6l-2.9 6.9H183l2.9-6.9h1.4zM191.5 71.5c.5 0 1 .1 1.4.3.4.2.7.4.9.8.2.3.4.7.4 1.1 0 .4-.1.9-.3 1.4-.2.5-.5.9-.9 1.4-.4.4-.8.8-1.3 1.1-1.1.7-2.2 1-3.3 1-1.1 0-1.9-.3-2.4-1-.2-.3-.3-.7-.4-1.1 0-.4 0-.9.3-1.4.2-.5.5-.9.9-1.4.4-.4.8-.8 1.3-1.1.5-.3 1-.6 1.6-.8.7-.2 1.3-.3 1.8-.3zm1 1.9c-.3-.5-.8-.7-1.5-.7s-1.4.2-2.1.7c-.7.4-1.2 1-1.4 1.6-.1.3-.2.6-.2.9 0 .3.1.5.2.7.1.2.3.4.6.5.3.1.6.2.9.2.4 0 .7-.1 1.1-.2.4-.1.7-.3 1-.5.3-.2.6-.4.9-.7.3-.3.4-.6.6-.9.3-.6.2-1.1-.1-1.6zM193 78.5l2.9-6.9h1.3l1 4.2 1.8-4.2h1.4l-2.9 6.9h-1.3l-1-4.2-1.8 4.2H193zM198.6 78.5l5.4-6.9h1.4l-.3 6.9h-1.5l.1-1.5h-2.4c-.2.2-.4.5-.6.7-.2.3-.4.5-.6.7h-1.5zm5.2-4.8c-.3.4-.6.7-.8 1.1-.3.3-.6.7-.9 1.1h1.6l.1-2.2zM209.5 71.6l-2.4 5.6h2.4l-.5 1.3h-3.8l2.9-6.9h1.4zM157.6 45.3c-1 0-1.9-.6-2.3-1.6l-9.9-24.8c-.3-.9-.2-1.8.3-2.6.5-.7 1.2-1.1 2-1.1h20.6c.8 0 1.6.4 2.1 1.1.5.8.6 1.8.2 2.6l-10.7 24.8c-.5 1-1.3 1.6-2.3 1.6zm-10-29.1c-.5 0-.9.2-1.2.7-.3.5-.4 1.1-.2 1.7l9.9 24.8c.2.6.8 1 1.4 1 .6 0 1.1-.4 1.4-1l10.7-24.8c.2-.6.2-1.2-.1-1.7-.3-.4-.7-.7-1.2-.7h-20.7z"/></svg>
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="500px" data-rotate="-90deg">
          <a href="https://www.trainlikefight.com/?lang=es" title="C. G. LABS – Metcon Tactical Vest" target="_blank">
            <img class="img-fluid" src="img/logo-cglabs.png" width="232" height="159" alt="logo C. G. LABS">
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="500px" data-rotate="-90deg">
          <a href="https://www.mesadelcastillo.com/" title="Hospital en Murcia Mesa del Castillo" target="_blank">
            <img class="img-fluid" src="img/logo-mesa-del-castillo.png" width="232" height="159" alt="logo mesa del castillo">
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="500px" data-rotate="-90deg">
          <a href="https://tienda.xhen.es/" title="XHEN - Productos Deportivos con inspiración militar" target="_blank">
            <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 232 159" width="232" height="159"><g fill="#fff"><path d="M114.3 41.3c-3.9 0-7 3.1-7 7v15.3H95.1V48.3c0-3.9-3.1-7-7-7s-7 3.1-7 7V92.6c0 3.9 3.1 7 7 7s7-3.1 7-7v-15h12.1v15c0 3.9 3.1 7 7 7s7-3.1 7-7V48.3c.1-3.9-3-7-6.9-7zM172.8 70.5c0 3.9-3.1 7-7 7h-25.7c-3.9 0-7-3.1-7-7s3.1-7 7-7h25.7c3.9-.1 7 3.1 7 7zM172.8 92.5c0 3.9-3.1 7-7 7h-25.7c-3.9 0-7-3.1-7-7s3.1-7 7-7h25.7c3.9.1 7 3.2 7 7zM172.8 48.3c0 3.9-3.1 7-7 7h-25.7c-3.9 0-7-3.1-7-7s3.1-7 7-7h25.7c3.9 0 7 3.2 7 7zM60.3 70.6c0-6.3-2.1-12.1-5.7-16.8L65 41.3H49.1l-3.8 4.6c-3.8-2-8.1-3.1-12.7-3.1s-8.9 1.1-12.7 3.1L16 41.3H0l10.4 12.5c-3.6 4.7-5.6 10.5-5.6 16.8 0 6.3 2.1 12.1 5.6 16.8L0 99.8h15.9l3.8-4.6c3.8 2 8.1 3.1 12.7 3.1s8.9-1.1 12.7-3.1l3.8 4.6H65L54.5 87.4c3.6-4.7 5.8-10.5 5.8-16.8zM32.5 44c4.3 0 8.4 1 11.9 2.8L32.5 61.1 20.6 46.9C24.2 45 28.2 44 32.5 44zM11.2 86.4C7.9 82 6 76.5 6 70.6c0-6 1.9-11.4 5.3-15.9l13.3 15.9-13.4 15.8zm21.3 10.7c-4.3 0-8.4-1-11.9-2.8l11.9-14.2 11.9 14.2c-3.5 1.8-7.6 2.8-11.9 2.8zm8-26.5l13.3-15.9c3.3 4.4 5.3 9.9 5.3 15.9S57.2 82 53.8 86.5L40.5 70.6zM216.1 41.3c-3.9 0-7 3.1-7 7v16.8l-9.3-16.8-2-3.7c-1.2-2-3.5-3.4-6-3.4-3.9 0-7 3.1-7 7V92.5c0 3.9 3.1 7 7 7s7-3.1 7-7V75.8l9.3 16.8 2 3.7c1.2 2 3.5 3.4 6 3.4 3.9 0 7-3.1 7-7V48.3c0-3.9-3.2-7-7-7zM1.3 106.2h5.2l4.1 10.5 4.1-10.5h5.2v17.3h-3.7V113l-4 10.5H9L5 113v10.5H1.3v-17.3zM26 106.2v17.3h-3.7v-17.3H26zM32.2 119.8h7.4v3.7H28.5v-17.3h3.7v13.6zM45.8 106.2v17.3h-3.7v-17.3h3.7zM60.6 106.2v3.7h-4.3v13.6h-3.7v-13.6h-4.3v-3.7h12.3zM77.9 123.5h-3.7l-1.2-3.7h-6.4l-1.2 3.7h-3.7l5.2-17.3h5.7l5.3 17.3zm-10.1-7.4H72l-2-6.2-2.2 6.2zM85.3 117.3h-2.5v6.2h-3.7v-17.3h7.4c3.3 0 4.9 1.7 4.9 4.9v1.2c0 2-.7 3.5-2.3 4.3l2.3 6.8h-3.7l-2.4-6.1zm-2.4-7.4v3.7h3.7c.8 0 1.2-.4 1.2-1.2v-1.2c0-.8-.4-1.2-1.2-1.2h-3.7zM96.6 106.2l3.6 6.2 3.6-6.2h3.8l-5.6 9.9v7.4h-3.7v-7.4l-5.6-9.9h3.9zM118.7 123.5c-3.3 0-4.9-1.7-4.9-4.9 0-2.2.7-3.5 2.1-3.7-1.4-.2-2.1-1.5-2.1-3.7 0-3.3 1.7-4.9 4.9-4.9h6.2v3.7h-6.2c-.8 0-1.2.4-1.2 1.2v.6c0 .8.4 1.2 1.2 1.2h3.7v-1.2h3.7v1.2h1.2v3.7h-1.2v6.8h-7.4zm-1.2-5c0 .8.4 1.2 1.2 1.2h3.7v-3.1h-3.7c-.8 0-1.2.4-1.2 1.2v.7zM134.8 123.5v-3.7h7.4c.8 0 1.2-.4 1.2-1.2v-.6c0-.8-.4-1.2-1.2-1.2h-2.5c-3.3 0-4.9-1.7-4.9-4.9v-.6c0-3.3 1.7-4.9 4.9-4.9h7.4v3.7h-7.4c-.8 0-1.2.4-1.2 1.2v.6c0 .8.4 1.2 1.2 1.2h2.5c3.3 0 4.9 1.7 4.9 4.9v.6c0 3.3-1.7 4.9-4.9 4.9h-7.4zM153.3 117.3v6.2h-3.7v-17.3h7.4c3.3 0 4.9 1.7 4.9 4.9v1.2c0 3.3-1.7 4.9-4.9 4.9h-3.7zm0-7.4v3.7h3.7c.8 0 1.2-.4 1.2-1.2v-1.2c0-.8-.4-1.2-1.2-1.2h-3.7zM177.4 118.5c0 3.3-1.7 4.9-4.9 4.9h-3.1c-3.3 0-4.9-1.7-4.9-4.9v-7.4c0-3.3 1.7-4.9 4.9-4.9h3.1c3.3 0 4.9 1.7 4.9 4.9v7.4zm-9.3 0c0 .8.4 1.2 1.2 1.2h3.1c.8 0 1.2-.4 1.2-1.2v-7.4c0-.8-.4-1.2-1.2-1.2h-3.1c-.8 0-1.2.4-1.2 1.2v7.4zM186.1 117.3h-2.5v6.2h-3.7v-17.3h7.4c3.3 0 4.9 1.7 4.9 4.9v1.2c0 2-.7 3.5-2.3 4.3l2.3 6.8h-3.7l-2.4-6.1zm-2.5-7.4v3.7h3.7c.8 0 1.2-.4 1.2-1.2v-1.2c0-.8-.4-1.2-1.2-1.2h-3.7zM207.1 106.2v3.7h-4.3v13.6H199v-13.6h-4.3v-3.7h12.4zM209.6 123.5v-3.7h7.4c.8 0 1.2-.4 1.2-1.2v-.6c0-.8-.4-1.2-1.2-1.2h-2.5c-3.3 0-4.9-1.7-4.9-4.9v-.6c0-3.3 1.7-4.9 4.9-4.9h7.4v3.7h-7.4c-.8 0-1.2.4-1.2 1.2v.6c0 .8.4 1.2 1.2 1.2h2.5c3.3 0 4.9 1.7 4.9 4.9v.6c0 3.3-1.7 4.9-4.9 4.9h-7.4zM230.9 41.8c-1.4 1.4-3.8 1.4-5.3 0-1.4-1.4-1.4-3.8 0-5.3 1.4-1.4 3.8-1.4 5.3 0 .7.7 1.1 1.7 1.1 2.6 0 1.1-.4 2-1.1 2.7zm-4.9-4.9c-.6.6-1 1.4-.9 2.3 0 .8.3 1.7.9 2.3 1.2 1.2 3.3 1.3 4.5 0 1.2-1.3 1.2-3.3 0-4.6-1.2-1.2-3.3-1.2-4.5 0zm2.2.2c.4 0 .8 0 1.2.1.4.2.7.6.6 1 0 .3-.1.6-.4.8-.2.1-.4.2-.6.2.3 0 .5.2.7.4.1.2.2.4.2.6v.3c0 .1 0 .2 0 .3 0 .1 0 .1 0 .2h-.7v-.5c0-.4-.1-.7-.4-.9-.2-.1-.5-.1-.8-.1h-.6v1.6h-.7V37l1.5.1zm.8.7c-.3-.1-.6-.2-.9-.1h-.6v1.5h.6c.2 0 .5 0 .7-.1.4-.2.5-.6.4-1-.1-.2-.2-.3-.2-.3z"/></g></svg>
          </a>
        </div>
        <div class="col-md-4 col-6 p-1 bloque" data-move-x="500px" data-rotate="-90deg">
          <a href="http://murcia.terranatura.com/" title="Terra Natura Murcia - Parque de Animales y Parque Acuático" target="_blank">
            <img class="img-fluid" src="img/logo-terra-natura.png" width="232" height="159" alt="logo terra natura murcia">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center bg-primary" id="organizadores">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mb-5 text-white display-5 bloque" data-move-y="200px" data-scale="5">ORGANIZERS</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 col-6 p-1 bloque" data-move-x="-500px" data-rotate="90deg">
          <a href="http://www.vivoboxcrossfit.com/" title="VivoBox CrossFit Murcia" target="_blank">
            <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90" width="176" height="155"><path fill="#010002" d="M71.6 15.4c-.6.1-1.2.2-1.8.3.1-.4.2-.8.3-1.2.1 0 .9 0 .9 0 .5 0 1-.2 1.4-.6.3-.4.5-.9.5-1.4-.1-1-.9-1.8-1.9-1.9-.2 0-.4 0-.6-.1 0-.1 0-.2-.1-.4-.2-.8-.3-1.6-.6-2.4-.8-2.4-2.3-3.9-4.5-4.4-.3-.1-.6-.1-1-.1H64c-.3 0-.6 0-.9 0-.8 0-1.7 0-2.5.2-1.4.2-2.5 1.1-3.4 2.5-.5.8-1.1 1.9-1.4 3.3-.2.1-.5.2-.6.5-.1.1-.1.1-.1.1-.2 0-.3 0-.5-.1-.3 0-.5-.1-.8-.1-.1 0-.2 0-.2 0-.1 0-.1 0-.2 0-.3 0-.5-.1-.9-.1-.3 0-.5-.1-.8-.1-.4 0-.8-.1-1.2-.1-.4 0-.8 0-1.2-.1-1.1-.1-2.2-.2-3.3-.3-1 .1-1.9 0-2.8-.1-.7-.1-1.3-.1-2-.1-.5 0-1 0-1.5-.1-.6 0-1.1 0-1.7-.1-1.3-.1-2.7-.1-4-.2-.3-.5-.7-.9-1.4-1-.3-1.8-.9-3.4-1.9-4.8C29.6.9 28.1.1 26.2.1c0 0-.2 0-.2 0-.5 0-.9 0-1.4-.1-.3 0-.7 0-1-.1h-.1c-1.3.1-2.5.8-3.5 2-1.2 1.5-1.9 3.3-2.1 5.2-.3 0-.5 0-.8-.1-.6 0-1.1-.1-1.7-.1h-.2c-.5 0-1.1.3-1.4.8-.4.5-.5 1.2-.3 1.7.4 1.2 1.2 1.4 1.9 1.4s1.5.1 2.2.2c.1 0 .1 0 .2 0 .2 1.4.5 2.8 1.2 4.1.3.5.6 1 .9 1.4-1.7-.2-3.4-.5-5.3-.8C6.3 34.1 12.2 75.8 43.7 90c29.1-13.8 37.8-51.5 27.9-74.6zm-18.1-2.7c.4 0 .7 0 1 .1.1 0 .3.2.5.3.1.1.2.2.3.2-.3.6-.8 1-1.6 1.5-.6.4-1.1.8-1.5 1.3-.1 0-.1 0-.2 0 0-.1 0-.3 0-.4 0-.5 0-1.1-.2-1.6-.3-.7-1-1.2-1.6-1.5l3.3.1zm-7.3-.4c-.1 0-.2.1-.3.1l-.1-.2c.1.1.3.1.4.1zM35 11.5c.2 0 .3 0 .5.1.4 0 .8 0 1.2 0 .8 0 1.7 0 2.5.1 1.4.1 2.7.2 4.1.4.4 0 .8.1 1.2.1l-.8.3.5 1.3c-.2.3-.4.6-.5.8-.2-.1-.5-.1-.7-.2-1.7.5-3.3.9-4.9 1.3-.5-.8-1.2-1.5-1.8-2.1-.2-.2-.4-.3-.5-.5-.3-.3-.5-.6-.7-1-.1-.2-.2-.4-.4-.6 0 0 0-.1 0-.1s.2 0 .3.1zm-3.5 3.8c.2.3.3.5.5.8.1.2.2.4.3.6-.6.1-1.2.1-1.8.2.4-.6.7-1.1 1-1.6z"/><path fill="#fff" d="M89.2 61.5c-.3-.2-.5-.5-.8-.7-.2-.1-.3-.3-.5-.4-.6-.5-1.1-1-1.7-1.5l-.2-.1 1.9-3.8-5.1-1.6-1.3 2.1-.5-.4c-.9-.8-1.8-1.7-2.7-2.5-.4-.3-.8-.7-1.4-.9-.7-.2-1.3-.4-2.1-.5-.3-.1-.6-.1-.9-.2l-3.7-1 .9.8c-.2-.1-.5-.2-.7-.3h-.1l-5.9-1c-.4-.1-.8-.1-1.2-.1-.2 0-.3 0-.4 0l-12.1-3.1c.5-1.1 1-2.2 1.3-3.3.3-1 .5-2.1.7-3.1.1-.7.1-1.4.1-2.1 0-1.4-.8-2.1-1.9-2.6-.5-.2-.9-.2-1.4-.4-.8-.3-1.6-.7-2.3-1-.3-.1-.6-.2-1-.3.1-.2.2-.3.3-.5 1.4-1.9 2.5-3.9 3.1-6.2.3-1.3.3-2.6.9-3.8.2-.3.4-.7.8-.9 1.2-.6 2.3-1.4 3.3-2.3.7-.7 1.5-1.2 2.2-2 .4-.4.5-1 .8-1.5.4.6.8 1.2 1.2 1.7.8.9 1.9 1.5 3.2 1.4.8-.1 1.6 0 2.4 0 1.1.1 1.9-.4 2.7-1.1 1.3-1.2 1.9-2.7 2.2-4.4.1-.3.2-.4.5-.4.4 0 .9 0 1.3 0 .5 0 .9-.4.8-.9 0-.5-.5-.9-1-.9s-1-.1-1.4-.1c-.3-1.1-.4-2.3-.8-3.4-.6-1.8-1.7-3.3-3.7-3.8-.3-.1-.6-.1-.9-.1-1.1 0-2.2 0-3.2.2-1.2.2-2.1 1-2.7 2.1-.6.9-1.1 1.9-1.2 3 0 .3-.2.6-.6.7-.1 0-.1 0-.2.1-.7 1-1.6.3-2.4.4-.7.1-1.4-.2-2-.2-.8-.1-1.6-.1-2.4-.2-2-.2-4.1-.4-6.1-.5-.6-.1-1.3-.1-1.9-.1-1.1 0-2.1-.1-3.2-.1-1.4-.1-2.9-.2-4.3-.2-.1 0-.3-.1-.4-.2-.3-.7-.5-.8-1.4-.8 0 0-.1 0-.1 0-.1-1.9-.7-3.6-1.8-5.2-.9-1.3-2.1-2-3.7-2-.9 0-1.7-.1-2.6-.1-1.3 0-2.2.6-2.9 1.5-1.3 1.3-2 3-2.1 4.9 0 .3-.1.6-.5.5-1-.1-2-.1-3-.2-.5-.1-1 .6-.9 1.2.1.4.4.7.9.7 1.1 0 2.2.2 3.3.2.2 1.6.5 3.1 1.2 4.5.7 1.2 1.5 2.3 2.9 2.7.4.1.8.2 1.2.1 1.3 0 2.7.5 3.9-.1 1.4-.7 2.2-1.9 2.9-3.3.1-.2.2-.4.4-.9.6.9 1.1 1.6 1.5 2.4.5 1 1.1 1.9 2 2.6.8.6 1.5 1.2 2 2.1.6 1 1.3 2 2.7 2.3-.7 1.3-.6 2.5-.3 3.7.2.8.2 1.6-.6 2.2-.5.4-.8 1.1-1.1 1.7-.7 1-1.7 1.7-2.6 2.3-1 .8-1.4 1.8-1.6 3.1-.3 2.1.9 3.4 2.5 4.4.3.2.8.3 1.2.3.4.1.9 0 1.4 0-.1.9-.2 1.8-.3 2.8l-25.3-6.5c.2 4.8.9 9.8 2.1 14.7l-3.3.9-5.9 6.5-.4-4.7-1.2.3c-1.1.4-2.4.7-2.7.7H.4l.3 7.1c0 .7.1 1.3.5 1.7.3.3.7.6 1.6.6.2 0 .4 0 .6 0 1.3-.2 2.6-.8 3.8-1.8h.1l6.5-7.1-1.9 4.6c-.3.6-.2 1.1 0 1.3.2.3.6.5 1 .5.1 0 .2 0 .4 0l1.9-.4c.4-.1 1.2-.2 1.4-1.2l.5-1.5c.4 1.2.9 2.4 1.5 3.6 0 0-.1 0-.1 0h-.2l-.8.2c-.9.2-1.8.3-2.6.5l-.4.1c-.7.1-1.4.3-2 .6-1.8.9-2.3 2.8-2.7 4.2l-.1.4c-.1.5-.1.9.2 1.3.3.4.7.7 1.4.8.1 0 .3 0 .5 0 .3 0 .6 0 .8-.1.4-.1.9-.2 1.3-.3.8-.2 1.6-.3 2.4-.4.2 0 .5 0 .8-.2l1.5-.2c.2 0 .4-.1.5-.1.5-.1 1.1-.1 1.6-.4.5-.3.7-.8.8-1.2 4.4 7.8 11.4 15.8 22.2 20.9 8.8-4.3 16.2-11.2 21.5-20 .4.1.8.1 1.2.2l.5.1 1.5.2s-.9-3.4-1-3.9c.3 0 1.5.2 1.5.2.1 0 .3 0 .4.1 0 .1.1.3.1.5.2.8.4 1.5.7 2.3l.1.3c.2.7.7 1 1 1 .4.1.9.2 1.3.2l.9.1s0 0 .1 0c.4.1.9.2 1.3.2l2.1.3-1.3-3.8 2.9.6-.1-1.4c-.1-1.3-.5-2.1-2.1-2.3-.1 0-5.3-1.1-5.3-1.1-.1 0-.2-.1-.3-.1l-.3-.1c-.1 0-.1 0-.2 0s-.1 0-.2 0l-1.5-.2c.2-.4.4-.9.6-1.3l3.7.6c.3.1.7.1 1 .1.9 0 1.6-.3 2.1-.8l-.9 1s1.9.5 2 .5c.3.1.6.1.9.2.7.2 1.4.3 2 .5.2.1.5.1.7.1.6 0 1.1-.3 1.5-.8.3-.4.6-.8.9-1.2l5.4 4.7.6-1.3c.2-.3.3-.6.5-.9.2-.5.1-1.2-.3-1.6zm-71.3 4.4l-1.4.3c-.9.2-1.7.3-2.6.5.1-.3.3-.5.6-.6.9-.2 1.9-.4 2.8-.5.2 0 .5-.1.6-.1.1.1.1.3 0 .4zm21.5-48.1c-.4-.3-.8-.5-1.2-.8-.3-.2-.6-.4-.8-.7-.6-1-1.5-1.8-2.3-2.6-.5-.5-.8-1.2-1.2-1.8-.2-.3-.4-.6-.5-.8.4-1 1.2-.8 2-.7.1 0 .2 0 .4 0 1.2 0 2.5 0 3.7.1 2.1.2 4.2.4 6.4.6.6.1 1.3.1 1.9.1 1.9.1 3.8.2 5.7.4.5 0 1 0 1.5.1.3.1.6.3.8.4.3.2.7.5.9.7-.3 1.3-1.2 2-2.2 2.7-.5.3-1 .7-1.3 1.2-.4.7-.9 1.1-1.8 1.6 0-.6.1-1 .1-1.4 0 0 0 0 0-.1-.3-.8 0-1.8-.3-2.6-.2-.5-.8-.8-1.3-1.1-1.2-.7-2.4-.5-3.5.1-.2.1-.5.2-.7.2-.1-.2-.2-.5-.3-.7-.3.3-.4.3-.4.3.1.3.2.5.3.8-.9 1-1.4 2.2-.9 3.6.1.5.3 1 .4 1.5.1.5 0 1 0 1.6-.3-.1-.5-.1-.6-.2-1-.7-2-1.3-3.2-1.5-.6-.1-1.1-.6-1.6-1zm3.3 22.7c1.6.3 3.1-.2 4.5-.8.4-.2.9-.2 1.5-.4-.2.8-.5 1.4-.6 2.1-.1.7-.3 1.4 0 2.2.2.7.2 1.4 0 2.2L41.3 44c.5-1.2.9-2.3 1.4-3.5zm27.9 16.1c.1-.2.2-.4.2-.7l.3.8c-.2-.1-.3-.1-.5-.1zm5.5 3.5c.4-.6.5-1.4.2-2.3l-1.4-3.4 3.4 3.2-2.2 2.5z"/><g fill="#010002"><path d="M88.5 62.2c-.4-.4-.8-.7-1.3-1.1-.8-.7-1.6-1.5-2.4-2.2.6-1.2 1.1-2.3 1.7-3.5-1.2-.4-2.2-.7-3.3-1-.5.9-1 1.7-1.5 2.5-.1 0-.1 0-.2-.1-1.3-1.2-2.6-2.4-3.9-3.6-.3-.3-.6-.6-1-.7-.9-.3-1.8-.5-2.9-.7 2 1.9 4 3.8 6 5.6-1 1.1-1.9 2.2-2.9 3.3.2 0 .3.1.5.1 1 .2 2 .4 3 .7.5.1.8 0 1-.3.5-.7 1-1.3 1.5-2 1.7 1.5 3.5 3 5.2 4.5.2-.4.4-.8.6-1.2 0 .1 0-.2-.1-.3zM73.9 54.6c-1-1.5-2.2-2.6-3.8-3l-5.9-1c-2.6-.6-3.4 1.2-3.1 2.1l.8 3.3c.3 1.2 2.3 2.7 3.3 2.8l7.7 1.3c1.9.4 2.9-.5 2.4-1.9l-1.4-3.6zm-3.5 2.9l-4-.7c-.8 0-1.4-.4-1.7-1.1l-.5-2c-.3-.5.5-1.1 1.3-.9l4.2.7c1 .3 1.6.8 1.8 1.6l.7 1.9c.3.7-.3.9-1.8.5zM30.2 49.9l-4.9 6.2c-.4.4-.7.4-.9 0l-1.7-4.6c-.1-.3-.2-.6-.7-.4l-2 .2c-.4.1-.5.3-.4.6l1.9 6c.4.9 1.1 1.2 2.3 1.1 1.2 0 2.4-.5 3.5-1.6l6.1-7.8-3.2.3zM12.1 52.9L5.6 60c-.6.6-.9.5-.9-.3L4.3 55s-2.8.9-2.9.9l.2 6c-.1 1 .5 1.4 1.6 1.2 1.1-.1 2.2-.6 3.3-1.6l8.5-9.4-2.9.8zM15.8 52.8l-3 7.5c-.1.3-.1.5.3.4l1.9-.4c.4-.1.6-.2.7-.5l2.9-8.2-2 .4c-.5.1-.8.3-.8.8zM59.1 53.9c-.1-.1-.1-.2 0-.3 1-1.6-.1-3.8-2.4-4-3.3-.3-6.3-.4-9-.4v1.9s8.1.3 8.6.5c.6.2.9 1.3-.5 1 0 0-7.2-.5-8-.4l.2 5.2 10.9.6c2.1.2 2.1-.4 1.9-1.6-.1-1.1-.5-1.8-1.7-2.5zm-1.9 2l-6.4-.3-.1-1.1 6.2.4c.8-.1 1 1 .3 1zM43.6 49.1l-7.1.2c-1.3.2-2.2 1-2.9 2.4-.2 1.1-.4 2.4-.5 3.9-.1 1.2.8 1.9 2.6 2l8.2-.2c.9-.1 2.5-.9 2.7-2.1v-3.7c-.4-1.4-1.4-2.3-3-2.5zm.2 5.2c-.1.6-.7 1-1.5 1l-5 .1c-.7 0-1-.3-1-.9l.1-2.1c.3-.7.9-1.1 1.6-1.2l4.9-.1c.6.2.9.5 1 1.1l-.1 2.1zM35.2 61.2c-1.4.1-2.9.3-4.3.3-.8 0-1.4.3-2 .9-.8.6-.8 1.6-.9 2.4-.2 1.4.5 2 1.9 1.9 1.2-.1 2.4-.2 3.6-.3.5 0 1 0 1.5-.2.7-.2 1.5-.5 1.7-1.3.2-.8.3-1.7.2-2.5-.1-.8-.8-1.3-1.7-1.2zm-.1 2.2c0 .1-.1.2-.1.3.1 1-.4 1.1-1.3 1.2-1 .1-1.9.2-2.9.2-.7.1-.9-.1-.9-.8 0-1.2.3-1.5 1.6-1.6.7-.1 1.5-.1 2.1-.1.4 0 .6 0 .8 0 .6 0 .8.3.7.8zM26.4 65c.6-.1.9-.5 1-1.1 0-.3.2-.6.2-.9.1-.6-.2-1-.8-.9-.7 0-1.4.1-2.1.2-1.6.2-3.3.4-4.9.6l-.4 1.4c1.7-.3 3.4-.6 5-.8.4 0 .9-.4 1.3.3-.4.1-.8.3-1.2.4-1.6.2-3.3.4-4.9.6-.2 0-.4.2-.4.4-.3.9-.6 1.9-.9 3 .7-.1 1.3-.1 1.8-.4.3-.1.3-.8.4-1.2 0 0 0-.1 0-.1.1-.4.2-.7.7-.7.4 0 .8-.2 1.1-.2.3 0 .7 0 .9.1.8.6 1.6 1.4 2.4 2.1.4.3.8.8 1.2.8.8.1 1.6-.1 2.4-.2l-3.7-3.2c.5-.1.7-.2.9-.2zM44.9 62.7c-1.4 0-3.1 0-4.5 0-.2 0-.8-.1-.8-.1v-.2c0-.1.6 0 .8-.1.4 0 1 .1 1.5.1h4.3V61c-2.2 0-4.5 0-6.6 0-.5 0-1.1.2-1.3.8-.1.4-.2.9-.2 1.4 0 .7.4 1 1.1 1 1.5-.1 3-.1 4.5-.1.2 0 .3.2.5.3-.2.1-.3.3-.5.4-.2.1-.4 0-.5 0-1.2 0-2.5 0-3.7 0-.6 0-1.2-.1-1.9 0l-.1 1h3.6c1.3 0 2.6.2 3.9.2.7 0 1.1-.2 1.1-.9V64c0-1-.3-1.3-1.2-1.3zM14 67.7c-.4.1-.9.1-1.2 0-.4-.3.1-.7.1-1.1.2-.7.7-1.2 1.4-1.4.9-.2 1.9-.4 2.9-.5 1.3-.2 1.3-.2 1.7-1.5-.2 0-.3 0-.4 0-1.1.2-2.2.4-3.3.7-.8.2-1.6.3-2.2.6-1.6.8-1.9 2.5-2.3 4-.1.5.3.8.7.9.3 0 .6 0 .9 0 1.3-.2 2.5-.6 3.8-.7 1-.1 1.6-.4 1.7-1.4 0 0 0-.1 0-.2-1.3.1-2.5.4-3.8.6zM70.1 63.1c-.2 0-.3 0-.5-.1l-3.2-.5c.1.3.1.6.2.8 0 .4.3.5.6.6.6.1 1.2.2 1.8.2 1 .1 1.1.2 1.4 1.2.2.8.5 1.7.7 2.5 0 .1.1.3.2.4.6.1 1.1.2 1.7.3-.4-1.5-1-2.8-1.3-4.2-.1-.9-.7-1.2-1.6-1.2zM53.9 63c-1.1-.1-2.1-.1-3.2-.1-.5 0-.9-.1-1.4-.1-.1 0-.2-.2-.3-.3.1-.1.3-.2.4-.2.3 0 .5.1.8.1 1.5.1 2.9.1 4.4.2.2-1 0-1.3-1-1.3-.3 0-.6 0-.8 0-1.6-.2-3.2-.3-4.8-.3-.6 0-.9.4-.9.9 0 .4 0 .7 0 1.1 0 .7.4 1.1 1 1.1 1.2 0 2.4.1 3.6.1.4 0 .9 0 1.3.1.2 0 .3.3.4.4-.1.1-.3.3-.4.3-1 0-1.8-.1-2.8-.2-1 0-1.9 0-3 0v1.4c1.1 0 3 0 4.5 0 1 0 1.9.1 2.9.2.6.1.9-.2.9-.8 0-.5-.2-1-.2-1.5-.1-.8-.8-1.1-1.4-1.1zM77.3 65.7c-.1-1.1-.3-1.3-1.2-1.5-.1 0-.2 0-.3-.1l-3.9-.8c.5 1.7 1 3.3 1.5 4.9 0 .2.1.4.3.4.6.1 1.1.2 1.8.3L74.2 65l3.1.7zM63.4 64.4c-.1-.2-.3-.4-.5-.4-.4-.1-.8-.1-1.2-.1l-3.8-.4c0-.4.2-.6.6-.6 1.5.2 3 .3 4.6.4 0-.2-.1-.4-.1-.6 0-.5-.3-.7-.8-.7-.4 0-.9-.1-1.3-.1-1.2-.1-2.4-.3-3.7-.3-.8 0-1.4.6-1.3 1.4.1 1.2.3 2.3.5 3.5l1.9.1-.3-1.9 5.4.5c.1-.3.1-.6 0-.8zM65.5 62.4c-.5-.1-1-.1-1.6-.2.4 1.6.7 3.1 1.1 4.7 0 .2.2.4.3.4.5.1 1.1.2 1.7.3-.4-1.6-.8-3.2-1.2-4.8-.1-.1-.2-.4-.3-.4z"/></g></svg>
          </a>
        </div>
        <div class="col-md-3 col-6 p-1 bloque" data-move-y="500px">
          <a href="http://nonsolorunning.com/" title="Events Non Solo Running" target="_blank">
            <img class="img-fluid" src="img/logo-non-solo-runing.png" width="176" height="155" alt="logo non solo runing">
          </a>
        </div>
        <div class="col-md-3 col-6 p-1 bloque" data-move-x="500px" data-rotate="-90deg">
          <a href="http://www.mc-estudio.es/" title="MC Estudio" target="_blank">
            <img class="img-fluid" src="img/logo-mc-estudio.png" width="176" height="155" alt="logo mc estudio">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white opaque-overlay fondo-oscuro jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(&quot;http://www.vivoboxcrossfit.com/wp-content/uploads/crossfit-murcia.jpg&quot;);" id="contacto">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="mb-4 text-white display-4 bloque" data-move-y="200px" data-scale="5">CONTACT</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 bloque" data-rotate-y="90deg" data-transform-Origin="0%">
          <p class="text-justify">If you have any questions, suggestions or just want to communicate something, you can contact us:</p>
          <a class="btn btn-primary btn-lg btn-block" href="tel:+34634418405"><i class="fa d-inline fa-phone fa-lg m-2"></i> 634 41 84 05</a>
          <a class="btn btn-lg btn-block btn-secondary" href="https://www.google.com/maps/place/VivoBox+CrossFit+Murcia/@38.005279,-1.1100236,17z/data=!3m1!4b1!4m5!3m4!1s0xd63824f8b12b3bb:0xc3a68a56dd2e090e!8m2!3d38.005279!4d-1.1078349?hl=es"
            target="_blank"><i class="fa d-inline fa-lg m-2 fa-map-marker"></i> Palacio de los Deportes
            <br>Av. del Rocío, 7, 30007 Murcia</a>
          <p class="my-3 text-justify">Or if you prefer, write us using the following form:</p>
        </div>
        <div class="col-md-6 col-lg-8 bloque" data-rotate-y="-90deg" data-transform-Origin="100%">
          <form role="form" method="post" action="index.php">
            <div class="form-group">
              <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Name*"> </div>
            <div class="form-group">
              <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email*"> </div>
            <div class="form-group"><textarea class="form-control form-control-lg" id="message" name="message" rows="3" placeholder="Message*"></textarea> </div>
            <button type="submit" class="btn btn-lg btn-block btn-primary" id="submit" name="submit">Send</button>
          </form>
        </div>
        <div class="col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12577.100808583682!2d-1.11265!3d37.9940409!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x431cc423f9d631b1!2sPalacio+de+los+Deportes+de+Murcia!5e0!3m2!1ses!2ses!4v1512001815078" width="100%"
            frameborder="0" height="400px" id="localizacion" class="my-5 bloque" data-rotate-x="90deg" data-transform-Origin="0% 0%"></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white bg-secondary">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="text-center lead">Follow us on social networks to keep up with the latest news:</p>
        </div>
        <div class="col-12 my-3">
          <div class="d-inline-block">
            <a href="https://www.facebook.com/GodsThrowdown" target="_blank" title="Gods Throwdown Facebook" class="btn btn-primary m-2"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
            <a href="https://www.instagram.com/godsthrowdown/" target="_blank" title="Gods Throwdown Instagram" class="btn btn-primary m-2"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
          </div>
          <div class="d-inline-block">
            <a href="https://plus.google.com/106879912255223521410" target="_blank" title="Gods Throwdown Googleplus" class="btn btn-primary m-2"><i class="fa fa-google-plus fa-fw fa-3x"></i></a>
            <a href="https://twitter.com/godsthrowdown" target="_blank" title="Gods Throwdown Twitter" class="btn btn-primary m-2"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
          </div>
        </div>
        <div class="col-12 my-3">
          <div class="d-inline-block">
            <div class="d-inline-block m-2"><i class="fa fa-users fa-lg"></i> <strong class="text-muted">Gods Throwdown</strong></div>
            <div class="d-inline-block m-2 text-muted"><i class="fa fa-cube text-white fa-lg"></i> International Competition of Functional Aptitude in Murcia</div>
          </div>
          <div class="d-inline-block">
            <div class="d-inline-block m-2">
              <a title="Ver Local en Google Maps" href="https://www.google.es/maps/place/Palacio+de+los+Deportes+de+Murcia/@37.9940409,-1.11265,15z/data=!4m5!3m4!1s0x0:0x431cc423f9d631b1!8m2!3d37.9940409!4d-1.11265" class="text-muted" target="_blank"> <i class="fa fa-map-marker text-white fa-lg"></i> Palacio de los Deportes - Av. del Rocío, 7, 30007 Murcia</a>
            </div>
            <div class="d-inline-block">
              <div class="d-inline-block m-2">
                <a title="Llamar por Teléfono o Whatsapp" href="tel:+34634418405" class="text-muted"> <i class="fa fa-phone text-white fa-lg"></i> 634 41 84 05</a>
              </div>
              <div class="d-inline-block m-2">
                <a title="Gods Throwdown" href="http://godsthrowdown.com/" class="text-muted"><i class="fa fa-info-circle text-white fa-lg"></i> godsthrowdown.com</a>
              </div>
            </div>
          </div>
          <a href="#" title="Subir" class="subir page-scroll"><i class="fa fa-arrow-up"></i></a>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- Efectos Smoove -->
    <script src="js/jquery.smoove.js"></script>
    <script>
      $('.bloque').smoove({offset:'15%'});
    </script>
    <!-- Scroll suave -->
    <script src="js/smooth-scroll.js"></script>
    <script>
      var scroll = new SmoothScroll('a.page-scroll[href*="#"]');
    </script>
    <!-- Parallax -->
    <script src="js/jarallax.js"></script>
  </div>
</body>
</html>