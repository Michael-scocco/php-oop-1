  
<?php 


class Film {

  public $title;
  public $director;
  public $year;
  public $budget;
  public $language;

  function __construct(string $title, string $director, int $year, int $budget, string $language){
    $this->title = $title;
    $this->director = $director;
    $this->year = $year;
    $this->budget = $budget;
    $this->language = $language;
  }
 

  /**
   * Get the value of title
   */ 
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set the value of title
   *
   * @return  self
   */ 
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get the value of director
   */ 
  public function getDirector()
  {
    return $this->director;
  }

  /**
   * Set the value of director
   *
   * @return  self
   */ 
  public function setDirector($director)
  {
    $this->director = $director;

    return $this;
  }

  /**
   * Get the value of year
   */ 
  public function getYear()
  {
    return $this->year;
  }

  /**
   * Set the value of year
   *
   * @return  self
   */ 
  public function setYear($year)
  {
    $this->year = $year;

    return $this;
  }

  /**
   * Get the value of budget
   */ 
  public function getBudget()
  {
    return $this->budget;
  }

  /**
   * Set the value of budget
   *
   * @return  self
   */ 
  public function setBudget($budget)
  {
    $this->budget = $budget;

    return $this;
  }

  /**
   * Get the value of language
   */ 
  public function getLanguage()
  {
    return $this->language;
  }

  /**
   * Set the value of language
   *
   * @return  self
   */ 
  public function setLanguage($language)
  {
    $this->language = $language;

    return $this;
  }
};

  $avengersEndgame = new Film("Avengers: Endgame", "Joe Russo", 2019, 300, "eng");
  $smettoQuandoVoglio = new Film("Smetto Quando Voglio", "Sydney Sibilia", 2014, 200, "ita");
  $batman = new Film("Batman", "Tim Burton", 1989, 100, "eng");

  var_dump($avengersEndgame, $smettoQuandoVoglio, $batman);

?>