<!-- Sidebar -->
<nav class="sidebar bg-dark text-white p-4">

    <ul class="nav flex-column">
        <li>
            <a href="{{ route('admin.home') }}" class="text-decoration-none">
                <h3 class="text-center">Admin Dashboard</h3>
            </a>
        </li>
        <li class="nav-item">
            <a href="http://localhost:5174" class="nav-link text-white">Vai al Portfolio</a>
        </li>
        {{-- <li class="nav-item">
            <a href="{{ route('admin.profile.index') }}" class="nav-link text-white">Gestisci Profilo</a>
        </li> --}}
        <li class="nav-item">
            <a href="{{ route('admin.projects.index') }}" class="nav-link text-white">Gestisci i Progetti</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.types.index') }}" class="nav-link text-white">Gestisci tipologie</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.technologies.index') }}" class="nav-link text-white">Gestisci tecnologie</a>
        </li>
        @auth
            <li class="nav-item">

                <a class="nav-link text-white" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @endauth
    </ul>
</nav>
