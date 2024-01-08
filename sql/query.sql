-- codice prodotto
-- descrizione
-- prezzo unitario
-- quantità

--CREATE DATABASE prodotti;

CREATE TABLE prodotti(
    codice_prodotto char(5) PRIMARY KEY,
    descrizione     varchar(50),
    prezzo_unitario decimal(6,2),
    quantita        int
);

INSERT INTO prodotti(codice_prodotto, descrizione, prezzo_unitario, quantita) VALUES
('23456', 'Matita', 1, 80),
('54667', 'Gomma', 2, 100),
('65677', 'Penna a sfera', 2, 150),
('90765', 'Quaderno', 3.5, 200),
('76534', 'Notes', 2.5, 80),
('78906', 'Post It', 5, 300),
('45665', 'Penna stilografica', 25, 50),
('56734', 'Tempere', 10.50, 20),
('67658', 'Acquerelli', 18.20, 55),
('98345', 'Pastelli', 12, 120);