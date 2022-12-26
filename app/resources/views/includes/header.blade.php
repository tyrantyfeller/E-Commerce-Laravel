

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                {{-- Logo --}}
                <div class="col-4 text-center">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="navbar-brand-img" src="{{URL('/images/Draculartes_horizontal_PNG.png')}}">
                    </a>
                </div>

                {{-- Pesquisar --}}
                <div class="col-4 text-center" style="padding: 23px 0em 0em 0em;">
                    <div class="input-group mb-3" data-bs-toggle="collapse">
                        <input type="text" class="form-control search-input" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon2" >
                    </div>
                </div>

                {{-- Login --}}
                <div class="col-4 text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="#"><img alt="Minha conta" class="" src="{{URL('/images/Icon.png')}}"> Minha conta</a>
                    <a class="btn btn-sm btn-outline-secondary" href="#"><img alt="Minha conta" class="" src="{{URL('/images/Buy.png')}}"> Sacola</a>
                </div>

            </div>
        </header>
    </div>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-md justify-content-md-center" style="padding: 0px; background: #bfbfbf;">
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

