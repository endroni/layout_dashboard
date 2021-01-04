<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Dashboard</title>

    <!-- Boostrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="./css/all.css" rel="stylesheet">

    <!-- CSS Próprio -->
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
    <section class="menu">
        <div class="logo">
            <img src="./imgs/icone-especializati.png" alt="Logo Curso" class="logo-painel">
        </div>

        <div class="list-menu">
            <ul class="menu-list">
                <li>
                    <a href="">   
                        <i class="fas fa-home"></i>    
                        Home
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="far fa-address-card"></i>
                        Listagem
                    </a>
                </li>

                <li>    
                    <a href="">
                        <i class="fab fa-fort-awesome"></i>
                        Forms
                    </a>
                </li>
            </ul>

        </div>

    </section> <!-- Fim do Menu -->
    

    <section class="content">
        <div class="top-dashboard">
        <div class="dropdown user-dash">
        <div class="dropdown-toggle" id="dropDownCuston" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="./imgs/user-rubem-candido.png" alt="Rubem Cândido" class="user-dashboard rounded-circle">
            <p class="user-name">Nome User</p>
        </div>
        <div class="dropdown-menu dp-menu" aria-labelledby="dropDownCuston">
            <a class="dropdown-item" href="#">Perfil</a>
            <a class="dropdown-item" href="#">Logout</a>
        </div>
        </div>

        </div>
    </section> <!-- Fim do conteúdo -->

    <!-- Js Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>