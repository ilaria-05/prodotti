-- CREATE DATABASEutenti;

CREATE TABLE utenti(
    Username    char(20) PRIMARY KEY,
    Nome        varchar(50),
    Cognome     varchar(50),
    Password    varchar(50)
);

INSERT INTO utenti(Username, Nome, Cognome, Password) VALUES
('francesco_', 'Francesco', 'Verde', '_francesco_verde_'),
('laura_11', 'Laura', 'Blu', 'Laura_Blu!'),
('elisa_bruno', 'Elisa', 'Bruno', 'El_Bruno4');