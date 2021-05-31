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
if((isset($_POST['q13']) && trim($_POST['q13'])!="") && $_GET['pg']==4){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q13']=$_POST['q13'];
	$errore13="";
}
if((isset($_POST['q14']) && trim($_POST['q14'])!="") &&  $_GET['pg']==4){
	//come sopra
	$_SESSION['q14']=$_POST['q14'];
	$errore14="";
}
if((isset($_POST['q15']) && trim($_POST['q15'])!="") && $_GET['pg']==4){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q15']=$_POST['q15'];
	$errore15="";
}
if((isset($_POST['q16']) && trim($_POST['q16'])!="") &&  $_GET['pg']==4){
	//come sopra
	$_SESSION['q16']=$_POST['q16'];
	$errore16="";
}

if(isset($_SESSION['q17'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_17=$_SESSION['q17'];
}else{
    $dato_17="";
}
if(isset($_SESSION['q18'])){
    $dato_18=$_SESSION['q18'];
}else{
    $dato_18="";
}
if(isset($_SESSION['q19'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_19=$_SESSION['q19'];
}else{
    $dato_19="";
}
if(isset($_SESSION['q20'])){
    $dato_20=$_SESSION['q20'];
}else{
    $dato_20="";
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
            <h1 class="titolo">PAGINA 5</h1>
            <form action="test6.php?pg=5"   method="post"  >
            <h2>17.	Studiare la normativa sancita dalla Banca dei Regolamenti Internazionali in materia bancaria</h2>
                  <p>
                    <input type="radio" value="171" name="q17" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="172" name="q17" required>POCO INTERESSATO<br />
                    <input type="radio" value="173" name="q17"required >ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="174" name="q17" required>PER NULLA INTERESSATO
                  </p>
                  <h2>18.	Occuparsi della progettazione di edifici anti-sismici a basso costo da costruire nelle zone più povere della periferia di San Francisco</h2>
                  <p>
                    <input type="radio" value="181" name="q18" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="182" name="q18" required>POCO INTERESSATO<br />
                    <input type="radio" value="183" name="q18" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="184" name="q18" required>PER NULLA INTERESSATO
                  </p> 
                  <h2>19.	Studiare i principi di funzionamento e le possibili applicazioni del sonar di un sommergibile</h2>
                  <p>
                    <input type="radio" value="191" name="q19" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="192" name="q19" required>POCO INTERESSATO<br />
                    <input type="radio" value="193" name="q19" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="194" name="q19" required>PER NULLA INTERESSATO
                  </p>
                     
                  <h2>20.	Smontare apparecchiature elettriche per capirne i principi di funzionamento</h2>
                  <p>
                    <input type="radio" value="201" name="q20" required>MOLTO INTERESSATO<br />
                    <input type="radio" value="202" name="q20" required>POCO INTERESSATO<br />
                    <input type="radio" value="203" name="q20" required>ABBASTANZA INTERESSANTO<br />
                    <input type="radio" value="204" name="q20" required>PER NULLA INTERESSATO
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