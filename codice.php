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
              background-color: #0499aa;
            }
            
            .active {
              background-color: #0499aa;
            }
            </style>
    </head>
    <body>
        <ul>
          <li><a href="http://localhost/prodotti/homepage.html">Homepage</a></li>
          <li><a href="http://localhost/prodotti/elenco.php">Tabella prodotti</a></li>
          <li><a href="http://localhost/prodotti/codice_prodotto.html">Inserimento codice prodotto</a></li>
          <li><a href="http://localhost/prodotti/inserisci_prodotto.html"> Inserimento nuovo prodotto</a></li> 
          <li><a href="http://localhost/prodotti/registrazione.html">Registrati</a></li>
          <li><a href="http://localhost/prodotti/accedi.html">Accedi</a></li>
        </ul><br><br> <br><br>
    <h1>Elenco dei prodotti:</h1>
        <?php
    
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "prodotti";
        //connesssione al server sql con selezione del database
        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        if(!$conn){
            die("<br><br><strong>Errore nella connessione</strong>");
            exit();
        }
        //recupera i dati passati daL form html
        $codice = $_POST['codice'];
        $query = "Select * from prodotti where codice_prodotto = '$codice'";
        $risultato = mysqli_query($conn,$query);
        if(!$risultato){
            print "Errore nel comando";
            exit();
        }
        $riga = mysqli_fetch_array($risultato);
        if ($riga){
            print "descrizione: ".$riga['descrizione']."<br>";
            print "prezzo unitario: ".$riga['prezzo_unitario']."<br>";
            print "quantità: ".$riga['quantita']."<br>";
        }else{
            print "Attenzione!!! codice prodotto $codice non presente ";
        }
        mysqli_close($conn);
        ?>
    </body>
</html>