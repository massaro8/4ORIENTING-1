<?php
// Start the session
session_start();
?>

<html>
<head>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<?php

if((isset($_POST['q37']) && trim($_POST['q37'])!="") && $_GET['pg']==10){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q37']=$_POST['q37'];
	$errore37="";
}
if((isset($_POST['q38']) && trim($_POST['q38'])!="") &&  $_GET['pg']==10){
	//come sopra
	$_SESSION['q38']=$_POST['q38'];
	$errore38="";
}
if((isset($_POST['q39']) && trim($_POST['q39'])!="") && $_GET['pg']==10){
	//provengo dalla pagina 1 e tutti i dati inseriti
	$_SESSION['q39']=$_POST['q39'];
	$errore39="";
}
if((isset($_POST['q40']) && trim($_POST['q40'])!="") &&  $_GET['pg']==10){
	//come sopra
	$_SESSION['q40']=$_POST['q40'];
	$errore40="";
}

	

  
	
   
?>



<?php

$eco="";

switch ($_SESSION['q1']) {
	case "11":
		$eco= 3;
		
		break;
		case "12":
			$eco= 2;
			
			break;
			case "13":
				$eco= 1;
				
				break;
				case "14":
					$eco= 0;
					
					break;
	
	default  :
	echo "i dati inseriti non hanno prodotto risultato";
		break;
				}
		switch ($_SESSION['q3']) {
			case "31":
				$eco= $eco+3;
				
				break;
				case "32":
					$eco= $eco+2;
					
					break;
					case "33":
						$eco= $eco+1;
						
						break;
						case "34":
							$eco= $eco+0;
							
							break;
			
			default  :
			echo "i dati inseriti non hanno prodotto risultato";
				break;
						}
				switch ($_SESSION['q14']) {
					case "141":
						$eco= $eco+3;
						
						break;
						case "142":
							$eco= $eco+2;
							
							break;
							case "143":
								$eco= $eco+1;
								
								break;
								case "144":
									$eco= $eco+0;
									
									break;
					
					default  :
					echo "i dati inseriti non hanno prodotto risultato";
						break;
								}
						switch ($_SESSION['q15']) {
							case "151":
								$eco= $eco+3;
								
								break;
								case "152":
									$eco= $eco+2;
									
									break;
									case "153":
										$eco= $eco+1;
										
										break;
										case "154":
											$eco= $eco+0;
											
											break;
							
							default  :
							echo "i dati inseriti non hanno prodotto risultato";
								break;
										}
								switch ($_SESSION['q17']) {
									case "171":
										$eco= $eco+3;
										
										break;
										case "172":
											$eco= $eco+2;
											
											break;
											case "173":
												$eco= $eco+1;
												
												break;
												case "174":
													$eco= $eco+0;
													
													break;
									
									default  :
									echo "i dati inseriti non hanno prodotto risultato";
										break;
												}
										switch ($_SESSION['q25']) {
											case "251":
												$eco= $eco+3;
												
												break;
												case "252":
													$eco= $eco+2;
													
													break;
													case "253":
														$eco= $eco+1;
														
														break;
														case "254":
															$eco= $eco+0;
															
															break;
											
											default  :
											echo "i dati inseriti non hanno prodotto risultato";
												break;
														}
												switch ($_SESSION['q27']) {
													case "271":
														$eco= $eco+3;
														
														break;
														case "272":
															$eco= $eco+2;
															
															break;
															case "273":
																$eco= $eco+1;
																
																break;
																case "274":
																	$eco= $eco+0;
																	
																	break;
													
													default  :
													echo "i dati inseriti non hanno prodotto risultato";
														break;
																}
														switch ($_SESSION['q28']) {
															case "281":
																$eco= $eco+3;
																
																break;
																case "282":
																	$eco= $eco+2;
																	
																	break;
																	case "283":
																		$eco= $eco+1;
																		
																		break;
																		case "284":
																			$eco= $eco+0;
																			
																			break;
															
															default  :
															echo "i dati inseriti non hanno prodotto risultato";
																break;
																		}
																switch ($_SESSION['q29']) {
																	case "291":
																		$eco= $eco+3;
																		
																		break;
																		case "292":
																			$eco= $eco+2;
																			
																			break;
																			case "293":
																				$eco= $eco+1;
																				
																				break;
																				case "294":
																					$eco= $eco+0;
																					
																					break;
																	
																	default  :
																	echo "i dati inseriti non hanno prodotto risultato";
																		break;
																				}
																		switch ($_SESSION['q30']) {
																			case "301":
																				$eco= $eco+3;
																				
																				break;
																				case "302":
																					$eco= $eco+2;
																					
																					break;
																					case "303":
																						$eco= $eco+1;
																						
																						break;
																						case "304":
																							$eco= $eco+0;
																							
																							break;
																			
																			default  :
																			echo "i dati inseriti non hanno prodotto risultato";
																				break;
		
}



