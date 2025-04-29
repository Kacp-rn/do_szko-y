<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercedes</title>
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
        <h1>Mercedes</h1>
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
                <h2>Historia marki Mercedes</h2>
                <p>Mercedes-Benz to niemiecka marka luksusowych samochodów, założona w 1926 roku. Jest symbolem innowacji, jakości i prestiżu. Marka odegrała kluczową rolę w historii motoryzacji, wprowadzając wiele przełomowych technologii, takich jak ABS, ESP i poduszki powietrzne.</p>
            </div>
            <div class="car-image">
                <img src="images/mercedes-logo.png" alt="Logo Mercedes">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Mercedes S-Class</h2>
                <p>Mercedes S-Class to flagowy model marki, który wyznacza standardy w dziedzinie luksusu, komfortu i technologii. Jest symbolem prestiżu i innowacji w motoryzacji.</p>
            </div>
            <div class="car-image">
                <img src="images/mercedes-sclass.png" alt="Mercedes S-Class">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Mercedes G-Class</h2>
                <p>Mercedes G-Class, znany również jako "Geländewagen", to luksusowy SUV o wyjątkowych możliwościach terenowych. Łączy klasyczny design z nowoczesnymi technologiami.</p>
            </div>
            <div class="car-image">
                <img src="images/mercedes-gclass.png" alt="Mercedes G-Class">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Mercedes EQS</h2>
                <p>Mercedes EQS to elektryczny sedan, który reprezentuje przyszłość marki. Łączy luksus, innowacyjne technologie i zasięg na najwyższym poziomie.</p>
            </div>
            <div class="car-image">
                <img src="images/mercedes-eqs.png" alt="Mercedes EQS">
            </div>
        </div>

        <div class="car-section">
            <div class="car-text">
                <h2>Innowacje technologiczne</h2>
                <p>Mercedes jest liderem w dziedzinie technologii motoryzacyjnych. Marka wprowadziła wiele innowacji, takich jak systemy autonomicznej jazdy, zaawansowane systemy bezpieczeństwa oraz elektryczne modele, które wyznaczają nowe standardy w branży.</p>
            </div>
            <div class="car-image">
                <img src="images/mercedes-innovations.png" alt="Innowacje Mercedes">
            </div>
        </div>
    </main>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "auta");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT likes, dislikes FROM page_likes WHERE page_name = 'mercedes'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $likes = $row['likes'];
            $dislikes = $row['dislikes'];

            echo "<div class='likes-dislikes'>";
            echo "<h3>Polubienia: $likes</h3>";
            echo "<h3>Niepolubienia: $dislikes</h3>";
            echo "<form method='POST' action=''>";
            echo "<input type='hidden' name='page_name' value='mercedes'>";
            echo "<button type='submit' name='like'>Lubię to</button>";
            echo "<button type='submit' name='dislike'>Nie lubię</button>";
            echo "</form>";
            echo "</div>";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['like'])) {
                    $sql = "UPDATE page_likes SET likes = likes + 1 WHERE page_name = 'mercedes'";
                } elseif (isset($_POST['dislike'])) {
                    $sql = "UPDATE page_likes SET dislikes = dislikes + 1 WHERE page_name = 'mercedes'";
                }
                if (mysqli_query($conn, $sql)) {
                    header("Location: mercedes.php");
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