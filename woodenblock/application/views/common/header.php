<!DOCTYPE html>
<html>
<head>
    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"></meta>
    <title>WOODENBLOCKS</title>

</head>

<body>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="<?php echo base_url('index.php/users') ?>">Entrar</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url('index.php/users/register') ?>">Registrar</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper teal lighten-2">
            <a href="#!" class="brand-logo">WOODENBLOCKS</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="home.php">HOME</a></li>
                <li><a href="profile.php">PERFIL</a></li>
                <li><a href="tarefas.php">TAREFAS</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">ENTRAR<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul class="side-nav teal lighten-4" id="mobile-demo">
                <li><a href="home.php">HOME</a></li>
                <li class="divider"></li>
                <li><a href="profile.php">PERFIL</a></li>
                <li class="divider"></li>
                <li><a href="tarefas.php">TAREFAS</a></li>
                <li class="divider"></li>
                <li><a href="login.php">ENTRAR</a></li>
                <li><a href="register.php">REGISTRAR</a></li>
            </ul>
        </div>
    </nav>


    <style>
        nav{
            margin-bottom: 15%;
        }
        footer{
            margin-top:15%;
        }
    </style>
