<nav class="navbar-expand-md client-header">
    <div class="container-fluid nav-1 py-3">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <form class="d-flex px-3">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-light" type="submit"><i class="fas fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="col-md-4 text-center">
                <li class="navbar-brand"><a class="nav-link logo" href="{{ route('home') }}"><i class="fa-brands fa-slack"></i></a></li>
            </div>
            <div class="col-md-4 text-center">
                @if(auth()->check())
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}"><i class="fa fa-user"></i> Mi cuenta</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="{{ route('basket') }}"><i class="fas fa-basket-shopping"></i></a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login.index') }}"><i class="fa fa-user"></i> Mi cuenta</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="{{ route('login.index') }}"><i class="fas fa-basket-shopping"></i></a></li>
                @endif
            </div>
        </div>
    </div><!--end of nav-1-->
    <div class="container-fluid nav-2 py-3">
        <div class="row-1 d-flex mb-3">
            <div class="d-block d-md-none">
                <h2>Nuestras categorias!</h2>
            </div>
            <div class="col text-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">   
                    <i class="fas fa-bars-staggered"></i>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <div class="row container-fluid">
                <div class="col-sm-4 col-lg-2 offset-lg-1 pb-1">
                    <a class="btn btn-categorie p-3 nav-link" href="#">Sala</a></button>
                </div>
                <div class="col-sm-4 col-lg-2 pb-1">
                    <a class="btn btn-categorie p-3 nav-link" href="#">Comedores</a></button>
                </div>
                <div class="col-sm-4 col-lg-2 pb-1">
                    <a class="btn btn-categorie p-3 nav-link" href="#">Alcobas</a></button>
                </div>
                <div class="col-sm-6 col-lg-2 pb-1">
                    <a class="btn btn-categorie p-3 nav-link" href="#">Oficina</a></button>
                </div>
                <div class="col-sm-6 col-lg-2 pb-1">
                    <a class="btn btn-categorie p-3 nav-link" href="#">Electronicos</a></button>
                </div>
            </div>
        </div>
    </div>
</nav>