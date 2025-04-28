<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadillac</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
        }
        header {
            background-color: #1e90ff;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .menu-toggle {
            background-color: #ffa500;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        header .menu-toggle:hover {
            background-color: #ff7f00;
        }
        header .back-to-home {
            background-color: #ffa500;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        header .back-to-home:hover {
            background-color: #ff7f00;
        }
        nav {
            display: none; /* Ukryj menu domyślnie */
            position: absolute;
            top: 60px;
            right: 20px;
            background-color: #4682b4;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 10px;
        }
        nav ul li {
            margin: 5px 0;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav ul li a:hover {
            background-color: #ff7f00;
        }
        main {
            padding: 20px;
        }
        .car-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f8f9fa; /* Delikatne szare tło */
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .car-section:nth-child(even) {
            flex-direction: row-reverse; /* Naprzemienne ułożenie zdjęć */
        }
        .car-text {
            width: 50%;
            padding-right: 20px;
            text-align: left;
        }
        .car-image {
            width: 50%;
            text-align: center;
        }
        .car-image img {
            max-width: 90%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        footer {
            background-color: #ffa500;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.querySelector('.menu-toggle');
            const nav = document.querySelector('nav');

            menuToggle.addEventListener('click', () => {
                nav.style.display = nav.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
</head>
<body>
    <header>
        <h1>Cadillac</h1>
        <div>
            <button class="menu-toggle">☰</button>
            <a href="index.php" class="back-to-home">Powrót na stronę główną</a>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="porshe.php">Porshe</a></li>
            <li><a href="cadilac.php">Cadillac</a></li>
            <li><a href="bmw.php">BMW</a></li>
            <li><a href="mercedes.php">Mercedes</a></li>
            <li><a href="audi.php">Audi</a></li>
            <li><a href="toyota.php">Toyota</a></li>
        </ul>
    </nav>
    <main>
        <div class="car-section">
            <div class="car-text">
                <h2>Historia marki Cadillac</h2>
                <p>Cadillac to amerykańska marka luksusowych samochodów, założona w 1902 roku. Jest symbolem prestiżu i innowacji w motoryzacji. Marka odegrała kluczową rolę w rozwoju przemysłu samochodowego, wprowadzając wiele nowatorskich rozwiązań, takich jak elektryczny rozrusznik czy automatyczna skrzynia biegów.</p>
            </div>
            <div class="car-image">
                <img src="images/cadillac-logo.png" alt="Logo Cadillac">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Cadillac Escalade</h2>
                <p>Cadillac Escalade to luksusowy SUV, który stał się ikoną w swojej klasie. Łączy przestronność, zaawansowane technologie i imponujące osiągi, oferując wyjątkowy komfort jazdy.</p>
            </div>
            <div class="car-image">
                <img src="images/cadillac-escalade.png" alt="Cadillac Escalade">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Cadillac CT5</h2>
                <p>Cadillac CT5 to elegancki sedan, który łączy nowoczesny design z dynamicznymi osiągami. Jest wyposażony w najnowsze technologie, zapewniając komfort i bezpieczeństwo na najwyższym poziomie.</p>
            </div>
            <div class="car-image">
                <img src="images/cadillac-ct5.png" alt="Cadillac CT5">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Cadillac Lyriq</h2>
                <p>Cadillac Lyriq to elektryczny SUV, który reprezentuje przyszłość marki. Łączy innowacyjne technologie z luksusowym designem, oferując zasięg i osiągi na najwyższym poziomie.</p>
            </div>
            <div class="car-image">
                <img src="images/cadillac-lyriq.png" alt="Cadillac Lyriq">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Innowacje technologiczne</h2>
                <p>Cadillac jest pionierem w dziedzinie technologii motoryzacyjnych. Marka wprowadziła wiele innowacji, takich jak systemy autonomicznej jazdy Super Cruise, zaawansowane systemy bezpieczeństwa oraz elektryczne modele, które wyznaczają nowe standardy w branży.</p>
            </div>
            <div class="car-image">
                <img src="images/cadillac-innovations.png" alt="Innowacje Cadillac">
            </div>
        </div>
    </main>
    <footer>
        Copydown © Kacper Nalepa
    </footer>
</body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "auta");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Pobranie liczby lajków i dislajków dla podstrony "cadilac"
$sql = "SELECT likes, dislikes FROM page_likes WHERE page_name = 'cadilac'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $likes = $row['likes'];
    $dislikes = $row['dislikes'];

    // Wyświetlenie liczby lajków i dislajków oraz formularza
    echo "<div class='likes-dislikes'>";
    echo "<h3>Polubienia: $likes</h3>";
    echo "<h3>Niepolubienia: $dislikes</h3>";
    echo "<form method='POST' action=''>";
    echo "<input type='hidden' name='page_name' value='cadilac'>";
    echo "<button type='submit' name='like'>Lubię to</button>";
    echo "<button type='submit' name='dislike'>Nie lubię</button>";
    echo "</form>";
    echo "</div>";

    // Obsługa formularza
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['like'])) {
            $sql = "UPDATE page_likes SET likes = likes + 1 WHERE page_name = 'cadilac'";
        } elseif (isset($_POST['dislike'])) {
            $sql = "UPDATE page_likes SET dislikes = dislikes + 1 WHERE page_name = 'cadilac'";
        }
        if (mysqli_query($conn, $sql)) {
            // Przekierowanie, aby odświeżyć licznik bez ponownego wysyłania formularza
            header("Location: cadilac.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>