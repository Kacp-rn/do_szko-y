<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche</title>
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
        .likes-dislikes {
            background-color: #f8f9fa;
            padding: 20px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
        }
        .likes-dislikes h3 {
            margin: 10px 0;
        }
        .likes-dislikes button {
            background-color: #ffa500;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s;
        }
        .likes-dislikes button:hover {
            background-color: #ff7f00;
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
        <h1>Porsche</h1>
        <div>
            <button class="menu-toggle">☰</button>
            <a href="index.php" class="back-to-home">Powrót na stronę główną</a>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="porshe.php">Porsche</a></li>
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
                <h2>Historia marki Porsche</h2>
                <p>Porsche to niemiecka marka samochodów sportowych, założona w 1931 roku przez Ferdinanda Porsche. Marka jest znana z produkcji luksusowych i wysokowydajnych samochodów, które łączą innowacyjne technologie z klasycznym designem.</p>
            </div>
            <div class="car-image">
                <img src="images/porsche-logo.png" alt="Logo Porsche">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Porsche 911</h2>
                <p>Porsche 911 to ikoniczny model marki, który od dekad wyznacza standardy w segmencie samochodów sportowych. Łączy wyjątkowe osiągi z ponadczasowym designem.</p>
            </div>
            <div class="car-image">
                <img src="images/porsche-911.png" alt="Porsche 911">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Porsche Cayenne</h2>
                <p>Porsche Cayenne to luksusowy SUV, który łączy przestronność z osiągami typowymi dla samochodów sportowych. Jest idealnym wyborem dla rodzin ceniących dynamikę jazdy.</p>
            </div>
            <div class="car-image">
                <img src="images/porsche-cayenne.png" alt="Porsche Cayenne">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Porsche Taycan</h2>
                <p>Porsche Taycan to elektryczny samochód sportowy, który reprezentuje przyszłość marki. Łączy innowacyjne technologie z osiągami na najwyższym poziomie.</p>
            </div>
            <div class="car-image">
                <img src="images/porsche-taycan.png" alt="Porsche Taycan">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Innowacje technologiczne</h2>
                <p>Porsche jest liderem w dziedzinie technologii motoryzacyjnych. Marka wprowadziła wiele innowacji, takich jak zaawansowane systemy napędu elektrycznego, lekkie konstrukcje oraz technologie poprawiające aerodynamikę i osiągi.</p>
            </div>
            <div class="car-image">
                <img src="images/porsche-innovations.png" alt="Innowacje Porsche">
            </div>
        </div>
    </main>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "auta");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT likes, dislikes FROM page_likes WHERE page_name = 'porshe'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $likes = $row['likes'];
            $dislikes = $row['dislikes'];

            echo "<div class='likes-dislikes'>";
            echo "<h3>Polubienia: $likes</h3>";
            echo "<h3>Niepolubienia: $dislikes</h3>";
            echo "<form method='POST' action=''>";
            echo "<input type='hidden' name='page_name' value='porshe'>";
            echo "<button type='submit' name='like'>Lubię to</button>";
            echo "<button type='submit' name='dislike'>Nie lubię</button>";
            echo "</form>";
            echo "</div>";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['like'])) {
                    $sql = "UPDATE page_likes SET likes = likes + 1 WHERE page_name = 'porshe'";
                } elseif (isset($_POST['dislike'])) {
                    $sql = "UPDATE page_likes SET dislikes = dislikes + 1 WHERE page_name = 'porshe'";
                }
                if (mysqli_query($conn, $sql)) {
                    header("Location: porshe.php");
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

    <footer>
        Copydown © Kacper Nalepa
    </footer>
</body>
</html>