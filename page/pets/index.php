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
            "Pets" => "index.php",
            "About Us" => "../about/index.php"
        ];
        $cats = [
            ["name" => "Oragne", "color" => "blue", "age" => 21, "image" => "assets/img/orange.gif"],
            ["name" => "George Bush", "color"=> "white", "age" => 2, "image" => "assets/img/george.gif"],
            ["name" => "Laughy", "color"=> "orange", "age" => 6, "image"=> "assets/img/laughy.gif"],
            ["name"=> "Tung Tung", "color"=> "white", "age" => 8, "image"=> "assets/img/tung tung.gif"]
        ];

        $dogs = [
            ["name" => "Browny", "color"=> "Brown", "age"=> "11", "image" => "assets/img/browny.gif"],
            ["name"=> "Blud", "color"=> "Black", "age" => "19", "image" => "assets/img/blud.gif"],
            ["name"=> "Snow", "color"=> "White", "age" => "5", "image"=> "assets/img/Snow.gif"],
            ["name"=> "Cupcake", "color"=> "Brown", "age" => "7", "image"=> "assets/img/cupcake.gif"],
        ];

        $other = [
            ["name"=> "Tralalero", "color"=> "Blue", "age" => "1000","image"=> "assets/img/tralalero.gif"],
            ["name"=> "Patapim", "color"=> "Green/Brown", "age" => "30","image"=> "assets/img/patapim.gif"]
        ];
    ?>
    <header>
        <h1>Available Pets🦈🐒</h1>
        <p>🐾 Find your perfect furry companion from our loving pet family! 🐾</p>
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
    <h2>Meet Our Adorable Pets</h2>
    
    <div class="pets-section">
        <h3>Cats</h3>
        <div class="pets">
            <?php
            foreach ($cats as $pet) {
                echo "<div class='pet' style='background-color:rgb(245, 196, 156)'>";
                echo "<img src='{$pet['image']}' alt='{$pet['name']}'>";
                echo "<h3>{$pet['name']}</h3>";
                echo "<p>Color: {$pet['color']}</p>";
                echo "<p>Age: {$pet['age']} years old</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <div class="pets-section">
        <h3>Dogs</h3>
        <div class="pets">
            <?php
            foreach ($dogs as $pet) {
                echo "<div class='pet' style='background-color:rgb(255, 192, 174)'>";
                echo "<img src='{$pet['image']}' alt='{$pet['name']}'>";
                echo "<h3>{$pet['name']}</h3>";
                echo "<p>Color: {$pet['color']}</p>";
                echo "<p>Age: {$pet['age']} years old</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <div class="pets-section">
        <h3>Others</h3>
        <div class="pets">
            <?php
                foreach ($other as $pet) {
                    if ($pet["name"] == "Tralalero") {
                        $backgroundColor = "lightblue";
                    } else {
                        $backgroundColor = "lightgreen";
                    }

                echo "<div class='pet' style='background-color: $backgroundColor;'>";
                echo "<img src='{$pet['image']}' alt='{$pet['name']}'>";
                echo "<h3>{$pet['name']}</h3>";
                echo "<p>Color: {$pet['color']}</p>";
                echo "<p>Age: {$pet['age']} years old</p>";
                echo "</div>";
                }
            ?>
        </div>
    </div>
</main>
</body>
</html>