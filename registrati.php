<!DOCTYPE html>
<html>
    <head></head>
        <body>
        <ul>
            <li><a href="http://localhost/prodotti/home.html">Homepage</a></li>
            <li><a href="http://localhost/prodotti/elenco.php">Tabella prodotti</a></li>
            <li><a href="http://localhost/prodotti/codice_prodotto.php">Inserimento codice prodotto</a></li>
            <li><a href="http://localhost/prodotti/inserisci_prodotto.php"> Inserimento nuovo prodotto</a></li> 
            <li><a href="http://localhost/prodotti/registrati.html">Registrati</a></li>
            <li><a href="http://localhost/prodotti/accedi.html">Accedi</a></li>
        </ul><br><br> <br><br>
            <?php 
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $dbname = "prodotti";
                //connesssione al server sql con selezione del database
                $conn = mysqli_connect($hostname, $username, $password, $dbname);
                if(!$conn)
                {
                    die("<br><br><strong>Errore nella connessione</strong>");
                    exit();
                }
                session_start();
                $user = $_POST['User'];
                $nome = $_POST['Nome'];
                $cognome = $_POST['Cognome'];
                $password = $_POST['Password'];

                $query = "INSERT INTO utenti(Username, Nome, Cognome, Password) VALUES
                ('$user', '$nome','$cognome', '$password')";
                $risultato = mysqli_real_query($conn, $query);

                if(!$risultato)
                {
                    print "Errore nell'inserimento username già esistente ";
                } else {
                    print "Registrazione avvenuta correttamente";
                }
            mysqli_close($conn);
            ?>
        </body>

</html>