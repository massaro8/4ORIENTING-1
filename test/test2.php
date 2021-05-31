<?php
// Start the session
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
<?php 
if((isset($_POST['q1']) && trim($_POST['q1'])!="") && $_GET['pg']==1){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q1']=$_POST['q1'];
	$errore1="";
}
if((isset($_POST['q2']) && trim($_POST['q2'])!="") &&  $_GET['pg']==1){
	//come sopra
	$_SESSION['q2']=$_POST['q2'];
	$errore2="";
}
if((isset($_POST['q3']) && trim($_POST['q3'])!="") && $_GET['pg']==1){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q3']=$_POST['q3'];
	$errore3="";
}
if((isset($_POST['q4']) && trim($_POST['q4'])!="") &&  $_GET['pg']==1){
	//come sopra
	$_SESSION['q4']=$_POST['q4'];
	$errore4="";
}


if(isset($_SESSION['q5'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_5=$_SESSION['q5'];
}else{
    $dato_5="";
}
if(isset($_SESSION['q6'])){
    $dato_6=$_SESSION['q6'];
}else{
    $dato_6="";
}
if(isset($_SESSION['q7'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_7=$_SESSION['q7'];
}else{
    $dato_7="";
}
if(isset($_SESSION['q8'])){
    $dato_8=$_SESSION['q8'];
}else{
    $dato_8="";
}

?>
     <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <c href="#hero" ><img src="../img/logo.png"></c>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="../index.html" data-after="Home">Home</a></li>
            <li><a href="test.php" data-after="Test">Test</a></li>
            <li><a href="../orientamento/orientamento.html" data-after="Orientamento">Orientamento</a></li>
            <li><a href="../borsediStudio/borseStudio.html" data-after="Borse">Borse di studio</a></li>
            <li><a href="../contattaci/contattaci.html" data-after="Contact">Contatti</a></li>
          </ul>
        </div>
      </div>
    </div>
    
  </section>
  <!-- End Header -->
  <section id="domande">
    <div class="domande-contenitore">
        <div class="singole">
            <h1 class="titolo">PAGINA 2</h1>
            <form action="test3.php?pg=2"   method="post"  >
            <h2>5.	Studiare tutte le parti di un motore a scoppio a quattro tempi e le influenze dei diversi sistemi di alimentazione sul suo rendimento</h2>
                  <p>
                    <input type="radio" value="51" name="q5" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="52" name="q5" required>POCO INTERESSATO<br />
                    <input type="radio" value="53" name="q5" required >ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="54" name="q5" required>PER NULLA INTERESSATO
                  </p>
                  <h2>6.	Comprende il mondo microscopico degli atomi </h2>
                  <p>
                    <input type="radio" value="61" name="q6" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="62" name="q6" required>POCO INTERESSATO<br />
                    <input type="radio" value="63" name="q6" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="64" name="q6" required>PER NULLA INTERESSATO
                  </p>
                  <h2>7.	Realizzare un circuito per l'accensione automatica delle luci della propria casa collegato a una sveglia elettronica</h2>
                  <p>
                    <input type="radio" value="71" name="q7" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="72" name="q7" required>POCO INTERESSATO<br />
                    <input type="radio" value="73" name="q7" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="74" name="q7" required>PER NULLA INTERESSATO
                  </p>
                  <h2>8.	Assistere a un intervento chirurgico</h2>
                  <p>
                    <input type="radio" value="81" name="q8" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="82" name="q8" required>POCO INTERESSATO<br />
                    <input type="radio" value="83" name="q8" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="84" name="q8" required>PER NULLA INTERESSATO
                  </p>
                
                <input class="avanti" type="submit" name="pag_2" value="AVANTI" >
              </form>
             



     
      </div>
  </section>

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png"/></a>
        </div>
      </div>
      <p>Copyright © 2020 4Orienting. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->

  
  <script src="./app.js"></script>
    
</body>
</html>