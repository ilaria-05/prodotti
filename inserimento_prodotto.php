<!DOCTYPE html>
<html> 
    <head></head>
    <body>
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