?>
<?php
$ing="";

switch ($_SESSION['q5']) {
	case "51":
		$ing= 3;
		
		break;
		case "52":
			$ing= 2;
			
			break;
			case "53":
				$ing= 1;
				
				break;
				case "54":
					$ing= 0;
					
					break;
	
	default  :
	echo "i dati inseriti non hanno prodotto risultato";
		break;
				}
				switch ($_SESSION['q7']) {
					case "71":
						$ing= $ing+3;
						
						break;
						case "72":
							$ing= $ing+2;
							
							break;
							case "73":
								$ing= $ing+ 1;
								
								break;
								case "74":
									$ing= $ing+0;
									
									break;
					
					default  :
					echo "i dati inseriti non hanno prodotto risultato";
						break;
								}
								switch ($_SESSION['q10']) {
									case "101":
										$ing= $ing+3;
										
										break;
										case "102":
											$ing= $ing+2;
											
											break;
											case "103":
												$ing= $ing+ 1;
												
												break;
												case "104":
													$ing= $ing+0;
													
													break;
									
									default  :
									echo "i dati inseriti non hanno prodotto risultato";
										break;
												}
												switch ($_SESSION['q13']) {
													case "131":
														$ing= $ing+3;
														
														break;
														case "132":
															$ing= $ing+2;
															
															break;
															case "133":
																$ing= $ing+ 1;
																
																break;
																case "134":
																	$ing= $ing+0;
																	
																	break;
													
													default  :
													echo "i dati inseriti non hanno prodotto risultato";
														break;
																}
																switch ($_SESSION['q18']) {
																	case "181":
																		$ing= $ing+3;
																		
																		break;
																		case "182":
																			$ing= $ing+2;
																			
																			break;
																			case "183":
																				$ing= $ing+ 1;
																				
																				break;
																				case "184":
																					$ing= $ing+0;
																					
																					break;
																	
																	default  :
																	echo "i dati inseriti non hanno prodotto risultato";
																		break;
																				}
																				switch ($_SESSION['q19']) {
																					case "191":
																						$ing= $ing+3;
																						
																						break;
																						case "192":
																							$ing= $ing+2;
																							
																							break;
																							case "193":
																								$ing= $ing+ 1;
																								
																								break;
																								case "194":
																									$ing= $ing+0;
																									
																									break;
																					
																					default  :
																					echo "i dati inseriti non hanno prodotto risultato";
																						break;
																								}
																								switch ($_SESSION['q20']) {
																									case "201":
																										$ing= $ing+3;
																										
																										break;
																										case "202":
																											$ing= $ing+2;
																											
																											break;
																											case "203":
																												$ing= $ing+ 1;
																												
																												break;
																												case "204":
																													$ing= $ing+0;
																													
																													break;
																									
																									default  :
																									echo "i dati inseriti non hanno prodotto risultato";
																										break;
																												}
																												switch ($_SESSION['q23']) {
																													case "231":
																														$ing= $ing+3;
																														
																														break;
																														case "232":
																															$ing= $ing+2;
																															
																															break;
																															case "233":
																																$ing= $ing+ 1;
																																
																																break;
																																case "234":
																																	$ing= $ing+0;
																																	
																																	break;
																													
																													default  :
																													echo "i dati inseriti non hanno prodotto risultato";
																														break;
																																}
																																switch ($_SESSION['q32']) {
																																	case "321":
																																		$ing= $ing+3;
																																		
																																		break;
																																		case "322":
																																			$ing= $ing+2;
																																			
																																			break;
																																			case "323":
																																				$ing= $ing+ 1;
																																				
																																				break;
																																				case "324":
																																					$ing= $ing+0;
																																					
																																					break;
																																	
																																	default  :
																																	echo "i dati inseriti non hanno prodotto risultato";
																																		break;
																																				}
																																				switch ($_SESSION['q34']) {
																																					case "341":
																																						$ing= $ing+3;
																																						
																																						break;
																																						case "342":
																																							$ing= $ing+2;
																																							
																																							break;
																																							case "343":
																																								$ing= $ing+ 1;
																																								
																																								break;
																																								case "344":
																																									$ing= $ing+0;
																																									
																																									break;
																																					
																																					default  :
																																					echo "i dati inseriti non hanno prodotto risultato";
																																						break;
																																								}
																																								

?>
<?php 

$med="";

