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
        <p style="text-align: center"><strong>Connessione al database</strong><br><br><br>
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "prodotti";
            //connesssione al server sql con selezione del database
            $conn = mysqli_connect($hostname, $username, $password, $dbname);
            if(!$conn)
                die("<br><br><strong>Errore nella connessione</strong>");
            else 
                print"<br><br><strong>Connessione avvenuta correttamente</strong><br><br>";
            mysqli_close($conn);
            print"<strong>Ora la connessione è chiusa</strong>"; 
        ?>
        </p>
    </body>
</html>
