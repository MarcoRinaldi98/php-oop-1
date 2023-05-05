<?php
    // definisco la classe movie con le sue instanze
    class Movie {

        public $title;
        public $poster;
        public $duration;
        public $year;
        public $genres;

        public function __construct(string $_title, string $_poster, int $_duration, int $_year, array $_genres) {
            $this->title = $_title;
            $this->poster = $_poster;
            $this->duration = $_duration;
            $this->year = $_year;
            $this->genres = $_genres;

            foreach($_genres as $genre) {
                if(!$genre instanceof Genre) {
                    echo "Ogni elemento dell'array genres deve essere un instanza di Genre";
                    die();
                }
            }
        }

        public function getAllInfo() {
            return "Movie: $this->title, Duration: $this->duration, Year: $this->year, Poster: $this->poster";
        }

        public function getGenreList() {
            $genres = [];
            foreach($this->genres as $genre) {
                $genres[] = $genre->name;
            }
            return implode(', ', $genres);
        }

    }

?>