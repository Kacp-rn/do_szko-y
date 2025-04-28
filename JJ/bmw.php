<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW</title>
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
        <h1>BMW</h1>
        <div>
            <button class="menu-toggle">☰</button>
            <a href="index.php" class="back-to-home">Powrót na stronę główną</a>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="porshe.php">Porshe</a></li>
            <li><a href="cadilac.php">Cadilac</a></li>
            <li><a href="bmw.php">BMW</a></li>
            <li><a href="mercedes.php">Mercedes</a></li>
            <li><a href="audi.php">Audi</a></li>
            <li><a href="toyota.php">Toyota</a></li>
        </ul>
    </nav>
    <main>
        <div class="car-section">
            <div class="car-text">
                <h2>Historia marki BMW</h2>
                <p>BMW (Bayerische Motoren Werke) to niemiecka marka samochodów premium, znana z doskonałych osiągów, luksusowego designu i innowacyjnych technologii. Firma została założona w 1916 roku i początkowo produkowała silniki lotnicze. Logo BMW symbolizuje obracające się śmigło na tle nieba.</p>
            </div>
            <div class="car-image">
                <img src="images/bmw-logo.png" alt="Logo BMW">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>BMW Serii 3</h2>
                <p>BMW Serii 3 to jeden z najbardziej rozpoznawalnych modeli marki, oferujący doskonałą równowagę między sportowymi osiągami a komfortem. Jest dostępny w wersjach sedan, kombi i coupe.</p>
            </div>
            <div class="car-image">
                <img src="images/bmw-seria3.png" alt="BMW Serii 3">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>BMW X5</h2>
                <p>BMW X5 to luksusowy SUV, który łączy przestronność z zaawansowanymi systemami bezpieczeństwa i napędem xDrive. Idealny dla rodzin i osób ceniących wygodę podczas długich podróży.</p>
            </div>
            <div class="car-image">
                <img src="images/bmw-x5.png" alt="BMW X5">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>BMW i8</h2>
                <p>BMW i8 to hybrydowy supersamochód, który zachwyca swoim futurystycznym wyglądem i zaawansowaną technologią. Jest symbolem innowacji i ekologicznego podejścia marki BMW.</p>
            </div>
            <div class="car-image">
                <img src="images/bmw-i8.png" alt="BMW i8">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Innowacje technologiczne</h2>
                <p>BMW jest liderem w dziedzinie technologii motoryzacyjnych. Marka wprowadziła wiele innowacji, takich jak systemy autonomicznej jazdy, zaawansowane oświetlenie LED oraz elektryczne modele, takie jak BMW i3 i BMW iX. BMW stale rozwija swoje pojazdy, aby sprostać wymaganiom nowoczesnego rynku.</p>
            </div>
            <div class="car-image">
                <img src="images/bmw-ix.png" alt="BMW iX">
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

// Pobranie liczby lajków i dislajków dla podstrony "bmw"
$sql = "SELECT likes, dislikes FROM page_likes WHERE page_name = 'bmw'";
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
    echo "<input type='hidden' name='page_name' value='bmw'>";
    echo "<button type='submit' name='like'>Lubię to</button>";
    echo "<button type='submit' name='dislike'>Nie lubię</button>";
    echo "</form>";
    echo "</div>";

    // Obsługa formularza
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['like'])) {
            $sql = "UPDATE page_likes SET likes = likes + 1 WHERE page_name = 'bmw'";
        } elseif (isset($_POST['dislike'])) {
            $sql = "UPDATE page_likes SET dislikes = dislikes + 1 WHERE page_name = 'bmw'";
        }
        if (mysqli_query($conn, $sql)) {
            // Przekierowanie, aby odświeżyć licznik bez ponownego wysyłania formularza
            header("Location: bmw.php");
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