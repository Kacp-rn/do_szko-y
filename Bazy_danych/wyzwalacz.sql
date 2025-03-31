-- Wyzwalacz: Ustawienie statusu 'mentor' dla pracowników, którzy prowadzili 10 projektów
DELIMITER $$
CREATE TRIGGER UstawMentora
AFTER INSERT ON Projekty
FOR EACH ROW
BEGIN
    DECLARE liczba_projektow INT;
    SELECT COUNT(*) INTO liczba_projektow FROM Projekty WHERE ID_Pracownika = NEW.ID_Pracownika;
    IF liczba_projektow = 10 THEN
        UPDATE Pracownicy
        SET Stanowisko = 'Mentor'
        WHERE ID_Pracownika = NEW.ID_Pracownika;
    END IF;
END $$
DELIMITER ;