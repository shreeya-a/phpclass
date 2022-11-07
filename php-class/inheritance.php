<?php
    class Animal{
        public $weight = 40;
        public $height=50;
        private $color='red';

        public function getColor(){
            return $this->color;
        }

        public function move(){
            echo "Moving <br>";
            echo "Ironically I'm sitting and moving at the same time. Ask how? <br>";

        }

        function eat(){
            echo "Eating <br>";
            echo "How? <br>";
            echo "";
        }

        function irony(){
            //private lai access garna ko lagi used form same class then thik cha else getColor jasto function banayera push garna parcha
            echo "color: " .$this->color;

        }
    }

    // extends keyword is used for inheritance
    class Dog extends Animal{
        // echo "<b> Dog </b> <br>";


    }
    // $animal = new Animal;
    // $animal->move();
     
    $dog = new Dog();
    $dog->move();

    class Bird extends Animal{

        function fly()
        {
            echo "<b> Bird </b> <br>";
            echo "I have wings and I like to fly. <br>";
        }
    }


    $crow = new Bird;
    $crow->fly();
    // $crow->eat();
   echo $crow->getColor();
   $crow ->irony();
?>