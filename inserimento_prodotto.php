<!DOCTYPE html>
<html> 
    <head></head>
    <body> 
    <!DOCTYPE html>
<html> 
    <head></head>
    <body>
    <h1>Inserimento di un nuovo prodotto</h1>
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
            $codice_prodotto = $_POST['codice_prodotto'];
            $descrizione = $_POST['descrizione'];
            $prezzo_unitario = $_POST['prezzo_unitario'];
            $quantita = $_POST['quantita'];
            $query = "INSERT INTO prodotti (codice_prodotto, descrizione, prezzo_unitario, quantita) VALUES 
            ('$codice_prodotto', '$quantita', $prezzo_unitario, $quantita)";
            $risultato = mysqli_query($conn,$query);
            $n_riche = mysqli_affected_rows($conn);
            if(!$risultato){
                print "Errore nell'inserimento";
            } else {
                print "Registrazine avvanuta correttamente <br> sono state inserite $n_righe righe.";
            }
            mysqli_close($conn);
        ?>
    
    </body>
</html>