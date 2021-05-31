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
if((isset($_POST['q5']) && trim($_POST['q5'])!="") && $_GET['pg']==2){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q5']=$_POST['q5'];
	$errore5="";
}
if((isset($_POST['q6']) && trim($_POST['q6'])!="") &&  $_GET['pg']==2){
	//come sopra
	$_SESSION['q6']=$_POST['q6'];
	$errore6="";
}
if((isset($_POST['q7']) && trim($_POST['q7'])!="") && $_GET['pg']==2){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q7']=$_POST['q7'];
	$errore7="";
}
if((isset($_POST['q8']) && trim($_POST['q8'])!="") &&  $_GET['pg']==2){
	//come sopra
	$_SESSION['q8']=$_POST['q8'];
	$errore8="";
}

if(isset($_SESSION['q9'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_9=$_SESSION['q9'];
}else{
    $dato_9="";
}
if(isset($_SESSION['q10'])){
    $dato_10=$_SESSION['q10'];
}else{
    $dato_10="";
}
if(isset($_SESSION['q11'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_11=$_SESSION['q11'];
}else{
    $dato_11="";
}
if(isset($_SESSION['q12'])){
    $dato_12=$_SESSION['q12'];
}else{
    $dato_12="";
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
            <h1 class="titolo">PAGINA 3</h1>
            <form action="test4.php?pg=3"   method="post"  >
            <h2>9.	Sapere anticipare il prodotto di una reazione chimica di cui si conoscono i reagenti</h2>
                  <p>
                    <input type="radio" value="91" name="q9" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="92" name="q9" required>POCO INTERESSATO<br />
                    <input type="radio" value="93" name="q9" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="94" name="q9" required>PER NULLA INTERESSATO
                  </p>
                  <h2>10.	Conoscere le tecniche, le metodologie e gli strumenti necessari a sviluppare programmi per calcolatori</h2>
                   <p>
                    <input type="radio" value="101" name="q10" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="102" name="q10" required >POCO INTERESSATO<br />
                    <input type="radio" value="103" name="q10" required>ABBASTANZA INTERESSANTO<br />
                   <input type="radio" value="104" name="q10" required>PER NULLA INTERESSATO
                    </p>
                    <h2>11.	Analizzare il retroterra culturale di Pirandello attraverso un'analisi delle sue opere teatrali</h2>
                  <p>
                    <input type="radio" value="111" name="q11" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="112" name="q11" required>POCO INTERESSATO<br />
                    <input type="radio" value="113" name="q11" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="114" name="q11" required>PER NULLA INTERESSATO
                  </p>
                  <h2>12.	Consultare la biblioteca privata di una antica famiglia nobile, al fine di individuare una raccolta di poesie dell'Ottocento e occuparsi della sua pubblicazione</h2>
                  <p>
                    <input type="radio" value="121" name="q12" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="122" name="q12" required>POCO INTERESSATO<br />
                    <input type="radio" value="123" name="q12" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="124" name="q12" required>PER NULLA INTERESSATO
                  </p>
                
                <input class="avanti" type="submit" name="pag_3" value="AVANTI" >
              </form>
              
              </div>
        </div>
     
            
            
      </div>
      
      
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