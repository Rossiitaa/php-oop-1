<?php
    require_once __DIR__ . '/classes/movies.php';

    $movie1 = new Movie('The Godfather', 'Francis Ford Coppola', 1972);
    $movie2 = new Movie('The Shawshank Redemption', 'Frank Darabont', 1994);
    $movie3 = new Movie('Natale in India', 'Neri Parenti', 2003);
    $movie4 = new Movie('Limitless', 'Neil Burger', 2011);
    $movie5 = new Movie('Call me by your name', 'Luca Guadagnino', 2017);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <h1>MOVIE:</h1>
    <ul>
        <li>Title: <?php echo $movie1->getTitle(); ?></li>
        <li>Director: <?php echo $movie1->getDirector(); ?></li>
        <li>Year: <?php echo $movie1->getYear(); ?></li>
    </ul>
    <ul>
        <li>Title: <?php echo $movie2->getTitle(); ?></li>
        <li>Director: <?php echo $movie2->getDirector(); ?></li>
        <li>Year: <?php echo $movie2->getYear(); ?></li>
    </ul>
    <ul>
        <li>Title: <?php echo $movie3->getTitle(); ?></li>
        <li>Director: <?php echo $movie3->getDirector(); ?></li>
        <li>Year: <?php echo $movie3->getYear(); ?></li>
    </ul>
    <ul>
        <li>Title: <?php echo $movie4->getTitle(); ?></li>
        <li>Director: <?php echo $movie4->getDirector(); ?></li>
        <li>Year: <?php echo $movie4->getYear(); ?></li>
    </ul>
    <ul>
        <li>Title: <?php echo $movie5->getTitle(); ?></li>
        <li>Director: <?php echo $movie5->getDirector(); ?></li>
        <li>Year: <?php echo $movie5->getYear(); ?></li>
    </ul>
</body>
</html>