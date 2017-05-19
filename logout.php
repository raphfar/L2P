<?php

require("config/db.php");
require("config/session.php");

session_destroy();

header('Location:index.php');