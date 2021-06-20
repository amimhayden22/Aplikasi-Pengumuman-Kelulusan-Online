<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/dashboard') }}">APeK Online</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/dashboard') }}">AO</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item active">
                <a href="{{ url('/dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Menu</li>
            <li><a class="nav-link" href="{{ route('grades.index') }}"><i class="fas fa-school"></i> <span>Grades</span></a></li>
            <li><a class="nav-link" href="{{ route('students.index') }}"><i class="fas fa-users"></i> <span>Students</span></a></li>
            {{-- <li><a class="nav-link" href="{{ route('teachers.index') }}"><i class="fas fa-chalkboard-teacher"></i> <span>Teachers</span></a></li> --}}
            <li><a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-user"></i> <span>Users</span></a></li>
        </ul>
        
        <div class="p-3 hide-sidebar-mini">
            <a href="#" class="btn btn-danger btn-lg btn-block btn-icon-split" 
            data-confirm="Apakah kamu yakin?| Semoga hari-harimu menyenangkan :)" 
            data-confirm-yes="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </aside>
</div>