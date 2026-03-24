<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Santec Desentupidora') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --primary-green: #00a859;
            --primary-dark: #008748;
            --secondary-green: #2ecc71;
            --light-green: #e8f5e9;
            --accent-green: #27ae60;
            --dark: #1a3c2e;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            overflow-x: hidden;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #66785a20 0%, #8ba07e20 100%);
            min-height: 100vh;
        }

        /* ===================== NAVBAR ===================== */
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
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
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
            cursor: pointer;
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

        /* ===================== HERO ===================== */
        .hero {
            min-height: 100vh;
            padding-bottom: 80px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.75) 20%, rgba(0, 168, 89, 0.25) 100%), url('santechome.jpeg') center/cover no-repeat;
            display: flex;
            align-items: center;
            padding: 0 8%;
            color: white;
        }

        .hero-text {
            max-width: 630px;
            animation: fadeIn 1s ease;
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

        /* ===================== INFO CARDS ===================== */
        .info-cards {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            max-width: 1400px;
            margin: -200px auto 100px auto;
            position: relative;
            z-index: 10;
            flex-wrap: nowrap;
            padding: 0 40px;
        }

        .info-card {
            position: relative;
            overflow: hidden;
            flex: 1;
            min-width: 300px;
            max-width: 380px;
            background: rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(10px);
            padding: 30px 35px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

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

        .info-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25), 0 0 20px rgba(0, 168, 89, 0.25);
        }

        .info-card:hover::before {
            left: 100%;
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .info-icon {
            font-size: 30px;
            color: #00a859;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .info-card h3 {
            margin-bottom: 12px;
            color: #ffffff;
            font-size: 20px;
            font-weight: 600;
        }

        .info-text p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 16px;
            margin: 8px 0;
            line-height: 1.6;
        }

        .info-text strong {
            font-size: 20px;
            color: #ffffff;
        }

        /* ===================== SERVIÇOS ===================== */
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

        .services-container {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-top: 80px;
        }

        .services-slider {
            display: flex;
            gap: 40px;
            overflow: hidden;
            scroll-behavior: smooth;
            width: 100%;
        }

        .service-card {
            min-width: 380px;
            height: 230px;
            background: white;
            padding: 40px;
            border-radius: 22px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
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

        .service-btn {
            border: none;
            background: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            font-size: 22px;
            cursor: pointer;
            transition: 0.3s;
        }

        .service-btn:hover {
            background: #00a859;
            color: white;
        }
    </style>
</head>

<body class="font-sans antialiased">
    @include('layouts.navigation')
    <div class="navbar-space"></div>

    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Efeito de scroll na navbar
            const navContainer = document.getElementById('navContainer');
            if (navContainer) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 100) {
                        navContainer.classList.add('scrolled');
                    } else {
                        navContainer.classList.remove('scrolled');
                    }
                });
            }

            // SLIDER DOS SERVIÇOS
            const slider = document.querySelector('.services-slider');
            const nextBtn = document.querySelector('.next');
            const prevBtn = document.querySelector('.prev');
            if (slider && nextBtn && prevBtn) {
                nextBtn.addEventListener('click', () => {
                    slider.scrollBy({
                        left: 320,
                        behavior: "smooth"
                    });
                });
                prevBtn.addEventListener('click', () => {
                    slider.scrollBy({
                        left: -320,
                        behavior: "smooth"
                    });
                });
            }

            // Smooth scroll para links da navbar
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href && href.startsWith('#') && href.length > 1) {
                        e.preventDefault();
                        const targetElement = document.querySelector(href);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 100,
                                behavior: 'smooth'
                            });
                            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                            this.classList.add('active');
                        }
                    }
                });
            });

            // Atualizar link ativo baseado no scroll
            window.addEventListener('scroll', function() {
                const sections = document.querySelectorAll('section[id]');
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (window.scrollY >= (sectionTop - 150)) {
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

            // CARROSSEL DEPOIMENTOS
            const cards = document.getElementById("cards");
            const dotsContainer = document.getElementById("dots");
            if (cards && dotsContainer) {
                let index = 0;
                const total = cards.children.length;
                const cardWidth = 340;
                const dots = [];

                // Criar bolinhas
                for (let i = 0; i < total; i++) {
                    let dot = document.createElement("span");
                    dot.addEventListener("click", () => moveTo(i));
                    dotsContainer.appendChild(dot);
                    dots.push(dot);
                }

                function updateDots() {
                    dots.forEach(d => d.classList.remove("active"));
                    if (dots[index]) dots[index].classList.add("active");
                }

                function moveTo(i) {
                    index = i;
                    cards.style.transform = `translateX(-${index * cardWidth}px)`;
                    updateDots();
                }

                function autoSlide() {
                    index++;
                    if (index >= total) index = 0;
                    moveTo(index);
                }

                updateDots();
                setInterval(autoSlide, 4000);
            }
        });
    </script>
</body>

</html>