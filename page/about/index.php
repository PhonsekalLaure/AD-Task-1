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
</body>
</html>