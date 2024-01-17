<!DOCTYPE html>
<html> 
    <head></head>
    <body>
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