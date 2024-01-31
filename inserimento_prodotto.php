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
      <ul>
        <li><a href="http://localhost/prodotti/home.html">Homepage</a></li>
        <li><a href="http://localhost/prodotti/elenco.php">Tabella prodotti</a></li>
        <li><a href="http://localhost/prodotti/codice_prodotto.php">Inserimento codice prodotto</a></li>
        <li><a href="http://localhost/prodotti/inserimento_prodotto.html"> Inserimento nuovo prodotto</a></li> 
        <li><a href="http://localhost/prodotti/registrati.html">Registrati</a></li>
        <li><a href="http://localhost/prodotti/accedi.html">Accedi</a></li>
      </ul><br><br> <br><br>
    <h1>Inserimento di un nuovo prodotto</h1>
        <?php
        session_start();
     $codice_prodotto = $_POST['codice_prodotto'];
     $descrizione = $_POST['descrizione'];
     $prezzo_unitario = $_POST['prezzo_unitario'];
     $quantita = $_POST['quantita'];

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
           
            $query= "INSERT INTO prodotti(codice_prodotto, descrizione, prezzo_unitario, quantita)VALUES 
            ('$codice_prodotto', '$descrizione', $prezzo_unitario, $quantita)";
            $risultato = mysqli_real_query($conn,$query);
            if(!$risultato){
                print "Errore nell'inserimento";
                exit();
            } else {
                print "Registrazine avvenuta correttamente <br> è stata inserita 1 riga.";
                exit();
            }
            mysqli_close($conn);
        ?>
    
    </body>
</html>