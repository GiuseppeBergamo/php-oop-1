<?php


class Movie 
{

    public $title;
    public $genre;
    public $year;
    public $director;
    public $vote;

    public function __construct($title, $genre, $year, $director, $vote) 
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->director = $director;
        $this->vote = $vote;


    }

    public function setTitle($title)
    {
        if(!is_string($title)) return;
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

}


$movie_1 = new Movie('Django Unchained', 'Western', 2012, 'Quentin Tarantino', '8,4/10');
$movie_2 = new Movie('Videodrome', 'Horror', 1983, 'David Cronenberg', '7,2/10');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?= $movie_1->title ?></h2>
    <p><?= $movie_1->director ?></p>
    <ul>
        <li><?= $movie_1->genre ?></li>
        <li><?= $movie_1->year ?></li>
        <li><?= $movie_1->vote ?></li>

    </ul>

    <h2><?= $movie_2->title ?></h2>
    <p><?= $movie_2->director ?></p>
    <ul>
        <li><?= $movie_2->genre ?></li>
        <li><?= $movie_2->year ?></li>
        <li><?= $movie_2->vote ?></li>

    </ul>
</body>
</html>
