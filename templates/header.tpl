<body>
    <header>  
      
        <nav class="navbar navbar-expand-sm bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="inicio">Libreria</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center flex-grow-1">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="libros">Libros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="autores">Autores</a>
                  </li>
                  <li class="nav-item session-button d-flex align-items-center">
                  {if $user}
                    <span class="nav-text mx-3 welcome-message">Hola {$user->nombre}!</span>
                    <a class="btn btn-primary" href="logout">
                      <i class="fa-solid fa-right-from-bracket"></i>
                      Salir
                    </a>  
                  {else}
                    <a class="btn btn-primary" href="iniciar-sesion">
                      <i class="fa-solid fa-right-to-bracket"></i>
                      Iniciar sesión
                    </a>
                  {/if}
                  </li>
                </ul>
              </div>
            </div>
          </nav>

    </header>
    <main class="row d-flex justify-content-center w-100">
    