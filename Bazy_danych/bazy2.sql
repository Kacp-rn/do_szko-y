-- 1. Liczba projektów prowadzonych w kolejnych miesiącach poprzedniego roku
SELECT 
    EXTRACT(YEAR FROM Data_Rozpoczęcia) AS Rok,
    EXTRACT(MONTH FROM Data_Rozpoczęcia) AS Miesiąc,
    COUNT(*) AS Liczba_Projektów
FROM Projekty
WHERE EXTRACT(YEAR FROM Data_Rozpoczęcia) = EXTRACT(YEAR FROM CURRENT_DATE) - 1
GROUP BY Rok, Miesiąc
ORDER BY Rok, Miesiąc;

-- 2. Pracownicy, którzy nie prowadzili projektów w poprzednim kwartale
SELECT p.ID_Pracownika, p.Imię, p.Nazwisko
FROM Pracownicy p
WHERE p.ID_Pracownika NOT IN (
    SELECT DISTINCT ID_Pracownika
    FROM Projekty
    WHERE Data_Rozpoczęcia >= DATE_TRUNC('quarter', CURRENT_DATE - INTERVAL '3 months')
      AND Data_Rozpoczęcia < DATE_TRUNC('quarter', CURRENT_DATE)
);

-- 3. Liczba uczestników w projektach w poprzednim miesiącu w kolejności malejącej
SELECT p.ID_Projektu, p.Nazwa, COUNT(up.ID_Klienta) AS Liczba_Uczestników
FROM Projekty p
JOIN Uczestnicy_Projektów up ON p.ID_Projektu = up.ID_Projektu
WHERE EXTRACT(YEAR FROM p.Data_Rozpoczęcia) = EXTRACT(YEAR FROM CURRENT_DATE)
AND EXTRACT(MONTH FROM p.Data_Rozpoczęcia) = EXTRACT(MONTH FROM CURRENT_DATE) - 1
GROUP BY p.ID_Projektu, p.Nazwa
ORDER BY Liczba_Uczestników DESC;

-- 4. Klienci, którzy zamawiali projekty o wartości wyższej niż średnia
SELECT DISTINCT k.ID_Klienta, k.Imię, k.Nazwisko
FROM Klienci k
JOIN Uczestnicy_Projektów up ON k.ID_Klienta = up.ID_Klienta
JOIN Projekty p ON up.ID_Projektu = p.ID_Projektu
WHERE p.Budżet > (SELECT AVG(Budżet) FROM Projekty
                  WHERE EXTRACT(YEAR FROM Data_Rozpoczęcia) = EXTRACT(YEAR FROM CURRENT_DATE) - 1);

-- 5. Projekty, w których uczestniczył pracownik XXX w poprzednim miesiącu
SELECT p.ID_Projektu, p.Nazwa, p.Data_Rozpoczęcia, p.Data_Zakończenia
FROM Projekty p
WHERE p.ID_Pracownika = (SELECT ID_Pracownika FROM Pracownicy WHERE Imię = 'XXX')
AND EXTRACT(YEAR FROM p.Data_Rozpoczęcia) = EXTRACT(YEAR FROM CURRENT_DATE)
AND EXTRACT(MONTH FROM p.Data_Rozpoczęcia) = EXTRACT(MONTH FROM CURRENT_DATE) - 1;

-- 6. Pracownicy i klienci z tej samej miejscowości i ulicy
SELECT p.Imię AS Imię_Pracownika, p.Nazwisko AS Nazwisko_Pracownika, 
       k.Imię AS Imię_Klienta, k.Nazwisko AS Nazwisko_Klienta, 
       p.Adres
FROM Pracownicy p
JOIN Klienci k ON p.Adres = k.Adres;