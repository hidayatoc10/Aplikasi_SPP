<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fad fa-bars"></i></a></li>
        </ul>
    </form>

    <ul class="navbar-nav navbar-right ml-auto">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="https://demo.getstisla.com/assets/img/avatar/avatar-1.png" width="30"
                    class="mr-1 rounded-circle">
                <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('setting.index') }}" class="dropdown-item has-icon">
                    <i class="fad fa-cog"></i> Pengaturan
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout').submit();">
                    <i class="fad fa-sign-out-alt"></i> Logout
                </a>
                <form action="{{ route('logout') }}" method="post" id="logout" style="display: none;">
                    @csrf
                    @method('post')
                </form>
            </div>
        </li>
    </ul>
</nav>
