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

if((isset($_POST['q33']) && trim($_POST['q33'])!="") && $_GET['pg']==9){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q33']=$_POST['q33'];
	$errore33="";
}
if((isset($_POST['q34']) && trim($_POST['q34'])!="") &&  $_GET['pg']==9){
	//come sopra
	$_SESSION['q34']=$_POST['q34'];
	$errore34="";
}
if((isset($_POST['q35']) && trim($_POST['q35'])!="") && $_GET['pg']==9){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q35']=$_POST['q35'];
	$errore35="";
}
if((isset($_POST['q36']) && trim($_POST['q36'])!="") &&  $_GET['pg']==9){
	//come sopra
	$_SESSION['q36']=$_POST['q36'];
	$errore36="";
}

if(isset($_SESSION['q37'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_37=$_SESSION['q37'];
}else{
    $dato_37="";
}
if(isset($_SESSION['q38'])){
    $dato_38=$_SESSION['q38'];
}else{
    $dato_38="";
}
if(isset($_SESSION['q39'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_39=$_SESSION['q39'];
}else{
    $dato_39="";
}
if(isset($_SESSION['q40'])){
    $dato_40=$_SESSION['q40'];
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
            <h1 class="titolo">PAGINA 10</h1>
            <form action="fine.php?pg=10"   method="post"  >
            <h2>37.	Far parte di un’equipe di medici per la ricerca di un vaccino </h2>
                <p>
                  <input type="radio" value="371" name="q37" required>MOLTO INTERESSATO<br />
                  <input type="radio" value="372" name="q37" required>POCO INTERESSATO<br />
                  <input type="radio" value="373" name="q37" required>ABBASTANZA INTERESSANTO<br />
                  <input type="radio" value="374" name="q37" required>PER NULLA INTERESSATO
                </p>
                 
                <h2>38.	Scoprire gli effetti dei farmaci sulle persone </h2>
                <p>
                  <input type="radio" value="381" name="q38" required>MOLTO INTERESSATO<br />
                  <input type="radio" value="382" name="q38" required>POCO INTERESSATO<br />
                  <input type="radio" value="383" name="q38" required>ABBASTANZA INTERESSANTO<br />
                  <input type="radio" value="384" name="q38" required>PER NULLA INTERESSATO
                </p>
                <h2>39.	Essere politicamente attivo nella tua città </h2>
                  <p>
                    <input type="radio" value="391" name="q39" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="392" name="q39" required>POCO INTERESSATO<br />
                    <input type="radio" value="393" name="q39" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="394" name="q39" required>PER NULLA INTERESSATO
                  </p>
                 
                  
                       
                  <h2>40.	Studiare il pensiero di Socrate e Platone </h2>
                  <p>
                    <input type="radio" value="401" name="q40" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="402" name="q40" required>POCO INTERESSATO<br />
                    <input type="radio" value="403" name="q40" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="404" name="q40" required>PER NULLA INTERESSATO
                  </p>
                 
                
                <input class="avanti" type="submit" name="pag_10" value="AVANTI" >
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