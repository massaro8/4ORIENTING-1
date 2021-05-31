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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_SESSION['q1'])){
	$dato_1=$_SESSION['q1'];
}else{
	$dato_1="";
}
if(isset($_SESSION['q2'])){
	$dato_2=$_SESSION['q2'];
}else{
	$dato_2="";
}
if(isset($_SESSION['q3'])){
	$dato_3=$_SESSION['q3'];
}else{
	$dato_3="";
}
if(isset($_SESSION['q4'])){
	$dato_4=$_SESSION['q4'];
}else{
	$dato_4="";
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
              <li><a href="#" data-after="Test">Test</a></li>
              <li><a href="../orientamento/orientamento.html" data-after="Orientamento">Orientamento</a></li>
              <li><a href="../borsediStudio/borseStudio.html" data-after="Borse">Borse di studio</a></li>
              <li><a href="../contattaci/contattaci.html" data-after="Contact">Contatti</a></li>
            </ul>
          </div>
        </div>
      </div>
      
      
    </section>
    <!-- End Header -->
     <!--sezione titolo-->
  <section id="domande">
    <div class="domande-contenitore">
      <div class="titolazione">
       <h1 class="titolo">TEST PSICO-ATTITUDINALE</h1>
       <div class="bordo-sottotitolo">
         <h2 class="sottotitolo"> Capire davvero cosa ti appassiona, quali sono i tuoi interessi e cosa ti immagini per il tuo futuro è importante per
        fare la scelta giusta e individuare un corso di laurea adeguato alle tue ambizioni.</h2>
        <h2 class="sottotitolo"> Il questionario che qui ti presentiamo  ti consente in pochi minuti di avere un'indicazione delle aree di studio e 
          dei corsi di laurea più adatti ai tuoi interessi..</h2>
          <h2 class="sottotitolo">Ecco in cosa consiste il test di orientamento: ti verranno proposte 40 situazioni, per le quali devi indicare 
            il tuo grado di interesse scegliendo tra 4 alternative disponibili.
            
            Vuoi fare la scelta giusta per il tuo futuro? Allora inizia subito il test di orientamento!</h2>
          </div>
        
            </div>

<form action="prova2.php?pg=1"   method="post"  >
                <h2>1.	Leggere con attenzione e comprendere le pagine finanziarie dei quotidiani</h2>
                <p>
                <input type="radio" value="11" name="q1"  >MOLTO INTERESSATO<br />
                <input type="radio" value="12" name="q1" >POCO INTERESSATO<br />
                <input type="radio" value="13" name="q1" >ABBASTANZA INTERESSANTO<br />
                <input type="radio" value="14" name="q1" >PER NULLA INTERESSATO
                </p>
                <h2>2.	Effettuare una serie di interviste per conoscere l'opinione dei cittadini in merito a un nuovo provvedimento in materia fiscale</h2>
                <p>
                  <input type="radio" value="21" name="q2" >MOLTO INTERESSATO<br />
                  <input type="radio" value="22" name="q2" >POCO INTERESSATO<br />
                  <input type="radio" value="23" name="q2" >ABBASTANZA INTERESSANTO<br />
                  <input type="radio" value="24" name="q2" >PER NULLA INTERESSATO
                </p>
                <h2>3.	Analizzare determinate variabili economiche per formulare previsioni attendibili sul futuro andamento del mercato</h2>
                <p>
                  <input type="radio" value="31" name="q3" >MOLTO INTERESSATO<br />
                  <input type="radio" value="32" name="q3" >POCO INTERESSATO<br />
                  <input type="radio" value="33" name="q3" >ABBASTANZA INTERESSANTO<br />
                  <input type="radio" value="34" name="q3" >PER NULLA INTERESSATO
                </p>
                <h2>4.	Dedicarsi ai problemi delle associazioni artigiane per ottimizzare il trattamento pensionistico della categoria</h2>
                <p>
                  <input type="radio" value="41" name="q4" >MOLTO INTERESSATO<br />
                  <input type="radio" value="42" name="q4" >POCO INTERESSATO<br />
                  <input type="radio" value="43" name="q4" >ABBASTANZA INTERESSANTO<br />
                  <input type="radio" value="44" name="q4" >PER NULLA INTERESSATO
                </p>
                
                <input class="avanti" type="submit" value="AVANTI" >
              </form>

              



            </section>


              
    
</body>
</html>