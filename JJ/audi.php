<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audi</title>
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
           
            bottom: 0;
            width: 100%;
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
        <h1>Audi</h1>
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
                <h2>Historia marki Audi</h2>
                <p>Audi to niemiecka marka samochodów premium, znana z innowacyjnych technologii, luksusowego designu i doskonałych osiągów. Jej motto to "Vorsprung durch Technik" (Przewaga dzięki technice). Firma została założona w 1909 roku przez Augusta Horcha, a jej nazwa pochodzi od łacińskiego tłumaczenia nazwiska założyciela ("Horch" oznacza "słuchaj").</p>
            </div>
            <div class="car-image">
                <img src="images/audi-logo.png" alt="Logo Audi">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Audi A4</h2>
                <p>Audi A4 to jeden z najbardziej rozpoznawalnych modeli marki, oferujący doskonałą równowagę między komfortem, osiągami i nowoczesnymi technologiami. Jest dostępny w wersjach sedan i kombi.</p>
            </div>
            <div class="car-image">
                <img src="images/audi-a4.png" alt="Audi A4">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Audi Q7</h2>
                <p>Audi Q7 to luksusowy SUV, który łączy przestronność z zaawansowanymi systemami bezpieczeństwa i napędem quattro. Idealny dla rodzin i osób ceniących wygodę podczas długich podróży.</p>
            </div>
            <div class="car-image">
                <img src="images/audi-q7.png" alt="Audi Q7">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Audi R8</h2>
                <p>Audi R8 to supersamochód, który zachwyca swoim wyglądem i osiągami. Wyposażony w silnik V10, jest jednym z najbardziej ekscytujących modeli w ofercie Audi.</p>
            </div>
            <div class="car-image">
                <img src="images/audi-r8.png" alt="Audi R8">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Innowacje technologiczne</h2>
                <p>Audi jest pionierem w dziedzinie technologii motoryzacyjnych. Marka wprowadziła wiele innowacji, takich jak napęd quattro, systemy autonomicznej jazdy oraz zaawansowane oświetlenie LED i laserowe. Audi stale rozwija swoje pojazdy elektryczne, takie jak Audi e-tron, aby sprostać wymaganiom nowoczesnego rynku.</p>
            </div>
            <div class="car-image">
                <img src="images/audi-e-tron.png" alt="Audi e-tron">
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
        $sql = "SELECT likes, dislikes FROM page_likes WHERE page_name = 'audi'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $likes = $row['likes'];
            $dislikes = $row['dislikes'];
            echo "<div class='likes-dislikes'>";
            echo "<h3>Polubienia: $likes</h3>";
            echo "<h3>Niepolubienia: $dislikes</h3>";
            echo "<form method='POST' action=''>";
            echo "<input type='hidden' name='page_name' value='audi'>";
            echo "<button type='submit' name='like'>Lubię to</button>";
            echo "<button type='submit' name='dislike'>Nie lubię</button>";
            echo "</form>";
            echo "</div>";
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['like'])) {
                    $likes++;
                    $sql = "UPDATE page_likes SET likes = $likes WHERE page_name = 'audi'";
                } elseif (isset($_POST['dislike'])) {
                    $dislikes++;
                    $sql = "UPDATE page_likes SET dislikes = $dislikes WHERE page_name = 'audi'";
                }
                if (mysqli_query($conn, $sql)) {
                    
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }
            }

        } else {
            echo "Error: " . mysqli_error($conn);
        }


?>