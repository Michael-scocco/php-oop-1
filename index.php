  
<?php  
    class Movie {
        public $name;
        public $language;
        public $year;
        public $genre;

        function __construct(string $name, string $language, int $year, string $genre) {
            $this->name = $name;
            $this->language = $language;
            $this->year = $year;
            $this->genre = $genre;
        }

        public function yearsSinceRelease() {
            return date("Y") - $this->year;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Object Oriented Programming</title>
    <style>
        .container {
            display: flex;
            gap: 30px;
            justify-content: center;
        }

        .movie {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: lavender;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
        $starWars = new Movie("Star Wars", "English", 1977, "Science fiction");
        $lordOfTheRings = new Movie("The Lord of the Rings: The Fellowship of the Ring", "English", 2001, "Fantasy");
        $americanPsycho = new Movie("American Psycho", "English", 2000, "Horror");
        $matrix = new Movie("The Matrix", "English", 1999, "Science fiction");

        $movies = [
            $starWars,
            $lordOfTheRings,
            $americanPsycho,
            $matrix
        ];
    ?>

    <div class="container">
        <?php 
            foreach($movies as $movie) {
                echo "
                <div class='movie'>
                    <div>{$movie->name}</div>
                    <div>{$movie->language}</div>
                    <div>{$movie->genre}</div>
                    <div class='release'>
                        <span>{$movie->year}</span>
                        <span>({$movie->yearsSinceRelease()} years ago)</span>
                    </div>
                </div>
                ";
            }
        ?>
    </div>
</body>
</html>