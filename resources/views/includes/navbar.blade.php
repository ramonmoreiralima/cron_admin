<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">Minha Ferramenta</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="">Cadastrar <span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">GetJson</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Desativado</a>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0" method="post" action="">
                @csrf 
            <input class="form-control mr-sm-2" name="nome01" id="name01" type="search" placeholder="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
           
        </form>
        </div>
      </nav>