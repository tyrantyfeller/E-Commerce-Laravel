

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


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>



