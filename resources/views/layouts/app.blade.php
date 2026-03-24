<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Santec Desentupidora') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Estilos da Navbar -->
    <style>
        :root {
            --primary-green: #00a859;
            --primary-dark: #008748;
            --secondary-green: #2ecc71;
            --light-green: #e8f5e9;
            --accent-green: #27ae60;
            --dark: #1a3c2e;
        }

        /* Navbar Fixa - Desktop Only */
        .custom-navbar {
            position: fixed;
            top: 1.5rem;
            left: 0;
            right: 0;
            z-index: 1050;
            display: flex;
            justify-content: center;
            width: 100%;
            pointer-events: none;
        }

        .nav-container {
            width: 85%;
            background: rgba(255, 255, 255, 0.9);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(229, 231, 235, 0.8);
            border-radius: 50px;
            padding: 0.75rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            pointer-events: auto;
            transition: all 0.3s ease;
        }

        .nav-container.scrolled {
            top: 0.5rem;
            backdrop-filter: blur(12px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            flex-shrink: 0;
        }

        .nav-brand-logo {
            height: 30px;
            width: auto;
            transition: transform 0.3s ease;
        }

        .nav-brand:hover .nav-brand-logo {
            transform: scale(1.05);
        }

        .nav-brand-text {
            font-weight: 700;
            font-size: 1.25rem;
            letter-spacing: -0.02em;
            color: var(--dark);
            margin: 0;
        }

        .nav-brand-subtext {
            color: var(--primary-green);
            font-weight: 600;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 2rem;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .nav-link {
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            color: #4b5563 !important;
            padding: 0.5rem 0 !important;
            position: relative;
            transition: color 0.3s ease;
            border: none !important;
            background: none !important;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-green) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-green), var(--secondary-green));
            transition: width 0.3s ease;
            border-radius: 1px;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .nav-btn {
            background: var(--primary-green);
            color: white;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 168, 89, 0.25);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-btn:hover {
            background: var(--primary-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 168, 89, 0.35);
        }

        .nav-btn-phone {
            background: transparent;
            color: var(--primary-green);
            border: 2px solid var(--primary-green);
            padding: 0.6rem 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-btn-phone:hover {
            background: var(--primary-green);
            color: white;
        }

        /* Remover TODA a responsividade */
        .navbar-toggler,
        .navbar-collapse,
        .d-lg-none,
        .d-lg-flex {
            display: none !important;
        }

        /* Espaço para navbar fixa */
        /*.navbar-space {
            height: 6rem;
        }

        /* Forçar sempre layout desktop */


        /* Esconder qualquer elemento mobile */
        [class*="mobile"],
        [class*="Mobile"],
        .collapse,
        .navbar-toggler {
            display: none !important;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #66785a20 0%, #8ba07e20 100%);
            min-height: 100vh;
        }

        /* HERO - Com overlay escuro */
        .hero {
            min-height: 100vh;
            padding-bottom: 80px;
            position: relative;
            overflow: hidden;
            background:
                linear-gradient(90deg, rgba(0, 0, 0, 0.75) 20%, rgba(0, 168, 89, 0.25) 100%),
                url('santechome.jpeg') center/cover no-repeat;

            display: flex;
            align-items: center;
            padding: 0 8%;
            color: white;
        }



        .hero-text {
            max-width: 630px;
            animation: fadeIn 1s ease;
            margin: 0;
        }

        .hero-text h3 {
            font-weight: 400;
            letter-spacing: 3px;
            margin-bottom: 15px;
            color: #fff;
            opacity: 0.9;
            font-size: 2rem;
        }

        .hero-text h1 {
            font-size: 100px;
            line-height: 1.1;
            margin-bottom: 20px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-text h1 span {
            color: #00a859;
            display: block;
            font-size: 100px;
            text-shadow: 3px 3px 0 rgba(0, 0, 0, 0.3);
        }

        .hero-text p {
            font-size: 18px;
            line-height: 1.6;
            color: #f0f0f0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            max-width: 550px;
        }

        html,
        body {
            overflow-x: hidden;
        }




        /* CARDS */
        /* CARDS - Estilo igual à imagem */
        /* ===================== */
        /* CONTAINER DOS CARDS   */
        /* ===================== */
        /* ===================== */
        /* ===================== */
        /* CARDS PRINCIPAIS       */
        /* ===================== */
        .info-cards {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 175px;
            max-width: 1300px;
            margin: -200px auto 60px auto;
            /* sobe os cards sem criar espaço */
            position: relative;
            z-index: 10;
        }

        /* ===================== */
        /* CARD PREMIUM          */
        /* ===================== */
        .info-card {
            position: relative;
            overflow: hidden;
            flex: 0 0 410px;
            /* largura intermediária */
            background: rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            max-width: 410px;
            /* largura fixa */
            padding: 20px 25px;
            /* reduzido para altura menor */
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        /* LINHA DE BRILHO */
        .info-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, transparent, #00a859, transparent);
            transition: all 0.6s ease;
        }

        /* HOVER */
        .info-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.25),
                0 0 20px rgba(0, 168, 89, 0.25);
        }

        .info-card:hover::before {
            left: 100%;
        }

        /* ===================== */
        /* LINHA (ÍCONE + TEXTO) */
        /* ===================== */
        .info-row {
            display: flex;
            align-items: center;
            gap: 12px;
            /* espaço equilibrado entre ícone e texto */
        }

        /* ===================== */
        /* ÍCONE SEM FUNDO       */
        /* ===================== */
        .info-icon {
            font-size: 30px;
            /* mantém visual proporcional */
            color: #00a859;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* ===================== */
        /* TEXTO                 */
        /* ===================== */
        .info-card h3 {
            margin-bottom: 6px;
            /* menor espaçamento para compactar altura */
            color: #ffffff;
            font-size: 20px;
            font-weight: 600;
        }

        .info-text p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 16px;
            margin: 4px 0;
            /* reduz o espaçamento vertical */
            line-height: 1.5;
        }

        .info-text strong {
            font-size: 20px;
            color: #ffffff;
        }

        /*nossos serviços*/
        /* SECTION SERVIÇOS */

        .services {
            padding: 180px 8%;
            background: #f7f7f7;
            margin-top: -100px;
        }

        .services-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .services-header h2 {
            font-size: 64px;
            font-weight: 700;
        }

        .services-header span {
            color: #00a859;
        }

        .services-header p {
            max-width: 800px;
            margin: auto;
            margin-top: 15px;
            font-size: 18px;
            color: #666;
        }



        /* CONTAINER */

        .services-container {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-top: 80px;
        }

        /* SLIDER */

        .services-slider {
            display: flex;
            gap: 40px;
            overflow: hidden;
            scroll-behavior: smooth;
            width: 100%;
        }

        /* CARD */

        .service-card {
            min-width: 380px;
            height: 230px;
            background: white;
            padding: 40px;
            border-radius: 22px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: .3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-card i {
            font-size: 48px;
            color: #00a859;
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 24px;
            margin-bottom: 12px;
        }

        .service-card p {
            font-size: 16px;
            color: #666;
        }

        /* BOTÕES */

        .service-btn {
            border: none;
            background: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            font-size: 22px;
            cursor: pointer;
        }

        .container-img {
            overflow-x: auto;
            white-space: nowrap;
            padding: 10px 0;
            width: 100%;
        }

        .slide {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            gap: 20px;
            height: 50vh;
            /* menor altura */
            min-height: 380px;
        }

        .pagina {
            width: 180px;
            /* antes 120px */
            height: 450px;
            /* antes 400px */
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            flex-shrink: 0;
            cursor: pointer;
            position: relative;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .pagina:hover {
            width: 380px;
            height: 500px;
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        }

        .pagina img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .pagina:hover img {
            transform: scale(1.08);
        }

        /* esconder scrollbar */

        .container-img::-webkit-scrollbar {
            display: none;
        }

        .container-img {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }


        .depoimentos {
            background: linear-gradient(to bottom, #ecfdf5, #f0fdf4);
            padding: 90px 20px;
            text-align: center;
        }

        .depoimentos h1 {
            font-size: 42px;
            color: #064e3b;
        }

        .depoimentos h1 span {
            color: #16a34a;
            font-weight: bold;
        }

        .descricao {
            margin: 15px auto 30px;
            max-width: 700px;
            color: #065f46;
            line-height: 1.6;
        }

        .btn-consulta {
            background: linear-gradient(90deg, #064e3b, #16a34a);
            border: none;
            padding: 13px 30px;
            border-radius: 30px;
            color: white;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 50px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-consulta:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(22, 163, 74, 0.3);
        }

        .carrossel {
            overflow: hidden;
            max-width: 1100px;
            margin: auto;
        }

        .cards {
            display: flex;
            transition: transform 0.6s ease;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            border-radius: 18px;
            padding: 25px;
            min-width: 320px;
            margin: 0 12px;
            text-align: left;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(22, 163, 74, 0.1);
        }

        .topo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
        }

        .topo img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: 2px solid #16a34a;
        }

        .topo h3 {
            margin: 0;
            font-size: 16px;
            color: #064e3b;
        }

        .topo span {
            font-size: 12px;
            color: #16a34a;
        }

        .stars {
            margin-left: auto;
            color: #22c55e;
        }

        .card p {
            color: #065f46;
            font-size: 14px;
            line-height: 1.5;
        }

        .dots {
            margin-top: 25px;
        }

        .dots span {
            height: 10px;
            width: 10px;
            background: #bbf7d0;
            display: inline-block;
            border-radius: 50%;
            margin: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .dots .active {
            background: #16a34a;
            transform: scale(1.2);
        }

        /* Animações */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 50px;
            }

            .hero-text h1 span {
                font-size: 60px;
            }

            .info-cards {
                margin-top: 30px;
                gap: 20px;
            }

            .card {
                width: 260px;
            }
        }

        @media (max-width: 480px) {
            .hero-text h1 {
                font-size: 40px;
            }

            .hero-text h1 span {
                font-size: 50px;
            }

            .hero-text p {
                font-size: 16px;
            }

            .card {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
    </style>
</head>

<body class="font-sans antialiased">
    <!-- Navbar -->
    @include('layouts.navigation')

    <!-- Espaço para navbar fixa -->
    <div class="navbar-space"></div>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script>
        // Efeito de scroll na navbar
        document.addEventListener('DOMContentLoaded', function () {
            const navContainer = document.getElementById('navContainer');

            if (navContainer) {
                window.addEventListener('scroll', function () {
                    if (window.scrollY > 100) {
                        navContainer.classList.add('scrolled');
                    } else {
                        navContainer.classList.remove('scrolled');
                    }
                });
            }
            /* SLIDER DOS SERVIÇOS */

            const slider = document.querySelector('.services-slider');
            const next = document.querySelector('.next');
            const prev = document.querySelector('.prev');

            if (slider) {
                next.addEventListener('click', () => {
                    slider.scrollBy({
                        left: 320,
                        behavior: "smooth"
                    });
                });

                prev.addEventListener('click', () => {
                    slider.scrollBy({
                        left: -320,
                        behavior: "smooth"
                    });
                });
            }

        });
        // Smooth scroll para links da navbar
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function (e) {
                const href = this.getAttribute('href');

                // Verifica se é um link âncora (#)
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();

                    const targetElement = document.querySelector(href);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });

                        // Atualizar link ativo
                        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove(
                            'active'));
                        this.classList.add('active');
                    }
                }
            });
        });

        // Atualizar link ativo baseado no scroll
        window.addEventListener('scroll', function () {
            const sections = document.querySelectorAll('section[id]');
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 150)) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
        
    </script>
</body>

</html>