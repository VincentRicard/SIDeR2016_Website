<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8"></meta>
<meta></meta>

<title>SIDeR 2016: HUMAN | NATURE | Student Interaction Design Research conference</title>
<meta name="description" content="The theme of the 12th Student Interaction Design Research conference deals with the ever evolving relationship between Human and Nature. Interaction design is at the centre of this relationship as technology and design progressively transform, blur and redefine our notion of the natural and the artificial. SIDeR 2016 will take place on the 1st and 2nd of April, 2016 and will be held at Malmö University, Sweden. The two-day event will be a mixture of keynote lectures, demos, workshops and parties.">
<meta name="keywords" content="SIDeR, Student Interaction Design Research conference, SIDeR 2016, Interaction Design, IxD, conference, Human Nature, Malmö University, Malmö, Sweden">
<script type="text/javascript">
  ws = new WebSocket('ws://localhost:35729');
  ws.onmessage = function() { window.location = window.location };
</script>
<link rel="icon" type="image/png" href="img/fav.png" />
<script src="js/scrollreveal.min.js"></script>

</script>
<link rel="stylesheet" type="text/css" href="css/dist/style.css"/>
</head>
<body>
<?php



    $submission = "$firstname + $lastname + $email +$school";
    $confirmation = "We just receive your email, we will contact you soon with the details.";
    mail("mynario@gmail.com","Sider test",$submission);
    mail($email, "Confirmation",$confirmation);
    echo $firstname;
    ?>

  <header>
    <h1>
        <p>
          <span class="title-normal">SID</span><span class="title-black e">e</span><span class="title-normal">R</span>
        </p>
        <p>
          <span class="title-normal">20</span><span class="title-black year">16</span>
        </p>
    </h1>
    <div class="theme">
      <h2>
        <p class="human">human</p>
        <p class="nature">nature</p>
      </h2>
    </div>
    <h2 class="date">Malmö University <br>
    1st and 2nd of April 2016</h2>


  </header>
  <img class="front" src="img/sider_visu_2.png">

  <section id="confirmation">

    <div>
      <p>
        We (the SIDeR team) have received your registration ! You should receive a confirmation mail in your mailbox soon. <br>
        If you don't, just send us an email at <a href="mailto:">mail@sider2016.se</a>.<br>
        In any case, we will contact you with the details for the payment in a short time, so check your mails !
      </p>
    </div>
  </section>





  <script type="text/javascript">
  var frontReveal = {
    delay:500,
    distance : 50,
    scale:1,
    easing:'ease-in',
    viewFactor:0.1
  };
  window.sr = ScrollReveal();
  sr.reveal('.front',frontReveal );



  </script>
</body>
</html>
