<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Perro Y El Gato Adoption Center</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <?php
        $menu = [
            "Home" => "../../index.php",
            "Pets" => "../pets/index.php",
            "About Us" => "index.php"
        ];
    ?>
    <header>
        <h1>About Us</h1>
        <p>Learn more about El Perro Y El Gato Adoption Center</p>
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
            <h2>Who We Are</h2>
            <p>El Perro y El Gato Adoption Center is a non-profit organization dedicated to rescuing and finding homes for pets in need. We believe that every pet deserves a happy and loving home, and we work tirelessly to connect these wonderful animals with their forever families.</p>
            <h2>Our Mission</h2>
            <p>To provide a safe haven for abandoned and homeless pets while promoting responsible pet ownership through education and community engagement.</p>
        </section>
    </main>
</body>
</html>