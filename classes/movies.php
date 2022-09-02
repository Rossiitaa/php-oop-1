<?php 
    class Movie {
        private $title;
        private $director;
        private $year;

        public function __construct($_title, $_director, $_year) {
            $this->title = $_title;
            $this->director = $_director;
            $this->year = $_year;
        }

    public function getTitle() {
        return $this->title;
    }
    public function getDirector() {
        return $this->director;
    }
    public function getYear() {
        return $this->year;
    }
}
?>