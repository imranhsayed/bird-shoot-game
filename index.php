<?php
/**
 * Created by PhpStorm.
 * User: ghafir
 * Date: 25/05/17
 * Time: 4:23 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Its Raining Men! Abalooyaa!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="rain">

    <div class="main-content ">
        <header class="header">
            <div class="health-box">
                <p>Health Meter</p>
            </div>
            <div class="start-button">
                <button class="level1-start-button">Start the Game</button>
            </div>
            <div class="score-div">
                <p>Your Score</p>
                <p class="score-box">0</p>
            </div>

        </header>
        <content class="content">
            <div class="left-bird-nest"></div>
            <div class="right-bird-nest"></div>
        </content>
        <footer class="footer"></footer>
        <audio id="audio" >
            <source src="sounds/Gunsound.mp3" type="audio/mp3">
        </audio>
        <audio id="bird-flapping">
            <source src="sounds/bird-flapping.mp3" type="audio/mp3">
        </audio>
        <audio id="rain-falling">
            <source src="sounds/Rain-fall-background.mp3" type="audio/mp3">
        </audio>

    </div>
</section>

<div class="game-over display ">
    <p>Game Over. You Scored</p>
    <p class="game-over-score">0</p>
    <button class="level2-start-button">Play Level Two</button>
</div>
<script src="jquery.js"></script>
<script src="javascript.js"></script>
</body>
</html>
