<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>PETERNAKAN ASTIPEL FARM</div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kandang">Kandang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ayam">Ayam</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/telur">Telur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/penjualan">Penjualan</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <div>@yield('konten')</div>
        <div>Ini adalah footer website</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
