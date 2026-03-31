{{-- resources/views/layouts/navigation.blade.php --}}
<nav class="custom-navbar">
    <div class="nav-container" id="navContainer">
        <!-- Logo e Nome -->
        <a href="{{ route('homepage') }}" class="nav-brand">
            <img src="logosantec.png" alt="Santec Desentupidora" class="nav-brand-logo">
            <div>
                <h1 class="nav-brand-text">Santec<span class="nav-brand-subtext">Desentupidora</span></h1>
            </div>
        </a>

        <!-- Links de Navegação -->
        <ul class="nav-links">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}" href="{{ route('homepage') }}#hero">
                    Início
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}" href="{{ route('homepage') }}#servicos">
                    Serviços
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}" href="{{ route('homepage') }}#contato">
                    Contato
                </a>
            </li>
        </ul>

        <!-- Botões de Ação -->
        <div class="d-flex align-items-center gap-3">
            <a href="https://wa.me/5515998341209?text=Ol%C3%A1,%20vim%20pelo%20site%20e%20gostaria%20de%20solicitar%20um%20atendimento%20da%20Santec%20Desentupidora."
                class="nav-btn">
                <i class="bi bi-whatsapp"></i>
                Solicitar Orçamento
            </a>
        </div>
    </div>
</nav>


