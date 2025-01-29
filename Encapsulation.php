<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulation</title>
</head>
<body>
    <?php
    // Enapsulation ensured data is accessed securely
    // Public accessed everywhere
    // Protected is accessed within the class and its children only
    // Private is accessed within a class only

    class Fruit {
        public $name;
        public $color;

        public function __construct($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        protected function intro() {
            return "The fruit is $this->name and the color is $this->color";
        }
    }
    class Banana extends Fruit {
        public $season;
        public function __construct ($name,$color,$season) {
            parent::__construct($name,$color);
            $this->season = $season;
        }

        public function describe() {
            return $this->intro(). "The $this->name is usually $this->season";
        }
    }

    $b1 = new Banana("Matoke","Green","Throughout");
    echo $b1->describe();
    ?>
</body>
</html>