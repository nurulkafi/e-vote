<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="{{ asset('images/logo.svg') }}" alt="" srcset="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class='sidebar-title'>Main Menu</li>
                <li class="sidebar-item @yield('Mahasiswa')">
                    <a href="{{ url('admin/mahasiswa') }}" class="sidebar-link ">
                        <i data-feather="users" width="20"></i>
                        <span>Master Mahasiswa</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('Paslon')">
                    <a href="{{ url('admin/paslon') }}" class="sidebar-link ">
                        <i data-feather="users" width="20"></i>
                        <span>Pasangan Calon</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('Vote')">
                    <a href="{{ url('admin/hasil_vote') }}" class="sidebar-link  ">
                        <i data-feather="users" width="20"></i>
                        <span>Hasil Vote</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

