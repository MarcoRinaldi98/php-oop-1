<?php

    class Movie {

        public $title;
        public $genres;
        public $year;

        public function __construct(string $title, array $genres, int $year) {
            $this->title = $title;
            $this->genres = $genres;
            $this->year = $year;
        }

        public function getAllGenres() {
            $allGenres = '';
            foreach( $this->genres as $genre) {
                $allGenres .= $genre . ' ';
            }
            return $allGenres;
        }

        public function getAllInfo() {
            return $this->title . ' - ' . $this->getAllGenres() . ' - ' . $this->year;
        }
    }

?>