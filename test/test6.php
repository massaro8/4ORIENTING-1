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

if((isset($_POST['q17']) && trim($_POST['q17'])!="") && $_GET['pg']==5){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q17']=$_POST['q17'];
	$errore17="";
}
if((isset($_POST['q18']) && trim($_POST['q18'])!="") &&  $_GET['pg']==5){
	//come sopra
	$_SESSION['q18']=$_POST['q18'];
	$errore18="";
}
if((isset($_POST['q19']) && trim($_POST['q19'])!="") && $_GET['pg']==5){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q19']=$_POST['q19'];
	$errore19="";
}
if((isset($_POST['q20']) && trim($_POST['q20'])!="") &&  $_GET['pg']==5){
	//come sopra
	$_SESSION['q20']=$_POST['q20'];
	$errore20="";
}

if(isset($_SESSION['q21'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_21=$_SESSION['q21'];
}else{
    $dato_21="";
}
if(isset($_SESSION['q22'])){
    $dato_22=$_SESSION['q22'];
}else{
    $dato_22="";
}
if(isset($_SESSION['q23'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_23=$_SESSION['q23'];
}else{
    $dato_23="";
}
if(isset($_SESSION['q24'])){
    $dato_24=$_SESSION['q24'];
}else{
    $dato_24="";
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
            <h1 class="titolo">PAGINA 6</h1>
            <form action="test7.php?pg=6"   method="post"  >
            <h2>21.	 Frequentare un circolo letterario per scoprire nuovi autori contemporanei</h2>
                   <p>
                     <input type="radio" value="211" name="q21" required>MOLTO INTERESSATO<br />
                        <input type="radio" value="212" name="q21" required>POCO INTERESSATO<br />
                     <input type="radio" value="213" name="q21" required>ABBASTANZA INTERESSANTO<br />
                     <input type="radio" value="214" name="q21" required>PER NULLA INTERESSATO
                      </p>
                      <h2>22.	Lavorare nel campo della ricerca per la cura delle malattie dell'apparato circolatorio</h2>
                          <p>
                         <input type="radio" value="221" name="q22" required>MOLTO INTERESSATO<br />
                          <input type="radio" value="222" name="q22" required>POCO INTERESSATO<br />
                          <input type="radio" value="223" name="q22" required>ABBASTANZA INTERESSANTO<br />
                          <input type="radio" value="224" name="q22" required>PER NULLA INTERESSATO
                            </p>
                        <h2>23.	Conoscere il sistema binario di numerazione e la sua applicazione nel linguaggio dei calcolatori</h2>
                  <p>
                    <input type="radio" value="231" name="q23" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="232" name="q23" required>POCO INTERESSATO<br />
                    <input type="radio" value="233" name="q23" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="234" name="q23" required>PER NULLA INTERESSATO
                  </p>
                     
                  <h2>24.	Trascorrere un pomeriggio intero in un Museo di Storia Naturale</h2>
                  <p>
                    <input type="radio" value="241" name="q24" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="242" name="q24" required>POCO INTERESSATO<br />
                    <input type="radio" value="243" name="q24" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="244" name="q24" required>PER NULLA INTERESSATO
                  </p>  

                
                <input class="avanti" type="submit" name="pag_6" value="AVANTI" >
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