<li class="sidebar-title">Menu</li>

<li class="sidebar-item active ">
    <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
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

<li class="sidebar-item  has-sub">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-stack"></i>
        <span>Master Data</span>
    </a>
    <ul class="submenu ">
        <li class="submenu-item ">
            <a href="{{ route('admin.data.anggota') }}">Data Anggota</a>
        </li>
        <li class="submenu-item ">
            {{-- <a href="{{ route('admin.data.penerbit') }}">Data Penerbit</a> --}}
        </li>
        <li class="submenu-item ">
            <a href="{{ route('admin.data.admin') }}">Administrator</a>
        </li>
        <li class="submenu-item ">
            {{-- <a href="{{ route('admin.data.peminjaman') }}">Data Peminjaman</a> --}}
        </li>
    </ul>
</li>
</ul>
