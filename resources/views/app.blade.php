<!DOCTYPE html>
<html lang="pt-BR">
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <title>SUPRA</title>
    @inertiaHead
    @routes
    <style>
        .load-aet {
            position: fixed;
            top: 50%;
            width: 160px;
            height: 160px;
            border-radius: 80px;
            margin-left: 45%;
            z-index: 2000;
            -webkit-box-shadow: -3px -5px 34px -1px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: -3px -5px 34px -1px rgba(0, 0, 0, 0.75);
            box-shadow: -3px -5px 34px -1px rgba(0, 0, 0, 0.75);
            display: none;
        }
    </style>
</head>

<body class="sidebar-noneoverflow bg-light">
    <img id="load-aet" class="load-aet" src="{{ url('img/carregando.gif') }}" alt="">
    @inertia
    @vite('resources/js/app.js')
</body>

</html>
