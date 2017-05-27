<?php 
require("config/db.php");
include("header.php");
?>

<body>

<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-target="#navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Accueil</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="histoire.php">Histoire</a></li>
                <li><a href="photos.php">Photos</a></li>
                <li><a href="videos.php">Vidéos</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>