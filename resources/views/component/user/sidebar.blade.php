    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item active ">
        <a href="{{ route('user.dashboard') }}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-bookmarks-fill"></i>
            <span>Peminjaman Buku</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="{{ route('user.form.peminjaman') }}">Pinjam Buku</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('user.riwayat.peminjaman') }}">Riwayat Peminjaman Buku</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-journal-check"></i>
            <span>Pengembalian Buku</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="{{ route('user.pengembalian') }}">Kembalian Buku</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('user.riwayat.pengembalian') }}">Riwayat Pengembalian Buku</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-envelope-fill"></i>
            <span>Pesan</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="{{ route('user.pesan.masuk') }}">Pesan masuk
                </a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('user.pesan.terkirim') }}">Kirim Pesan</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item  ">
        <a href="{{ route('user.profile') }}" class='sidebar-link'>
            <i class="bi bi-person-circle"></i>
            <span>Profile Saya </span>
        </a>
    </li>

    <li class="sidebar-item {{ request()->is('logout*') ? 'active' : '' }} ">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            class="sidebar-link">
            <i class="bi bi-door-open-fill"></i>
            <span>Logout</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
