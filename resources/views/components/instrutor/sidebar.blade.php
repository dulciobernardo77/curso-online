<aside class="d-flex flex-column border-end p-3" style="width: 250px; position: sticky; top: 0; height: 100vh; overflow-y: auto;">
    <div class="d-flex align-items-center mb-4 mt-2">
        <div>
            <h6 class="mb-1">SpaceSeat</h6>
            <div class="d-flex align-items-center">
                <span class="badge bg-accent me-2">Instrutor</span>
                @if(isset($courseTitle))
                    <small class="text-secondary">{{ $courseTitle }}</small>
                @endif
            </div>
        </div>
    </div>

    <ul class="nav flex-column mb-auto w-100">
        <li class="mb-1">
            <a href="{{ route('instrutor.dashboard') }}" class="nav-link {{ request()->routeIs('instrutor.dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid me-2"></i> Dashboard
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('instrutor.cursos.index') }}" class="nav-link {{ request()->routeIs('instrutor.cursos.*') ? 'active' : '' }}">
                <i class="bi bi-book me-2"></i> Meus Cursos
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('instrutor.alunos.index') }}" class="nav-link {{ request()->routeIs('instrutor.alunos.*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Meus Alunos
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('instrutor.perfil.index') }}" class="nav-link {{ request()->routeIs('instrutor.perfil.*') ? 'active' : '' }}">
                <i class="bi bi-person-circle me-2"></i> Perfil
            </a>
        </li>
    </ul>

    <div class="border-top pt-3 mt-3">
        <a href="{{ route('logout') }}" class="nav-link text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-left me-2"></i> Sair
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</aside> 