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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

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

        .santec-page {
            position: relative;
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
            min-height: clamp(820px, 63vw, 1000px);
            position: relative;
            overflow: hidden;
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.75) 20%, rgba(0, 168, 89, 0.25) 100%), url('santechome.jpeg') center/cover no-repeat;
            display: flex;
            align-items: flex-start;
            padding: 7.5rem 8% 18rem;
            color: white;
        }

        .hero-text {
            max-width: min(100%, 680px);
            animation: fadeIn 1s ease;
        }

        @media (min-width: 1024px) {
            .hero {
                align-items: flex-start;
                padding-top: 7rem;
                padding-bottom: 18rem;
            }

            .hero-text {
                margin-top: 1rem;
            }
        }

        .hero-text h3 {
            font-weight: 400;
            letter-spacing: 3px;
            margin-bottom: 15px;
            color: #fff;
            opacity: 0.9;
            font-size: clamp(1.1rem, 1.7vw, 2rem);
        }

        .hero-text h1 {
            font-size: clamp(5rem, 7vw, 7.125rem);
            line-height: 1.1;
            margin-bottom: 20px;
            color: white;
            font-weight: 400;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-text h1 span {
            color: #00a859;
            display: inline;
            font-size: inherit;
            font-weight: 400;
            text-shadow: 3px 3px 0 rgba(0, 0, 0, 0.3);
        }

        .hero-text h1 .hero-title-light {
            display: inline;
            color: inherit;
            font-size: inherit;
            font-weight: 400;
            text-shadow: inherit;
        }

        .hero-text h1 .hero-title-line {
            display: inline-block;
            white-space: nowrap;
            color: #ffffff;
        }

        .hero-text p {
            font-size: clamp(1rem, 1.3vw, 1.25rem);
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
            gap: clamp(1.75rem, 4vw, 4.5rem);
            max-width: min(100%, 1760px);
            margin: -315px auto 145px auto;
            position: relative;
            z-index: 10;
            flex-wrap: nowrap;
            padding: 0 clamp(1.25rem, 4vw, 3.5rem);
        }

        .info-card {
            position: relative;
            overflow: hidden;
            flex: 1 1 0;
            min-width: clamp(280px, 24vw, 390px);
            max-width: clamp(360px, 31vw, 520px);
            background: rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(10px);
            padding: clamp(1.75rem, 2.2vw, 2.625rem) clamp(1.9rem, 2.4vw, 2.875rem);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .info-card-combined {
            display: none;
        }

        .info-card-combined-content {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .info-card-combined-line {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-direction: column;
            align-items: flex-start;
        }

        .info-card-combined-line strong {
            display: block;
            font-size: 1.05rem;
            line-height: 1.4;
            color: #ffffff;
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
            font-size: clamp(1.25rem, 1.7vw, 1.5rem);
            font-weight: 600;
        }

        .info-text p {
            color: rgba(255, 255, 255, 0.85);
            font-size: clamp(0.95rem, 1.2vw, 1.125rem);
            margin: 8px 0;
            line-height: 1.6;
        }

        .info-text strong {
            font-size: clamp(1.15rem, 1.8vw, 1.5625rem);
            color: #ffffff;
            font-weight: 700;
        }


        /* ===================== SERVIÇOS ===================== */
        .services {
            padding: 180px 8% 60px;
            /* menos padding-top para subir */
            background-color: hsl(220, 14%, 94%);
            margin-top: -180px;
            /* elevar ainda mais sobre o bloco anterior */
        }

        .services-header {
            text-align: center;
            margin-bottom: 30px;
            /* reduz espaçamento abaixo do título */
        }

        .services-header h2 {
            font-size: 64px;
            font-weight: 300;
            /* lighter like depoimentos */
            margin-bottom: 15px;
            color: #1b2631;
        }

        .services-header span {
            color: #00a859;
            font-weight: 700;
        }

        .services-header p {
            max-width: 800px;
            margin: auto;
            margin-top: 15px;
            font-size: 18px;
            color: hsl(215, 16%, 47%);
            line-height: 1.6;
        }

        .services-container {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-top: 30px;
        }

        /* ===================== SERVIÇOS - carrossel home ===================== */
        .container-img {
            overflow-x: auto;
            white-space: nowrap;
            padding: 20px;
            width: 100%;
        }

        .slide {
            display: flex;
            align-items: flex-end;
            height: 70vh;
            min-height: 500px;
            gap: 15px;
            justify-content: center;
        }

        .pagina {
            width: 160px;
            height: 450px;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.6s ease-in-out;
            flex-shrink: 0;
            cursor: pointer;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .pagina:hover {
            width: 340px;
            height: 500px;
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .pagina img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease-in-out;
        }

        .pagina:hover img {
            transform: scale(1.05);
        }

        .container-img::-webkit-scrollbar {
            display: none;
        }

        .container-img {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        @media (max-width: 768px) {
            .pagina {
                width: 130px;
                height: 380px;
            }

            .pagina:hover {
                width: 280px;
                height: 430px;
            }

            .slide {
                height: 60vh;
                min-height: 400px;
            }
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
            color: #1f2937;
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

        @media (max-width: 991px) {
            .custom-navbar {
                top: 0.75rem;
                padding: 0 0.75rem;
            }

            .nav-container {
                width: 100%;
                border-radius: 28px;
                padding: 1rem 1.25rem;
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }

            .nav-brand {
                width: 100%;
                justify-content: center;
            }

            .nav-links {
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
                gap: 0.85rem 1.25rem;
            }

            .nav-links .nav-item {
                flex: 0 0 auto;
            }

            .nav-container>.d-flex {
                width: 100%;
                justify-content: center;
            }

            .nav-btn {
                width: 100%;
                justify-content: center;
                text-align: center;
            }

            .hero {
                min-height: auto;
                padding: 10.5rem 1.25rem 5rem;
                align-items: flex-start;
                background-position: center;
            }

            .hero-text {
                max-width: 100%;
            }

            .hero-text h3 {
                font-size: 1rem;
                letter-spacing: 0.18em;
                margin-bottom: 0.85rem;
            }

            .hero-text h1,
            .hero-text h1 span {
                font-size: clamp(2.8rem, 14vw, 4.6rem);
                line-height: 0.98;
            }

            .hero-text p {
                font-size: 1rem;
                max-width: 100%;
            }

            .info-cards {
                flex-direction: column;
                gap: 1rem;
                margin: -48px auto 56px;
                padding: 0 1rem;
                max-width: 100%;
            }

            .info-card {
                min-width: 0;
                width: 100%;
                max-width: none;
                padding: 1.25rem;
                border-radius: 18px;
            }

            .info-card h3 {
                font-size: 1.1rem;
            }

            .info-icon {
                font-size: 1.5rem;
            }

            .info-text p {
                font-size: 0.9rem;
                margin: 0;
            }

            .info-text strong {
                display: block;
                font-size: 1rem;
                line-height: 1.4;
                word-break: break-word;
            }
        }

        @media (min-width: 641px) and (max-width: 1024px) {
            .custom-navbar {
                padding: 0 1rem;
            }

            .nav-container {
                width: min(92%, 920px);
                padding: 0.85rem 1rem;
                border-radius: 32px;
                flex-wrap: nowrap;
                justify-content: space-between;
                gap: 0.75rem;
            }

            .nav-brand {
                width: auto;
                gap: 0.6rem;
            }

            .nav-brand-logo {
                height: 28px;
            }

            .nav-brand-text {
                font-size: 1.05rem;
            }

            .nav-links {
                width: auto;
                flex-wrap: nowrap;
                justify-content: center;
                gap: 1rem;
            }

            .nav-link {
                font-size: 0.9rem;
            }

            .nav-container>.d-flex {
                width: auto;
            }

            .nav-btn {
                width: auto;
                padding: 0.7rem 1rem;
                font-size: 0.78rem;
                white-space: nowrap;
            }

            .hero {
                min-height: clamp(760px, 90vw, 940px);
                padding: 8.2rem 1.5rem 15rem;
            }

            .hero-text {
                max-width: 540px;
            }

            .hero-text h3 {
                font-size: 1.05rem;
            }

            .hero-text h1,
            .hero-text h1 span {
                font-size: clamp(3.6rem, 7.2vw, 4.9rem);
            }

            .hero-text p {
                font-size: 0.95rem;
                max-width: 460px;
            }

            .info-cards {
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: center;
                align-items: stretch;
                gap: clamp(1rem, 2vw, 1.35rem);
                margin: -14.5rem auto 88px;
                max-width: min(94%, 820px);
                padding: 0 0.5rem;
            }

            .info-card {
                flex: 1 1 0;
                min-height: 170px;
                min-width: 0;
                max-width: none;
                padding: 1.5rem 1.35rem;
            }

            .info-card h3 {
                font-size: 1.2rem;
                margin-bottom: 0.9rem;
            }

            .info-row {
                gap: 0.85rem;
                align-items: center;
            }

            .info-icon {
                font-size: 1.65rem;
            }

            .info-text p {
                font-size: 0.9rem;
                line-height: 1.45;
            }

            .info-text strong {
                font-size: 1.2rem;
                line-height: 1.35;
            }

            .info-card-address {
                display: none;
            }
        }

        @media (max-width: 640px) {
            .custom-navbar {
                top: 0.6rem;
                padding: 0 0.7rem;
            }

            .nav-container {
                border-radius: 24px;
                padding: 0.9rem 1rem;
                gap: 0.8rem;
            }

            .nav-links {
                display: none;
            }

            .nav-brand {
                gap: 0.5rem;
            }

            .nav-brand-logo {
                height: 26px;
            }

            .nav-brand-text {
                font-size: 0.98rem;
                text-align: center;
            }

            .nav-link {
                font-size: 0.875rem;
            }

            .nav-btn {
                padding: 0.82rem 1rem;
                font-size: 0.82rem;
                border-radius: 999px;
            }

            .hero {
                min-height: auto;
                overflow: visible;
                padding-top: 10.8rem;
                padding-bottom: 7.5rem;
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .hero-text h3 {
                font-size: 0.92rem;
                letter-spacing: 0.16em;
                margin-bottom: 0.7rem;
            }

            .hero-text h1 {
                font-size: clamp(3rem, 15vw, 4.2rem);
                line-height: 1.02;
                margin-bottom: 0.85rem;
            }

            .hero-text h1 span,
            .hero-text h1 .hero-title-line {
                font-size: inherit;
                white-space: normal;
                display: inline;
            }

            .hero-text p {
                font-size: 0.98rem;
                line-height: 1.65;
                max-width: 22rem;
            }

            .info-card-combined {
                display: block;
                width: 100%;
                min-width: 0;
                max-width: 92%;
                overflow: visible;
                padding: 1rem 0.9rem;
                border-radius: 20px;
                margin: 0 auto;
            }

            .info-card-combined h3 {
                text-align: center;
                margin-bottom: 0.8rem;
                color: #ffffff;
                font-size: 1rem;
                font-weight: 600;
            }

            .info-card-combined-content {
                display: flex;
                flex-direction: row;
                align-items: stretch;
                gap: 0;
            }

            .info-card-combined-line {
                display: flex;
                flex: 1 1 0;
                align-items: center;
                gap: 0.6rem;
                padding: 0.35rem 0.45rem;
                border-top: 0;
            }

            .info-card-combined-line {
                flex-direction: row;
                align-items: center;
                justify-content: center;
                min-width: 0;
                text-align: left;
            }

            .info-card-combined-line:last-child {
                padding-left: 0.45rem;
            }

            .info-card-combined-line .info-icon {
                color: #00a859;
                font-size: 1.2rem;
                margin-bottom: 0;
            }

            .info-card-combined-line .info-text {
                min-width: 0;
            }

            .info-card-combined-line .info-text p {
                color: rgba(255, 255, 255, 0.72);
                font-size: 0.62rem;
                font-weight: 500;
                letter-spacing: 0.08em;
                margin: 0 0 0.08rem;
            }

            .info-card-combined-line .info-text strong {
                display: block;
                word-break: break-word;
                color: #ffffff;
                font-size: 0.82rem;
                line-height: 1.35;
                font-weight: 700;
            }

            .info-card-schedule,
            .info-card-contact,
            .info-card-address {
                display: none;
            }

            .info-cards {
                position: relative;
                z-index: 12;
                margin: -7.5rem auto 3rem;
                padding: 0 0.7rem;
            }

            #servicos {
                scroll-margin-top: 7rem;
            }

            #carousel-track {
                gap: 1rem;
            }

            #carousel-dots {
                justify-content: center;
                flex-wrap: wrap;
            }

            footer .max-w-7xl,
            footer .max-w-6xl {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            footer a,
            footer span,
            footer p {
                overflow-wrap: anywhere;
            }
        }

    </style>
</head>

<body class="font-sans antialiased">
    @include('layouts.navigation')

    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

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
                    if (!href) return;

                    const url = new URL(href, window.location.origin);
                    const isSamePage = url.pathname === window.location.pathname;
                    const hash = url.hash;

                    if (isSamePage && hash && hash.length > 1) {
                        e.preventDefault();
                        const targetElement = document.querySelector(hash);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 100,
                                behavior: 'smooth'
                            });
                            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove(
                                'active'));
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
                    const href = link.getAttribute('href');
                    if (!href) return;

                    const url = new URL(href, window.location.origin);
                    if (url.pathname === window.location.pathname && url.hash === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });

            // CARROSSEL DEPOIMENTOS (seção homepage)
            const depoimentosTrack = document.getElementById('depoimentos-track');
            let depoimentosIndex = 0;

            window.moveCarousel = function(direction) {
                if (!depoimentosTrack) return;

                const items = Array.from(depoimentosTrack.children);
                if (items.length === 0) return;

                depoimentosIndex += direction;
                if (depoimentosIndex < 0) {
                    depoimentosIndex = items.length - 1;
                } else if (depoimentosIndex >= items.length) {
                    depoimentosIndex = 0;
                }

                const itemWidth = items[0].getBoundingClientRect().width;
                depoimentosTrack.style.transform = `translateX(-${depoimentosIndex * itemWidth}px)`;
            };

            // Se quiser auto-play do depoimento:
            if (depoimentosTrack) {
                setInterval(() => window.moveCarousel(1), 6000);
            }

            // CARROSSEL DEPOIMENTOS (versão antiga com cards + dots, opcional)
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
        (function() {
            const track = document.getElementById('carousel-track');
            const prevBtn = document.getElementById('carousel-prev');
            const nextBtn = document.getElementById('carousel-next');
            const dotsContainer = document.getElementById('carousel-dots');
            const slides = track.children;
            let current = 0;

            function getVisible() {
                if (window.innerWidth >= 1024) return 3;
                if (window.innerWidth >= 768) return 2;
                return 1;
            }

            function getMaxIndex() {
                return Math.max(0, slides.length - getVisible());
            }

            function getSlideWidth() {
                if (!slides[0]) return 0;
                const gap = parseFloat(window.getComputedStyle(track).columnGap || window.getComputedStyle(track).gap || 0);
                return slides[0].offsetWidth + gap;
            }

            function updatePosition() {
                if (current > getMaxIndex()) current = getMaxIndex();
                track.style.transform = 'translateX(-' + (current * getSlideWidth()) + 'px)';
                updateDots();
            }

            function buildDots() {
                dotsContainer.innerHTML = '';
                const total = getMaxIndex() + 1;
                for (let i = 0; i < total; i++) {
                    const dot = document.createElement('button');
                    dot.className = 'w-3 h-3 rounded-full transition-all duration-300 ' +
                        (i === current ? 'bg-green-600 scale-110' : 'bg-gray-300 hover:bg-gray-400');
                    dot.addEventListener('click', () => {
                        current = i;
                        updatePosition();
                    });
                    dotsContainer.appendChild(dot);
                }
            }

            function updateDots() {
                const dots = dotsContainer.children;
                for (let i = 0; i < dots.length; i++) {
                    dots[i].className = 'w-3 h-3 rounded-full transition-all duration-300 ' +
                        (i === current ? 'bg-green-600 scale-110' : 'bg-gray-300 hover:bg-gray-400');
                }
            }

            prevBtn.addEventListener('click', () => {
                if (current > 0) {
                    current--;
                    updatePosition();
                }
            });
            nextBtn.addEventListener('click', () => {
                if (current < getMaxIndex()) {
                    current++;
                    updatePosition();
                }
            });

            // Touch/swipe
            let startX = 0;
            track.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
            }, {
                passive: true
            });
            track.addEventListener('touchend', (e) => {
                const diff = startX - e.changedTouches[0].clientX;
                if (Math.abs(diff) > 50) {
                    diff > 0 ? nextBtn.click() : prevBtn.click();
                }
            });

            window.addEventListener('resize', () => {
                buildDots();
                updatePosition();
            });
            buildDots();
            updatePosition();
        })();
    </script>
</body>

</html>
