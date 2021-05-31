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
if((isset($_POST['q9']) && trim($_POST['q9'])!="") && $_GET['pg']==3){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q9']=$_POST['q9'];
	$errore9="";
}
if((isset($_POST['q10']) && trim($_POST['q10'])!="") &&  $_GET['pg']==3){
	//come sopra
	$_SESSION['q10']=$_POST['q10'];
	$errore10="";
}
if((isset($_POST['q11']) && trim($_POST['q11'])!="") && $_GET['pg']==3){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q11']=$_POST['q11'];
	$errore11="";
}
if((isset($_POST['q12']) && trim($_POST['q12'])!="") &&  $_GET['pg']==3){
	//come sopra
	$_SESSION['q12']=$_POST['q12'];
	$errore12="";
}

if(isset($_SESSION['q13'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_13=$_SESSION['q13'];
}else{
    $dato_13="";
}
if(isset($_SESSION['q14'])){
    $dato_14=$_SESSION['q14'];
}else{
    $dato_14="";
}
if(isset($_SESSION['q15'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_15=$_SESSION['q15'];
}else{
    $dato_15="";
}
if(isset($_SESSION['q16'])){
    $dato_16=$_SESSION['q16'];
}else{
    $dato_16="";
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
            <h1 class="titolo">PAGINA 4</h1>
            <div class="form">
            <form action="test5.php?pg=4"   method="post"  >
            <h2>13.	Progettare, con il solo uso del computer, un oggetto funzionale ed esteticamente apprezzabile?</h2>
                  <p>
                    <input type="radio" value="131" name="q13"  required>MOLTO INTERESSATO<br />
                    <input type="radio" value="132" name="q13"  required>POCO INTERESSATO<br />
                    <input type="radio" value="133" name="q13"  required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="134" name="q13"  required>PER NULLA INTERESSATO
                  </p>
                  <h2>14.	Redigere il bilancio economico e fornire consulenze in materia fiscale a società di piccole dimensioni</h2>
                  <p>
                    <input type="radio" value="141" name="q14"  required>MOLTO INTERESSATO<br />
                    <input type="radio" value="142" name="q14"  required>POCO INTERESSATO<br />
                    <input type="radio" value="143" name="q14"  required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="144" name="q14"  required>PER NULLA INTERESSATO
                  </p>  
                  <h2>15.	Analizzare la politica fiscale di uno Stato e studiare le possibili strategie di riduzione del debito pubblico</h2>
                  <p>
                    <input type="radio" value="151" name="q15"  required>MOLTO INTERESSATO<br />
                    <input type="radio" value="152" name="q15"  required>POCO INTERESSATO<br />
                    <input type="radio" value="153" name="q15"  required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="154" name="q15"  required>PER NULLA INTERESSATO
                  </p>
                     
                  <h2>16.	Avere la possibilità di analizzare campioni istologici e sanguigni in laboratori di analisi </h2>
                  <p>
                    <input type="radio" value="161" name="q16"  required>MOLTO INTERESSATO<br />
                    <input type="radio" value="162" name="q16"  required>POCO INTERESSATO<br />
                    <input type="radio" value="163" name="q16"  required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="164" name="q16"  required>PER NULLA INTERESSATO
                  </p>
                
                <input class="avanti" type="submit" name="pag_5" value="AVANTI" >
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