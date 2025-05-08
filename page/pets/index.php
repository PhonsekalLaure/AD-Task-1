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
        $menu = ["Home" => "../../index.php", "Pets" => "index.php", "About Us" => ""];
        $cats = [
            ["name" => "Oragne", "color" => "blue", "age" => 21, "image" => "assets/img/orange.gif"],
            ["name" => "George Bush", "color"=> "white", "age" => 2, "image" => "assets/img/george.gif"],
            ["name" => "Laughy", "color"=> "orange", "age" => 6, "image"=> "assets/img/laughy.gif"],
            ["name"=> "Tung Tung", "color"=> "white", "age" => 8, "image"=> "assets/img/tung tung.gif"]
        ];

        $dogs = [
            ["name" => "Browny", "color"=> "brown", "age"=> "11", "image" => "assets/img/browny.gif"],
            ["name"=> "Blud", "color"=> "black", "age" => "19", "image" => "assets/img/blud.gif"],
            ["name"=> "Snow", "color"=> "white", "age" => "5", "image"=> "assets/img/Snow.gif"],
            ["name"=> "Cupcake", "color"=> "brown", "age" => "7", "image"=> "assets/img/cupcake.gif"],
        ];

        $other = [
            ["name"=> "Tralalero", "specie"=> "shark", "age" => "1000","image"=> "assets/img/tralalero.gif"],
            ["name"=> "Patapim", "specie"=> "monkey", "age" => "30","image"=> "assets/img/patapim.gif"]
        ];
    ?>
    <header>
        <h1>Welcome to El Perro Y El Gato Adoption Center 🐶🐱</h1>
        <p>🐾Find your new furry friend today!🐾</p>
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

    </main>
</body>
</html>