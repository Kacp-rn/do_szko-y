-- 7. Procedura zwiększająca koszt projektu dla podanego klienta
DELIMITER $$
CREATE PROCEDURE ZwiekszKosztProjektu(
    IN klient_id INT,
    IN dodatkowa_kwota DECIMAL
)
BEGIN
    UPDATE Projekty
    SET Budżet = Budżet + dodatkowa_kwota
    WHERE ID_Projektu IN (
        SELECT ID_Projektu FROM Uczestnicy_Projektów WHERE ID_Klienta = klient_id
    );
END$$
DELIMITER ;

-- 8. Klasyfikacja pracowników na podstawie liczby projektów
DELIMITER $$

CREATE PROCEDURE OcenaPracownikow()
BEGIN
    SELECT p.ID_Pracownika, p.Imię, p.Nazwisko,
           CASE
               WHEN COUNT(pr.ID_Projektu) >= 5 THEN 'super'
               WHEN COUNT(pr.ID_Projektu) BETWEEN 2 AND 4 THEN 'jako taki'
               ELSE 'marny'
           END AS Ocena
    FROM Pracownicy p
    LEFT JOIN Projekty pr ON p.ID_Pracownika = pr.ID_Pracownika
    GROUP BY p.ID_Pracownika, p.Imię, p.Nazwisko;
END$$

DELIMITER ;
