<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Practice</title>
</head>
<body>
    <?php
    class Person {
        public $name;
        public $age;

        public function __construct($name,$age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function introduce(){
            return "Hi i'm $this->name and i'm $this->age years old";
        }
    }

    class Student extends Person{
        public $grade;

        public function __construct($name,$age,$grade) {
            parent::__construct ($name,$age);
            $this->grade = $grade;
        }

        public function study() {
            return "I'm $this->name and I'm $this->age.My grade in the past exams were $this->grade";
        }
    }

    $p1 = new Person("Elsie","13");
    echo $p1->introduce(). "<br>";
    $s1 = new Student("Elsie","18","A-");
    echo $s1->study(). "<br>";
    ?>
</body>
</html>