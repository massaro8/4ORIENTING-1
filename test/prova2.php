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
/* controlli per i dati provenienti dalla pagina 1*/
if((isset($_POST['q1']) && trim($_POST['q1'])!="") && $_GET['pg']==1){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q1']=$_POST['q1'];
	$errore1="";
}else{
	if($_GET['pg']==3){
		//provengo dalla pagina 3 quindi sulla 1 non errori
		$errore1="";
	}else{
		//provengo dalla 1 e non ho inserito il dato
		$errore1="non hai inserito il dato 1<br>";
	}
}
if((isset($_POST['q2']) && trim($_POST['q2'])!="") &&  $_GET['pg']==1){
	//come sopra
	$_SESSION['q2']=$_POST['q2'];
	$errore2="";
}
else{
	if($_GET['pg']==3){
		//provengo dalla pagina 3 quindi sulla 1 non errori
		$errore2="";
	}else{
		//provengo dalla 1 e non ho inserito il dato
		$errore2="non hai inserito il dato 1<br>";
	}
}
if((isset($_POST['q3']) && trim($_POST['q3'])!="") &&  $_GET['pg']==1){
	//come sopra
	$_SESSION['q3']=$_POST['q3'];
	$errore3="";
}
else{
	if($_GET['pg']==3){
		//provengo dalla pagina 3 quindi sulla 1 non errori
		$errore3="";
	}else{
		//provengo dalla 1 e non ho inserito il dato
		$errore3="non hai inserito il dato 1<br>";
	}
}
if((isset($_POST['q4']) && trim($_POST['q4'])!="") &&  $_GET['pg']==1){
	//come sopra
	$_SESSION['q3']=$_POST['q3'];
	$errore3="";
}
else{
	if($_GET['pg']==3){
		//provengo dalla pagina 3 quindi sulla 1 non errori
		$errore3="";
	}else{
		//provengo dalla 1 e non ho inserito il dato
		$errore3="non hai inserito il dato 1<br>";
	}
}

if($errore1!="" || $errore2!="" || $errore3!="" || $errore4!=""){
	//non inseriti tutti i dati, mostro quali e faccio ripetere
	echo "$errore1 $errore2 $errore3 $errore4";
?>
	<a href="prova.php?pg=2">ripeti</a>
<?php
}
if(isset($_SESSION['q5'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_3=$_SESSION['q5'];
}else{
    $dato_3="";
}
if(isset($_SESSION['q6'])){
    $dato_4=$_SESSION['q6'];
}else{
    $dato_4="";
}
if(isset($_SESSION['q7'])){
    //il dato era stato inserito è quindi lo metto nel value del campo di input
    $dato_3=$_SESSION['q7'];
}else{
    $dato_3="";
}
if(isset($_SESSION['q8'])){
    $dato_4=$_SESSION['q8'];
}else{
    $dato_4="";
}

?>








<form action="prova3.php?pg=2"   method="post"  >
                <h2>1.	Leggere con attenzione e comprendere le pagine finanziarie dei quotidiani</h2>
                <p>
                <input type="radio" value="11" name="q5"  >MOLTO INTERESSATO<br />
                <input type="radio" value="12" name="q5" >POCO INTERESSATO<br />
                <input type="radio" value="13" name="q5" >ABBASTANZA INTERESSANTO<br />
                <input type="radio" value="14" name="q5" >PER NULLA INTERESSATO
                </p>
                <h2>2.	Effettuare una serie di interviste per conoscere l'opinione dei cittadini in merito a un nuovo provvedimento in materia fiscale</h2>
                <p>
                  <input type="radio" value="21" name="q6" >MOLTO INTERESSATO<br />
                  <input type="radio" value="22" name="q6" >POCO INTERESSATO<br />
                  <input type="radio" value="23" name="q6" >ABBASTANZA INTERESSANTO<br />
                  <input type="radio" value="24" name="q6" >PER NULLA INTERESSATO
                </p>
                <h2>3.	Analizzare determinate variabili economiche per formulare previsioni attendibili sul futuro andamento del mercato</h2>
                <p>
                  <input type="radio" value="31" name="q7" >MOLTO INTERESSATO<br />
                  <input type="radio" value="32" name="q7" >POCO INTERESSATO<br />
                  <input type="radio" value="33" name="q7" >ABBASTANZA INTERESSANTO<br />
                  <input type="radio" value="34" name="q7" >PER NULLA INTERESSATO
                </p>
                <h2>4.	Dedicarsi ai problemi delle associazioni artigiane per ottimizzare il trattamento pensionistico della categoria</h2>
                <p>
                  <input type="radio" value="41" name="q8" >MOLTO INTERESSATO<br />
                  <input type="radio" value="42" name="q8" >POCO INTERESSATO<br />
                  <input type="radio" value="43" name="q8" >ABBASTANZA INTERESSANTO<br />
                  <input type="radio" value="44" name="q8" >PER NULLA INTERESSATO
                </p>
                
                <input class="avanti" type="submit" value="AVANTI" >
              </form>


          
<!--  

echo "Favorite animal is " . $_SESSION["d1"] . ".";
echo "Favorite animal is " . $_SESSION["d2"] . ".";
echo "Favorite animal is " . $_SESSION["d3"] . ".";
echo "Favorite animal is " . $_SESSION["d4"] . ".";

-->


    
</body>
</html>