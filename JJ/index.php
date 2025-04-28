<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samochody</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f8ff; /* Jasny niebieski */
    }
    header {
        background-color: #1e90ff; /* Niebieski */
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
    nav {
        display: none; /* Ukryj menu domyślnie */
        position: absolute;
        top: 60px;
        right: 20px;
        background-color: #4682b4; /* Stonowany niebieski */
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
    .main-section {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* 3 kolumny */
        gap: 10px; /* Mniejsze odstępy między kafelkami */
        justify-items: center;
        padding: 20px;
    }
    .car-tile {
        border: 3px solid #ffa500; /* Pomarańczowy */
        border-radius: 15px;
        padding: 50px; /* Większe wypełnienie wewnętrzne */
        text-align: center;
        width: 350px; /* Większa szerokość */
        height: 250px; /* Większa wysokość */
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3); /* Większy cień */
        color: white;
        font-size: 24px; /* Większy tekst */
        font-weight: bold;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }
    .car-tile:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4); /* Delikatne cieniowanie */
        transform: translateY(-5px); /* Lekkie uniesienie kafelka */
    }
    .car-tile#porshe {
        background-color: #e63946; /* Czerwony kojarzący się z Porshe */
    }
    .car-tile#cadilac {
        background-color: #6a5acd; /* Fioletowy kojarzący się z Cadilac */
    }
    .car-tile#bmw {
        background-color: #1e90ff; /* Niebieski kojarzący się z BMW */
    }
    .car-tile#mercedes {
        background-color: #2c3e50; /* Grafitowy kojarzący się z Mercedes */
    }
    .car-tile#audi {
        background-color: #bdc3c7; /* Srebrny kojarzący się z Audi */
    }
    .car-tile#toyota {
        background-color: #ff4500; /* Pomarańczowy kojarzący się z Toyota */
    }
    footer {
        background-color: #ffa500; /* Pomarańczowy */
        color: white;
        text-align: center;
        padding: 10px 0;
        position: fixed;
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
        <h1>Samochody</h1>
        <div>
            <button class="menu-toggle">☰</button>
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
    <main class="main-section">
        <a href="porshe.php" class="car-tile" id="porshe">Porshe</a>
        <a href="cadilac.php" class="car-tile" id="cadilac">Cadilac</a>
        <a href="bmw.php" class="car-tile" id="bmw">BMW</a>
        <a href="mercedes.php" class="car-tile" id="mercedes">Mercedes</a>
        <a href="audi.php" class="car-tile" id="audi">Audi</a>
        <a href="toyota.php" class="car-tile" id="toyota">Toyota</a>
    </main>
    <footer>
        Copydown © Kacper Nalepa
    </footer>
</body>
</html>