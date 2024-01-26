<!DOCTYPE html>
<html>
    <head></head>
        <body>
            <?php 
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $dbname = "utenti";
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