switch ($_SESSION['q2']) {
	case "21":
		$med= 3;
		
		break;
		case "22":
			$med= 2;
			
			break;
			case "23":
				$med= 1;
				
				break;
				case "24":
					$med= 0;
					
					break;
	
	default  :
	echo "i dati inseriti non hanno prodotto risultato";
		break;
				}
				switch ($_SESSION['q4']) {
					case "41":
						$med= $med+3;
						
						break;
						case "42":
							$med= $med+2;
							
							break;
							case "43":
								$med= $med+ 1;
								
								break;
								case "44":
									$med= $med+0;
									
									break;
					
					default  :
					echo "i dati inseriti non hanno prodotto risultato";
						break;
								}
								switch ($_SESSION['q6']) {
									case "61":
										$med= $med+3;
										
										break;
										case "62":
											$med= $med+2;
											
											break;
											case "63":
												$med= $med+ 1;
												
												break;
												case "64":
													$med= $med+0;
													
													break;
									
									default  :
									echo "i dati inseriti non hanno prodotto risultato";
										break;
												}
												switch ($_SESSION['q8']) {
													case "81":
														$med= $med+3;
														
														break;
														case "82":
															$med= $med+2;
															
															break;
															case "83":
																$med= $med+ 1;
																
																break;
																case "84":
																	$med= $med+0;
																	
																	break;
													
													default  :
													echo "i dati inseriti non hanno prodotto risultato";
														break;
																}
																switch ($_SESSION['q9']) {
																	case "91":
																		$med= $med+3;
																		
																		break;
																		case "92":
																			$med= $med+2;
																			
																			break;
																			case "93":
																				$med= $med+ 1;
																				
																				break;
																				case "94":
																					$med= $med+0;
																					
																					break;
																	
																	default  :
																	echo "i dati inseriti non hanno prodotto risultato";
																		break;
																				}
																				switch ($_SESSION['q16']) {
																					case "161":
																						$med= $med+3;
																						
																						break;
																						case "162":
																							$med= $med+2;
																							
																							break;
																							case "163":
																								$med= $med+ 1;
																								
																								break;
																								case "164":
																									$med= $med+0;
																									
																									break;
																					
																					default  :
																					echo "i dati inseriti non hanno prodotto risultato";
																						break;
																								}
																								switch ($_SESSION['q22']) {
																									case "221":
																										$med= $med+3;
																										
																										break;
																										case "222":
																											$med= $med+2;
																											
																											break;
																											case "223":
																												$med= $med+ 1;
																												
																												break;
																												case "224":
																													$med= $med+0;
																													
																													break;
																									
																									default  :
																									echo "i dati inseriti non hanno prodotto risultato";
																										break;
																												}
																												switch ($_SESSION['q33']) {
																													case "331":
																														$med= $med+3;
																														
																														break;
																														case "332":
																															$med= $med+2;
																															
																															break;
																															case "333":
																																$med= $med+ 1;
																																
																																break;
																																case "334":
																																	$med= $med+0;
																																	
																																	break;
																													
																													default  :
																													echo "i dati inseriti non hanno prodotto risultato";
																														break;
																																}
																																switch ($_SESSION['q37']) {
																																	case "371":
																																		$med= $med+3;
																																		
																																		break;
																																		case "372":
																																			$med= $med+2;
																																			
																																			break;
																																			case "373":
																																				$med= $med+ 1;
																																				
																																				break;
																																				case "374":
																																					$med= $med+0;
																																					
																																					break;
																																	
																																	default  :
																																	echo "i dati inseriti non hanno prodotto risultato";
																																		break;
																																				}
																																				switch ($_SESSION['q38']) {
																																					case "381":
																																						$med= $med+3;
																																						
																																						break;
																																						case "382":
																																							$med= $med+2;
																																							
																																							break;
																																							case "383":
																																								$med= $med+ 1;
																																								
																																								break;
																																								case "384":
																																									$med= $med+0;
																																									
																																									break;
																																					
																																					default  :
																																					echo "i dati inseriti non hanno prodotto risultato";
																																						break;
																																								}
																																															


?>
<?php

$let="";

