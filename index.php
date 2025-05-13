<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Perro Y El Gato Adoption Center</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php
        $menu = [
            "Home" => "index.php",
            "Pets" => "page/pets/index.php",
            "About Us" => "page/about/index.php"
        ];
    ?>
    <header>
        <h1>Welcome to El Perro Y El Gato Adoption Center 🐶🐱</h1>
        <p>🐾 Find your new furry friend today! 🐾</p>
    </header>
    <nav>
        <ul>
            <?php
                foreach ($menu as $title => $link){
                    echo "<li><a href = '$link'>$title</a></li>";
                }
            ?>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Every tail deserves a happy ending</h2>
            <p>We are dedicated to finding loving homes for our adorable pets. Every pet deserves a second chance, and we’re here to make that happen!</p>
            <a id="button" href="page/pets/index.php">View Available Pets</a>
        </section>
    </main>
            
</body>
</html>