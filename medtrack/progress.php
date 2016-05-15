<?php

// Set the variables for the database access:
require_once('../db/connectvars.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rx, OTC, & Supplement Tracker</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <!-- Mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Dropdown.js -->
    <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

    <script src="../js/init.js" type="text/javascript"></script>


</head>
<body>
<!-- Add navigation -->
<div class="container">
    <div class="header">
        <h1>Track My Transition</h1>
    </div>

    <div class="jumbotron">
        <nav>
            <ul>
                <li class="s4 m4" l4><a href="calendar.php">Daily Calendar</a></li>
                <li class="s4 m4" l4><a href="hormone.php">Custom Treatment Plan</a></li>
                <li class="s4 m4" l4><a href="progress.php">My Progress</a></li>
            </ul>
        </nav>
    </div>

        <form class="s12 m12 l6" method="post" action="showprogress.php">
            <fieldset>
                <legend>Body Specifics</legend>
                <label for="weight">Weight: (lb)</label>
                <input type="number" name="weight">
                <label for="bust">Bust: (in)</label>
                <input type="number" name="bust">
                <label for="hip">Hips: (in)</label>
                <input type="number" name="hip">
                <label for="waist">Waist: (in)</label>
                <input type="number" name="waist">
            </fieldset>
            <fieldset>
                <legend>Journal</legend>
                <label for="comment">Comments:</label>
                <textarea name="comment" id=""></textarea>
            </fieldset>
            <input type="submit" name="submit" id="submit" Value="Track">
        </form>
</body>

</html>