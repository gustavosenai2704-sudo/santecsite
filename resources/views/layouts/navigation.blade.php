{{-- resources/views/layouts/navigation.blade.php --}}
<nav class="custom-navbar">
    <div class="nav-container" id="navContainer">
        <!-- Logo e Nome -->
        <a href="{{ route('homepage') }}" class="nav-brand">
            <img src="https://santecdesentupidora.com.br/wp-content/uploads/2024/08/logo-santec-desentupidora.png" 
                 alt="Santec Desentupidora" 
                 class="nav-brand-logo">
            <div>
                <h1 class="nav-brand-text">Santec<span class="nav-brand-subtext">Desentupidora</span></h1>
            </div>
        </a>

        <!-- Links de Navegação -->
        <ul class="nav-links">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}" 
                   href="{{ route('homepage') }}">
                    Início
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('servicos') ? 'active' : '' }}" 
                   href="{{ route('servicos') }}">
                    Serviços
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('sobre') ? 'active' : '' }}" 
                   href="{{ route('sobre') }}">
                    Sobre
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contato') ? 'active' : '' }}" 
                   href="{{ route('contato') }}">
                    Contato
                </a>
            </li>
        </ul>

        <!-- Botões de Ação -->
        <div class="d-flex align-items-center gap-3">
            <a href="{{ route('contato') }}" class="nav-btn">
                <i class="bi bi-whatsapp"></i>
                Solicitar Orçamento
            </a>
        </div>
    </div>
</nav>