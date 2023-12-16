<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
</head>
<body>
    <p>
        <?php
         class Foods {
            public $name;
            public $price;

            public function show_price() {
                echo $this->price;
            }
        }

        class Animals {
            public $name;
            public $height;
            public $weight;

            public function show_height() {
                echo $this->height;
            }
        }

        $Food = new Foods();
        $Food->name = "potate";
        $Food->price = "250";

        print_r($Food);
        echo "<br>";

        $Animal = new Animals();
        $Animal->name = "dog";
        $Animal->height = "60";
        $Animal->weight = "5000";

        print_r($Animal);
        echo "<br>";

        function showFood($Food) {
            echo $Food->price;
        }
        showFood($Food);
        echo "<br>";


        function showAnimal($Animal) {
            echo $Animal->height;
        }
        showAnimal($Animal);
        echo "<br>";

        ?>
    </p>
</body>
</html>