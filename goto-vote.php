<?php

    require_once("helper.php");

    if(isAuthed())
    {
        header("location: vote.php");
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link href="styles/hover.css" rel="stylesheet"> -->
    <link rel="icon" type="image/x-icon" href="svg/vote.svg">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/index.css">

    <title>Home</title>
</head>

<body>
    <div id='index-wrapper' class='site-wrapper'>
        <div class='content-wrapper'>
            <div id='section-1' class='section'>
                <div id='header-wrapper'>
                    <div class='logo-wrapper'>
                        <div class='logo'></div>
                    </div>
                    <div id='title-wrapper'>
                        <div class='text text-title'>UESTC ISU VOTING</div>
                    </div>
                    <div id='title-subText-wrapper'>
                        <div id='title-subText' class='text'>Vote for your ISU leader</div>
                    </div>
                </div>
            </div>
            <div id='section-2' class='section'>
                <div id='vote-paper'>
                    <div id='middle-logo'></div>
                </div>
            </div>
            <div id='section-3' class='section'>
                <div id='login-wrapper'>
                    <div id='login-top'>
                        <div id='login-top-lid'>
                            <div id='login-top-lid-entry'></div>
                        </div>
                    </div>
                    <div id='login-bottom'>
                        <a id='button-login' data-link='login.php' class='button button-light text link'>LOGIN</a>
                        <a id='button-register' data-link='register.php' class='button button-dark text link'>REGISTER ACCOUNT</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<script src="scripts/jquery.js"></script>
<script src="scripts/general.js"></script>
<script src="scripts/index.js"></script>

</html>