<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fyner personal database">
    <meta name="keywords" content="Fyner">

    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Fyner - database</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light fixed-top navbar-expand-sm">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- pirmas meniu -->
                <div class="navbar-collapse collapse dual-nav w-50 order-1 order-md-0">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-auto">
                            <a class="nav-link" pl-0" href="index.php">Pradžia <i class="fas fa-home"></i></a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="irengimai.php">Įrengimai <i class="fas fa-cogs"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- antras meniu -->
                <div class="navbar-collapse collapse dual-nav w-50 order-2">
                    <ul class="nav navbar-nav ml-auto">


                        <!-- <div class="input-group" style="width: 300px;">
                            <input type="text" class="form-control" placeholder="E-mail">
                            <input type="text" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </div> -->


                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle btn-block" type="button" id="button-prisijunk"
                                data-toggle="dropdown">Vartotojas</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <form class="px-2 py-2">
                                    <p class="loginas">Prisijunk</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Slapyvardis">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Slaptažodis">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Pirmyn </button>
                                </form>
                                <center>
                                    <a class="dropdown-item" href="#">Pamiršai slaptažodį? </a>
                                    <a class="dropdown-item" href="#">Registruokis! </a>
                                </center>
                            </div>
                        </div>
                </div>
            </div>



            </ul>
            </div>
            </div>
        </nav>
    </header>
