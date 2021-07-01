<?php

class Comicbook  {
  public $title;
  public $series;
  public $editor;
  public $date;
  public $country;
  public $writers;
  public $artists;
  public $language;
  public $pages;
  public $format;
  public $colors;

    public function __construct ($title, $series, $editor, $date, $country, $writers, $artists, $language, $pages, $format, $colors) {
      $this->title = $title;
      $this->series = $series;
      $this->editor = $editor;
      $this->date = $date;
      $this->country = $country;
      $this->writers = $writers;
      $this->artists = $artists;
      $this->language = $language;
      $this->pages = $pages;
      $this->format = $format;
      $this->colors = $colors;
    }
}

class Bluray  {
  public $title;
  public $type;
  public $year;
  public $country;
  public $genre;
  public $studio;
  public $director;
  public $cast;

    public function __construct ($title, $type, $year, $country, $genre, $studio, $director, $cast) {
      $this->title = $title;
      $this->type = $type;
      $this->year = $year;
      $this->country = $country;
      $this->genre = $genre;
      $this->studio = $studio;
      $this->director = $director;
      $this->cast = $cast;
    }
}

class Actionfigures  {
  public $modelname;
  public $productor;
  public $type;
  public $material;
  public $year;

    public function __construct ($modelname, $productor, $type, $material, $year) {
      $this->modelname = $modelname;
      $this->productor = $productor;
      $this->type = $type;
      $this->material = $material;
      $this->year = $year;
    }
}

class Catalogue  {
  public $name;
  private $comics = [];
  private $blurays = [];
  private $aFigures = [];

  public function __construct ($name) {
    $this->name = $name;
  }
  public function addComic(Comicbook $comic) {
      $this->comics[] = $comic;
  }
  public function addBluray(Bluray $bluray) {
      $this->blurays[] = $bluray;
  }
  public function addAFigure(Actionfigures $aFigure) {
      $this->aFigures[] = $aFigure;
  }
  public function getComics() {
      return $this->comics;
  }
  public function getBlurays() {
      return $this->blurays;
  }
  public function getAFigures() {
      return $this->aFigures;
  }
}