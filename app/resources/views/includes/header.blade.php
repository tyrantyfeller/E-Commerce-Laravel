

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                {{-- Logo --}}
                <div class="col-4 text-center">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="navbar-brand-img" src="{{URL('/images/Draculartes-Logotipo-Loja-Draculartes-Artigos-em-impressao-3D.png')}}">
                    </a>
                </div>

                {{-- Pesquisar --}}
                <div class="col-4 text-center" style="padding: 23px 0em 0em 0em;">
                    <div class="input-group mb-3" data-bs-toggle="collapse">
                        <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon2" style="border-radius: 10px 0px 0px 10px;">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" style="border-radius: 0px 10px 10px 0px;"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>

                {{-- Login --}}
                <div class="col-4 text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="#" style="margin: 10px;"><i class="bi bi-person"></i> Login</a>
                    <a class="btn btn-sm btn-outline-secondary" href="#"><i class="bi bi-cart"></i> Carrinho</a>
                </div>

            </div>
        </header>
    </div>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-md justify-content-md-center" style="padding: 0px; background: #c9c9c9;">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="#">Link 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 6</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 7</a>
            </li>
        </ul>
    </nav>