switch ($_SESSION['q11']) {
	case "111":
		$let= 3;
		
		break;
		case "112":
			$let= 2;
			
			break;
			case "113":
				$let= 1;
				
				break;
				case "114":
					$let= 0;
					
					break;
	
	default  :
	echo "i dati inseriti non hanno prodotto risultato";
		break;
				}
				switch ($_SESSION['q12']) {
					case "121":
						$let= $let+3;
						
						break;
						case "122":
							$let= $let+2;
							
							break;
							case "123":
								$let= $let+ 1;
								
								break;
								case "124":
									$let= $let+0;
									
									break;
					
					default  :
					echo "i dati inseriti non hanno prodotto risultato";
						break;
								}
								switch ($_SESSION['q21']) {
									case "211":
										$let= $let+3;
										
										break;
										case "212":
											$let= $let+2;
											
											break;
											case "213":
												$let= $let+ 1;
												
												break;
												case "214":
													$let= $let+0;
													
													break;
									
									default  :
									echo "i dati inseriti non hanno prodotto risultato";
										break;
												}
												switch ($_SESSION['q24']) {
													case "241":
														$let= $let+3;
														
														break;
														case "242":
															$let= $let+2;
															
															break;
															case "243":
																$let= $let+ 1;
																
																break;
																case "244":
																	$let= $let+0;
																	
																	break;
													
													default  :
													echo "i dati inseriti non hanno prodotto risultato";
														break;
																}
																switch ($_SESSION['q26']) {
																	case "261":
																		$let= $let+3;
																		
																		break;
																		case "262":
																			$let= $let+2;
																			
																			break;
																			case "263":
																				$let= $let+ 1;
																				
																				break;
																				case "264":
																					$let= $let+0;
																					
																					break;
																	
																	default  :
																	echo "i dati inseriti non hanno prodotto risultato";
																		break;
																				}
																				switch ($_SESSION['q31']) {
																					case "311":
																						$let= $let+3;
																						
																						break;
																						case "312":
																							$let= $let+2;
																							
																							break;
																							case "313":
																								$let= $let+ 1;
																								
																								break;
																								case "314":
																									$let= $let+0;
																									
																									break;
																					
																					default  :
																					echo "i dati inseriti non hanno prodotto risultato";
																						break;
																								}
																								switch ($_SESSION['q35']) {
																									case "351":
																										$let= $let+3;
																										
																										break;
																										case "352":
																											$let= $let+2;
																											
																											break;
																											case "353":
																												$let= $let+ 1;
																												
																												break;
																												case "354":
																													$let= $let+0;
																													
																													break;
																									
																									default  :
																									echo "i dati inseriti non hanno prodotto risultato";
																										break;
																												}
																												switch ($_SESSION['q36']) {
																													case "361":
																														$let= $let+3;
																														
																														break;
																														case "362":
																															$let= $let+2;
																															
																															break;
																															case "363":
																																$let= $let+ 1;
																																
																																break;
																																case "364":
																																	$let= $let+0;
																																	
																																	break;
																													
																													default  :
																													echo "i dati inseriti non hanno prodotto risultato";
																														break;
																																}
																																switch ($_SESSION['q39']) {
																																	case "391":
																																		$let= $let+3;
																																		
																																		break;
																																		case "392":
																																			$let= $let+2;
																																			
																																			break;
																																			case "393":
																																				$let= $let+ 1;
																																				
																																				break;
																																				case "394":
																																					$let= $let+0;
																																					
																																					break;
																																	
																																	default  :
																																	echo "i dati inseriti non hanno prodotto risultato";
																																		break;
																																				}
																																				switch ($_SESSION['q40']) {
																																					case "401":
																																						$let= $let+3;
																																						
																																						break;
																																						case "402":
																																							$let= $let+2;
																																							
																																							break;
																																							case "403":
																																								$let= $let+ 1;
																																								
																																								break;
																																								case "404":
																																									$let= $let+0;
																																									
																																									break;
																																					
																																					default  :
																																					echo "i dati inseriti non hanno prodotto risultato";
																																						break;
																																								}
																																								


?>

<?php

function risultati(int $eco,int $ing,int $med,int $let){

if ($eco > $ing && $eco > $med  &&$eco > $let ) {
	echo "la tua facoltà è economia"; 

} 

if ($ing > $eco  && $ing > $med  && $ing > $let ) {
	echo "la tua facoltà è ingegneria";
}
if ($med > $ing  && $med > $eco && $med > $let ) {
	echo "la tua facoltà è medicina";
}
if ($let > $ing  && $let > $med && $let > $eco ) {
	echo "la tua facoltà è letteratura";

}
if ($eco == $ing || $ing == $eco) {
	echo "sei un ragazzo propenso sia per materie ingegneristiche e sia per materie econimiche e finanziare";
}
if ($eco == $med || $med == $eco) {
	echo "sei un ragazzo propenso sia per materie mediche e sia per materie econimiche e finanziare";
}
if ($eco == $let || $let == $eco) {
	echo "sei un ragazzo propenso sia per materie letterarie e sia per materie econimiche e finanziare";
}
if ($ing == $med || $med == $ing) {
	echo "sei un ragazzo propenso sia per materie ingegneristiche e sia per materie mediche";
}
if ($ing == $let || $ing == $let) {
	echo "sei un ragazzo propenso sia per materie ingegneristiche e sia per materie letterarie";
}
if ($med == $let || $let == $med) {
	echo "sei un ragazzo propenso sia per materie mediche e sia per materie letterarie";
}
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
      <div class="titolazione">
      <h1 class="titolo">IL RISULTATO</h1>
       <div class="bordo-sottotitolo">
	   <h2 class="sottotitolo"><?php risultati($eco, $ing, $med, $let) ?></h2>
	   <button class="fine"><a href="test.php">per riprovare da 1</a></button>
          </div>
</section>



 


  <script src="./app.js"></script>
</body>


</html>