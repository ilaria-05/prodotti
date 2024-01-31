<!DOCTYPE html>
<html> 
    <head>
        <style>
            body {margin:0;}
            
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #333;
              position: fixed;
              top: 0;
              width: 100%;
            }
            
            li {
              float: left;
            }
            
            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }
            
            li a:hover:not(.active) {
              background-color: #1fcab3;
            }
            
            .active {
              background-color: #1fcab3;
            }
            </style>
    </head>
    <body> 
    <br><br>
      <?php
        if (!isset($_COOKIE[$user])){
          print ""
        }else{

        }
        $user = $_COOKIE['User'];
        if($user == ""){
          print "Devi prima autenticarti";
          print "<br><a href='http://localhost/prodotti/registrati.html'>Registrati</a>";
        }else{
      ?>
        <ul>
          <li><a href="http://localhost/prodotti/home.html">Homepage</a></li>
          <li><a href="http://localhost/prodotti/elenco.php">Tabella prodotti</a></li>
          <li><a href="http://localhost/prodotti/codice_prodotto.php">Inserimento codice prodotto</a></li>
          <li><a href="http://localhost/prodotti/inserimento_prodotto.html"> Inserimento nuovo prodotto</a></li> 
          <li><a href="http://localhost/prodotti/registrati.html">Registrati</a></li>
          <li><a href="http://localhost/prodotti/accedi.html">Accedi</a></li>
      </ul><br><br> <br><br>
        <p style= "font-size: 5">Ricerca prodotti</p>
        <form method='post' action = 'codice.php'>
            Codice prodtotto: <input type='text' name='codice' size='10'>
            <p> &nbsp;</p>
            <input type='submit' value='Visualizza'> &nbsp;&nbsp;&nbsp;
            <input type='reset' value='Annulla'>
        <?php } ?>
        </form>
    </body>
</html>