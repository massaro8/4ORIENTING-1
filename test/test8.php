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

if((isset($_POST['q25']) && trim($_POST['q25'])!="") && $_GET['pg']==7){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q25']=$_POST['q25'];
	$errore25="";
}
if((isset($_POST['q26']) && trim($_POST['q26'])!="") &&  $_GET['pg']==7){
	//come sopra
	$_SESSION['q26']=$_POST['q26'];
	$errore26="";
}
if((isset($_POST['q27']) && trim($_POST['q27'])!="") && $_GET['pg']==7){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q27']=$_POST['q27'];
	$errore27="";
}
if((isset($_POST['q28']) && trim($_POST['q28'])!="") &&  $_GET['pg']==7){
	//come sopra
	$_SESSION['q28']=$_POST['q28'];
	$errore28="";
}

if(isset($_SESSION['q29'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_29=$_SESSION['q29'];
}else{
    $dato_29="";
}
if(isset($_SESSION['q30'])){
    $dato_30=$_SESSION['q30'];
}else{
    $dato_30="";
}
if(isset($_SESSION['q31'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_31=$_SESSION['q31'];
}else{
    $dato_31="";
}
if(isset($_SESSION['q32'])){
    $dato_32=$_SESSION['q32'];
}else{
    $dato_32="";
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
            <h1 class="titolo">PAGINA 8</h1>
            <form action="test9.php?pg=8"   method="post"  >
            <h2>29.	 Ragionare con numeri, cifre, calcoli, statistiche e grafici</h2>
                  <p>
                    <input type="radio" value="291" name="q29" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="292" name="q29" required>POCO INTERESSATO<br />
                    <input type="radio" value="293" name="q29" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="294" name="q29" required>PER NULLA INTERESSATO
                  </p>
                  <h2>30.	 Conoscere le possibili tipologie dei contratti di compravendita</h2>
                  <p>
                    <input type="radio" value="301" name="q30" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="302" name="q30" required>POCO INTERESSATO<br />
                    <input type="radio" value="303" name="q30" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="304" name="q30" required>PER NULLA INTERESSATO
                  </p>
                  <h2>31.	Partecipare attivamente alla vita politica della propria città</h2>
                  <p>
                    <input type="radio" value="311" name="q31" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="312" name="q31" required>POCO INTERESSATO<br />
                    <input type="radio" value="313" name="q31" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="314" name="q31" required>PER NULLA INTERESSATO
                  </p>
                     
                 
                  
                  <h2>32.	Conoscere i sistemi di collegamento e di comunicazione che permettono lo scambio di informazioni fra elaboratori</h2>
                  <p>
                    <input type="radio" value="321" name="q32" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="322" name="q32" required>POCO INTERESSATO<br />
                    <input type="radio" value="323" name="q32" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="324" name="q32" required>PER NULLA INTERESSATO
                  </p>

                
                <input class="avanti" type="submit" name="pag_8" value="AVANTI" >
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