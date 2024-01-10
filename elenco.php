<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1 style= "font size='5'">Elenco prodotti</h1>
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
            $query = "Select * from prodotti order by prezzo_unitario";
            $risultato = mysqli_query($conn, $query);
            if(!$risultato)
            {
                print "Errore nel comando SQL";
                exit();
            }
            $riga = mysqli_fetch_array($risultato);
            if($riga)
            {
                print "<table border = '1'>";
                print "<tr><td> CODICE </td><td> DESCRIZIONE </td><td> PREZZO </td><td> QUANTITA' </td></tr>";
                while($riga)
                    {
                        print"<tr><td>".$riga['codice_prodotto']."</td>";
                        print"<td>".$riga['descrizione']."</td>";
                        print"<td>".$riga['prezzo_unitario']."</td>";
                        print"<td>".$riga['quantita']."</td></tr>";
                        $riga = mysqli_fetch_array($risultato);
                    }
                print"</table>";
            } else {
                print "Attenzione! Non ci sono prodotti presenti";
            }
            mysqli_close($conn); 
        ?>
        </p>
    </body>
</html>