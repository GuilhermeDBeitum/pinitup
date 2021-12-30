<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js', {
                scope: '/'
            })
            .then(function(registration) {
                console.log('Service Worker Registered');
            });

        navigator.serviceWorker.ready.then(function(registration) {
            console.log('Service Worker Ready');
        });
    }
    </script>

    <title>Pin ít UP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#080909">
    <meta name='msapplication-TileColor' content='#080909'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="/projetoweb/assets/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/projetoweb/assets/animate.css">
    <link rel="stylesheet" href="/projetoweb/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/projetoweb/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/projetoweb/assets/magnific-popup.css">
    <link rel="stylesheet" href="/projetoweb/assets/ionicons.min.css">
    <link rel="stylesheet" href="/projetoweb/assets/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/projetoweb/assets/flaticon.css">
    <link rel="stylesheet" href="/projetoweb/assets/icomoon.css">
    <link rel="stylesheet" href="/projetoweb/assets/style.css">
    <link rel="stylesheet" href="/projetoweb/assets/jquery.dataTables.css">

    <script src="/projetoweb/js/jquery.min.js"></script>
    <script src="/projetoweb/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/projetoweb/js/validate.js"></script>
    <script src="/projetoweb/js/bootstrap.min.js"></script>

</head>
