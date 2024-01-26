<!DOCTYPE html>
<html>
    <head>
    <title>Accesso</title>
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
                <li><a href="http://localhost/autenticazione/registrati.html">Registrati</a></li>
                <li><a href="http://localhost/autenticazione/accedi.html">Accedi</a></li>
            </ul><br><br> <br><br> 
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
                $password = $_POST['Password'];
                if ($user == "|| $password =="){
                    print "Campi vuoti";
                    print "<br><a href='http://localhost/autenticazione/accedi.html'>ritorna ad accedi</a>";
                } else {
                    $query ="Select * from utenti where username = '$user' && password  = '$password'";
                    $risultato = mysqli_query($conn, $query);
                    if (!$risultato){
                        print "Errore nel comando";
                        exit();
                    }
                    $riga = mysqli_fetch_array($risultato);
                    if ($riga){
                        print "Benvenuto ". $riga['Nome']." ".$riga['Cognome'];
                    } else {
                        print "Username o Password errate";
                    }
                
                }
                mysqli_close($conn);
            ?>
        </body>
</html>
