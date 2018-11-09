<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="<?=URL?>/public/css/painel.css">

<!--Estrutura do Template-->
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1 mr-0">
        LOGO
    </span>
    <ul class="nav justify-content-center">
        <h3 class="text-white">
            
        </h3>
    </ul>
    <ul class="nav justify-content-end">
        <!-- Sino de Notificações -->
        
        <div class="btn-group">
            <button style="background-color: transparent;color: #fff" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-alt"></i> Nome do Usuario
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">Sair <i class="fas fa-sign-out-alt"></i></button>
            </div>
        </div>
    </ul>
</nav>
<nav class="navbar navbar-expand-md navbar-dark bg-primary py-0">
    <button class="navbar-toggler border-light" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-list-ul text-light"></i>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <span></span>
        <ul class="navbar-nav ml-5 pl-5">        
            <li class="nav-item active">
                <a href="<?=URL?>/painel" class="nav-link">Painel Inicial</a>           
            </li>            
            <li class="nav-item active">
                <a href="<?=URL?>/painel/perfil" class="nav-link">Perfil</a>           
            </li>            
        </ul>
        <span></span>
    </div>
</nav>