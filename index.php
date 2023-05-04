<?php

    class Movie {

        public $title;
        public $genre;
        public $year;

        public function __construct($title, $genre, $year) {
            echo "Oggetto costruito!";
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
        }

        public function getAllInfo() {
            return $this->title . ' - ' . $this->genre . ' - ' . $this->year;
        }
    }

    $fantozzi = new Movie('Fantozzi', 'Comico', 1975);
    var_dump($fantozzi);

    $scream = new Movie('Scream', 'Horror', 1998);
    var_dump($scream);

    echo '<br /> <br />';

    echo $fantozzi->getAllInfo();
    echo '<br /> <br />';
    echo $scream->getAllInfo();

?>