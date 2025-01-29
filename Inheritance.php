<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP in PHP</title>
</head>
<body>
    <?php
    // Class is a template for objects.It describes the properties(Holds data) and the methods(define behavior)
    // An object is an instance of a class.Multiple objects can be created from a class each with its unique data.

    class Car {
        public $model;
        public $color;

        public function __construct($model,$color) {
            $this->model = $model;
            $this->color = $color;
        }

        public function startEngine() {
            return "The  $this->model which is $this->color in color is running";
        }
        
    }
    $car1 = new Car("BMW","Black");
    $car2 = new Car("Volvo","Black");

    echo $car1->startEngine();
    echo $car2->startEngine();

    // Inheritance - when a child classs inherits all properties and behaviors from the parent class.
     class Vehicle {
        public $move;
        public $type;

        public function __construct($move,$type)
        {
            $this->move = $move;
            $this->type = $type;
        }

        public function describe() {
            return "The $this->move vehicle was of a $this->type";
        }
     }

    //  A subclass ElectricVehicle will inherit the properties and behaviors  of the Vehicle suoerclass
     class ElectricVehicle extends Vehicle {
        public $batterylevel;

        public function __construct($move,$type,$batterylevel){
            parent::__construct ($move,$type);
            // parent:: __construct ($type);
            $this->batterylevel = $batterylevel;
        }

        public function charge() {
            return "The $this->type car was $this->move since it had a $this->batterylevel batterylevel.";
        }
     }

     $tesla = new ElectricVehicle("slowly","Tesla model S","30%");
     echo $tesla->describe();
     echo $tesla->charge();
    ?>
</body>
</html>