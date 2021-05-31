<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>4Orienting</title>
</head>
<body>
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
            <li><a href="../test/test.php" data-after="Test">Test</a></li>
            <li><a href="#" data-after="Orientamento">Orientamento</a></li>
            <li><a href="../borsediStudio/borseStudio.html" data-after="Borse">Borse di studio</a></li>
            <li><a href="../contattaci/contattaci.html" data-after="Contact">Contatti</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
    <!-- search Section  -->
    <div class="boxContainer">
      <table class="elementsContainer">
        <tr>
          <td>
            <a href="#"><img src="../img/search .png">
            </a>
          </td>
          <td>
          <input type ="text" placeholder="Ricerca"
          class="search">
          </td>
        </tr>
      </table>
        </div>
    <!-- End search Section  -->

    <!-- map Section  -->

    <!-- End map Section  -->

    <?php
    if(defined('E_DEPRECATED')) {
        error_reporting(E_ALL & ~E_DEPRECATED);
    }
    header('Content-type: text/html;charset=utf-8');
    $id=mysql_connect("localhost","root","")
    or die("Non riesco a creare la connessione");
    mysql_select_db("universita")
    or die("Non trovo il DB");
    $sql="SELECT * FROM regioni";
    $rs=mysql_query($sql)
    or die("Query fallita");
    while($riga=mysql_fetch_array($rs))
        echo"<area href='#' shape='poly' coords='".$riga['Coords']."' onclick='universita(this.title,this.alt)' alt=".$riga['id']." title=".$riga['nome'].">";
    mysql_close();
  ?>
  </body>

  </html>