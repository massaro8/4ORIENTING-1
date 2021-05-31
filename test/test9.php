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

if((isset($_POST['q29']) && trim($_POST['q29'])!="") && $_GET['pg']==8){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q29']=$_POST['q29'];
	$errore29="";
}
if((isset($_POST['q30']) && trim($_POST['q30'])!="") &&  $_GET['pg']==8){
	//come sopra
	$_SESSION['q30']=$_POST['q30'];
	$errore30="";
}
if((isset($_POST['q31']) && trim($_POST['q31'])!="") && $_GET['pg']==8){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q31']=$_POST['q31'];
	$errore31="";
}
if((isset($_POST['q32']) && trim($_POST['q32'])!="") &&  $_GET['pg']==8){
	//come sopra
	$_SESSION['q32']=$_POST['q32'];
	$errore32="";
}

if(isset($_SESSION['q33'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_33=$_SESSION['q33'];
}else{
    $dato_33="";
}
if(isset($_SESSION['q34'])){
    $dato_34=$_SESSION['q34'];
}else{
    $dato_34="";
}
if(isset($_SESSION['q35'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_35=$_SESSION['q35'];
}else{
    $dato_35="";
}
if(isset($_SESSION['q36'])){
    $dato_36=$_SESSION['q36'];
}else{
    $dato_36="";
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
            <h1 class="titolo">PAGINA 9</h1>
            <form action="test10.php?pg=9"   method="post"  >
            <h2>33.	 Studiare gli effetti dei principali antibiotici sull'organismo umano</h2>
                  <p>
                     <input type="radio" value="331" name="q33" required>MOLTO INTERESSATO<br />
                      <input type="radio" value="332" name="q33" required>POCO INTERESSATO<br />
                     <input type="radio" value="333" name="q33"required >ABBASTANZA INTERESSANTO<br />
                        <input type="radio" value="334" name="q33" required>PER NULLA INTERESSATO
                         </p>
                         <h2>34.	 Studiare le proprietà dei logaritmi e le loro applicazioni</h2>
                  <p>
                    <input type="radio" value="341" name="q34" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="342" name="q34" required>POCO INTERESSATO<br />
                    <input type="radio" value="343" name="q34" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="344" name="q34" required>PER NULLA INTERESSATO
                  </p>
                  <h2>35.	Lavorare in una équipe di psicologi che si occupa del recupero di delinquenti minorenni</h2>
                  <p>
                    <input type="radio" value="351" name="q35" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="352" name="q35" required>POCO INTERESSATO<br />
                    <input type="radio" value="353" name="q35" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="354" name="q35" required>PER NULLA INTERESSATO
                  </p>
                     
                 
                  
                  <h2>36.	Studiare la teoria dei rapporti sociali di produzione di Karl Marx</h2>
                  <p>
                    <input type="radio" value="361" name="q36" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="362" name="q36" required>POCO INTERESSATO<br />
                    <input type="radio" value="363" name="q36" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="364" name="q36" required>PER NULLA INTERESSATO
                  </p>

                
                <input class="avanti" type="submit" name="pag_9" value="AVANTI" >
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