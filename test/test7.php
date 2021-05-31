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


if((isset($_POST['q21']) && trim($_POST['q21'])!="") && $_GET['pg']==6){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q21']=$_POST['q21'];
	$errore21="";
}
if((isset($_POST['q22']) && trim($_POST['q22'])!="") &&  $_GET['pg']==6){
	//come sopra
	$_SESSION['q22']=$_POST['q22'];
	$errore22="";
}
if((isset($_POST['q23']) && trim($_POST['q23'])!="") && $_GET['pg']==6){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q23']=$_POST['q23'];
	$errore23="";
}
if((isset($_POST['q24']) && trim($_POST['q24'])!="") &&  $_GET['pg']==6){
	//come sopra
	$_SESSION['q24']=$_POST['q24'];
	$errore24="";
}

if(isset($_SESSION['q25'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_25=$_SESSION['q25'];
}else{
    $dato_25="";
}
if(isset($_SESSION['q26'])){
    $dato_26=$_SESSION['q26'];
}else{
    $dato_26="";
}
if(isset($_SESSION['q27'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_27=$_SESSION['q27'];
}else{
    $dato_27="";
}
if(isset($_SESSION['q28'])){
    $dato_28=$_SESSION['q28'];
}else{
    $dato_28="";
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
            <h1 class="titolo">PAGINA 7</h1>
            <form action="test8.php?pg=7"   method="post"  >
            <h2>25.	Analizzare l'efficacia di nuove tecniche di comunicazione utilizzate per realizzare una campagna pubblicitaria</h2>
                    <p>
                      <input type="radio" value="251" name="q25" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="252" name="q25" required>POCO INTERESSATO<br />
                   <input type="radio" value="253" name="q25" required>ABBASTANZA INTERESSANTO<br />
                        <input type="radio" value="254" name="q25"required >PER NULLA INTERESSATO
                        </p>
                        <h2>26.	Occuparsi della traduzione di un testo latino, mantenendone inalterate le sfumature linguistiche</h2>
                             <p>
                             <input type="radio" value="261" name="q26"required >MOLTO INTERESSATO<br />
                              <input type="radio" value="262" name="q26" required>POCO INTERESSATO<br />
                                 <input type="radio" value="263" name="q26"required >ABBASTANZA INTERESSANTO<br />
                                  <input type="radio" value="264" name="q26" required>PER NULLA INTERESSATO
                                </p> 
                                <h2>27.	Occuparsi di alcuni aspetti della politica di marketing di una catena di alberghi</h2>
                  <p>
                    <input type="radio" value="271" name="q27" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="272" name="q27" required>POCO INTERESSATO<br />
                    <input type="radio" value="273" name="q27"required >ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="274" name="q27" required>PER NULLA INTERESSATO
                  </p>
                     
                 
                  <h2>28.	Analizzare e confrontare tra loro le politiche monetarie dei Paesi dell'Unione Europea</h2>
                  <p>
                    <input type="radio" value="281" name="q28" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="282" name="q28" required>POCO INTERESSATO<br />
                    <input type="radio" value="283" name="q28" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="284" name="q28"required >PER NULLA INTERESSATO
                  </p>  

                
                <input class="avanti" type="submit" name="pag_7" value="AVANTI" >
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