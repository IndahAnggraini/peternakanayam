<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
              <i class="bi bi-bank"></i>
              <span>Beranda</span>
            </a>
        </li>
        @if (auth()->user()->role_id == 1)
        <li class="nav-item">
            <a class="nav-link collapsed" href="/user">
              <i class="bi bi-people-fill"></i>
              <span>Manajemen User</span>
            </a>
        </li>
        @elseif(auth()->user()->role_id == 2)
        <li class="nav-item">
            <a class="nav-link collapsed" href="/kandang">
              <i class="bi bi-clipboard"></i>
              <span>Kandang</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/ayam">
              <i class="bi bi-clipboard"></i>
              <span>Ayam</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/telur">
              <i class="bi bi-clipboard"></i>
              <span>Telur</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/pakan">
              <i class="bi bi-clipboard"></i>
              <span>Pakan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/produk">
              <i class="bi bi-clipboard"></i>
              <span>Produk</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/penjualan">
              <i class="bi bi-clipboard"></i>
              <span>Penjualan</span>
            </a>
        </li>
        @endif
    </ul>
</aside>
