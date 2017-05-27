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
                <li><a href="editprofile.php">Profil</a></li>
                <li><a href="joueurs.php">Joueurs</a></li>
                <li><a href="teams.php">Teams</a></li>
            </ul>
        </div>
    </div>
</nav>