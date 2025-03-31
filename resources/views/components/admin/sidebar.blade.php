<aside class="d-flex flex-column border-end p-3" style="width: 250px; position: sticky; top: 0; height: 100vh; overflow-y: auto;">
    <div class="d-flex align-items-center mb-4 mt-2">
        <div>
            <h6 class="mb-1">SpaceSeat</h6>
            <div class="d-flex align-items-center">
                <span class="badge bg-danger me-2">Admin</span>
            </div>
        </div>
    </div>

    <ul class="nav flex-column mb-auto w-100">
        <li class="mb-1">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid me-2"></i> Dashboard
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('admin.usuarios') }}" class="nav-link {{ request()->routeIs('admin.usuarios') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Usuários
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('admin.cursos') }}" class="nav-link {{ request()->routeIs('admin.cursos') ? 'active' : '' }}">
                <i class="bi bi-book me-2"></i> Cursos
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('admin.categorias') }}" class="nav-link {{ request()->routeIs('admin.categorias') ? 'active' : '' }}">
                <i class="bi bi-tag me-2"></i> Categorias
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('admin.relatorios') }}" class="nav-link {{ request()->routeIs('admin.relatorios') ? 'active' : '' }}">
                <i class="bi bi-bar-chart me-2"></i> Relatórios
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('admin.financeiro') }}" class="nav-link {{ request()->routeIs('admin.financeiro') ? 'active' : '' }}">
                <i class="bi bi-cash-stack me-2"></i> Financeiro
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('admin.configuracoes') }}" class="nav-link {{ request()->routeIs('admin.configuracoes') ? 'active' : '' }}">
                <i class="bi bi-gear me-2"></i> Configurações
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