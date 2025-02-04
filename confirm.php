<?php

    require_once("helper.php");

    if(!isAuthed())
    {
        header("location: login.php");
    }
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/x-icon" href="svg/vote.svg">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/vote.css">
    <link rel="stylesheet" href="styles/confirm.css">


    <title>Confirm</title>
</head>

<body>
    <div id='select-wrapper' class='site-wrapper'>
        <div class='content-wrapper'>
            <div class='topBar'>
                <div class='topBar-logo-wrapper'>
                    <div id='logo-link' data-link="index.php" class='topBar-logo link'></div>
                    <div data-link='index.php' class='topBar-logo-title text link'>ISU VOTER</div>
                </div>
                <div class='topBar-sandwich-wrapper'>
                    <div class='topBar-sandwich-text text'>Menu</div>
                    <div class='topBar-sandwich-icon'></div>
                </div>
            </div>
            <ul class='menu-wrapper'>
                <li id='menu' class='menu-item-wrapper text'>
                    <a id='menu-logout' data-link='vote.php' class='menu-item link'>Vote</a>
                    <a id='menu-logout' data-link='index.php' class='menu-item link'>Logout</a>
                </li>
            </ul>
            <div class='content'>
                <ul class='candidateList'>
                    <!-- <li id='${candidate.id}' class='candidate-wrapper confirm-wrapper'>
                        <div class='candidate-image confirm-image'></div>
                        <div class='candidate-name confirm-name text'>${candidate.name}</div>
                        <div class='candidate-position confirm-position text'>${candidate.position}</div>
                        <div class='candidate-options confirm-options '>
                            <a id='confirm-confirmed' data-link='thankYou.php' data-index='${index}' class='button button-vote text'>CONFIRM</a>
                            <a id='confirm-cancel' data-link='vote.php' data-index='${index}' class='button button-vote text'>CANCEL</a>
                        </div>
                    </li> -->
                </ul>
            </div>

        </div>
    </div>
</body>
<script src="scripts/jquery.js"></script>
<script src="scripts/general.js"></script>
<script src="scripts/confirm.js"></script>

</html>