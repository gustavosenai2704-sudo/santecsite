@extends('layouts.app')

@section('content')
    <div class="santec-page">
        {{-- Hero Section --}}
        <section class="hero" id="hero">
            <div class="hero-text">
                <h3>DESENTUPIDORA EM TATUÍ PARA</h3>
                <h1><span class="hero-title-line"><span class="hero-title-light">Seu</span> problema</span> <span>resolvido</span></h1>
                <p>
                    A Santec Desentupidora tem o objetivo de trazer soluções em desentupimento
                    com os melhores profissionais da cidade de Tatuí e região.
                </p>
            </div>
        </section>

        <section class="info-cards">

            <div class="info-card info-card-combined">
                <h3>Atendimento</h3>

                <div class="info-card-combined-content">
                    <div class="info-card-combined-line">
                        <span class="info-card-combined-label">Horario</span>
                        <strong>SEG - SEXTA | 08hr - 18hr</strong>
                    </div>

                    <div class="info-card-combined-line">
                        <span class="info-card-combined-label">Contato</span>
                        <strong>(15) 3251-3021</strong>
                    </div>
                </div>
            </div>

            <!-- CARD 1 -->
            <div class="info-card info-card-schedule">
                <h3>Horário de atendimento</h3>

                <div class="info-row">
                    <div class="info-icon">
                        <i class="bi bi-clock"></i>
                    </div>

                    <div class="info-text">
                        <p>SEG - SEXTA</p>
                        <strong>08hr - 18hr</strong>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="info-card info-card-address">
                <h3>Endereço do pátio</h3>

                <div class="info-row">
                    <div class="info-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>

                    <div class="info-text">
                        <p>TATUÍ - SP</p>
                        <strong>Av. Sales Gomes, 473 </strong>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="info-card info-card-contact">
                <h3>Contato</h3>

                <div class="info-row">
                    <div class="info-icon">
                        <i class="bi bi-telephone"></i>
                    </div>

                    <div class="info-text">
                        <p>TELEFONE</p>
                        <strong>(15) 3251-3021</strong>
                    </div>
                </div>
            </div>

        </section>
        <section class="py-10 md:py-6 px-4 sm:px-5" id="servicos">
            <div class="max-w-6xl mx-auto">

                <!-- Título -->
                <div class="text-center mb-8 md:mb-12">
                    <h1 class="font-display text-4xl md:text-6xl font-bold mb-4">
                        Nossos <span class="text-brand-dark">Serviços</span>
                    </h1>
                    <p class="text-gray-500 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
                        A Santec Desentupidora oferece soluções completas em desentupimento
                        para residências, empresas e indústrias em Tatuí e região.
                    </p>
                </div>

                <!-- Galeria de Fotos -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 mb-12 md:mb-20">
                    <div class="relative overflow-hidden rounded-2xl aspect-[3/4] group">
                        <img src="1.jpg" alt="Hidrojateamento profissional" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl aspect-[3/4] group">
                        <img src="2.jpg" alt="Caminhão de desentupimento" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl aspect-[3/4] group">
                        <img src="3.jpg" alt="Serviço residencial" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl aspect-[3/4] group">
                        <img src="4.jpg" alt="Limpeza com alta pressão" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                </div>

                <div class="relative" id="carousel-container">
                    <div class="overflow-hidden rounded-2xl">
                        <div id="carousel-track" class="flex gap-4 md:gap-10 transition-transform duration-500 ease-out">

                            <!-- Card 1 -->
                            <div
                                class="flex-[0_0_88%] md:flex-[0_0_calc(45%-20px)] lg:flex-[0_0_calc(33.333%-28px)] min-w-0">
                                <div class="rounded-3xl bg-white px-5 py-6 md:px-10 md:py-7 shadow-md border border-gray-100 transition-all duration-500 ease-out hover:shadow-lg hover:-translate-y-2 h-full"
                                    style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);">
                                    <div
                                        class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-green-50">
                                        <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zM17.9 17.39c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-900 mb-2">Desentupimento de Esgoto</h3>
                                    <p class="text-gray-500 text-sm leading-relaxed">Soluções rápidas para esgoto entupido,
                                        evitando mau cheiro e transbordamentos.</p>
                                </div>
                            </div>

                            <!-- Card 2 -->


                            <!-- Card 3 -->
                            <div
                                class="flex-[0_0_88%] md:flex-[0_0_calc(45%-20px)] lg:flex-[0_0_calc(33.333%-28px)] min-w-0">
                                <div class="rounded-3xl bg-white px-5 py-6 md:px-10 md:py-7 shadow-md border border-gray-100 transition-all duration-500 ease-out hover:shadow-lg hover:-translate-y-2 h-full"
                                    style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);">
                                    <div
                                        class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-green-50">
                                        <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-900 mb-2">Limpeza de Fossa</h3>
                                    <p class="text-gray-500 text-sm leading-relaxed">Serviço completo de limpeza e
                                        manutenção de fossas sépticas com segurança.</p>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div
                                class="flex-[0_0_88%] md:flex-[0_0_calc(45%-20px)] lg:flex-[0_0_calc(33.333%-28px)] min-w-0">
                                <div class="rounded-3xl bg-white px-5 py-6 md:px-10 md:py-7 shadow-md border border-gray-100 transition-all duration-500 ease-out hover:shadow-lg hover:-translate-y-2 h-full"
                                    style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);">
                                    <div
                                        class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-green-50">
                                        <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                            <polyline points="14 2 14 8 20 8" />
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-900 mb-2">Hidrojateamento</h3>
                                    <p class="text-gray-500 text-sm leading-relaxed">Limpeza profunda com alta pressão,
                                        removendo gordura, raízes e resíduos difíceis.</p>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div
                                class="flex-[0_0_88%] md:flex-[0_0_calc(45%-20px)] lg:flex-[0_0_calc(33.333%-28px)] min-w-0">
                                <div class="rounded-3xl bg-white px-5 py-6 md:px-10 md:py-7 shadow-md border border-gray-100 transition-all duration-500 ease-out hover:shadow-lg hover:-translate-y-2 h-full"
                                    style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);">
                                    <div
                                        class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-green-50">
                                        <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path d="M6 4h12M6 8h12M6 12h6" />
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-900 mb-2">Caixa de Gordura</h3>
                                    <p class="text-gray-500 text-sm leading-relaxed">Limpeza e manutenção para evitar
                                        entupimentos e mau funcionamento.</p>
                                </div>
                            </div>

                            <!-- Card 6 -->


                        </div>
                    </div>

                    <!-- Controles -->
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between mt-8">
                        <div id="carousel-dots" class="flex gap-2 justify-center sm:justify-start"></div>
                        <div class="flex gap-3">
                            <button id="carousel-prev"
                                class="w-11 h-11 rounded-full border border-green-600 text-green-600 flex items-center justify-center transition-all hover:bg-green-600 hover:text-white shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <button id="carousel-next"
                                class="w-11 h-11 rounded-full border border-green-600 text-green-600 flex items-center justify-center transition-all hover:bg-green-600 hover:text-white shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- Seção de Depoimentos - Cole isso no seu layout Blade --}}
        {{-- Certifique-se de ter Tailwind CSS configurado no seu projeto Laravel --}}

        <section class="py-20 px-4" style="background-color: hsl(220, 14%, 94%);">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-light mb-4" style="color: #1b2631;">
                    <span class="font-bold">Alguns</span> <span class="font-bold"
                        style="color: #00a859;">depoimentos</span>
                </h2>
                <p class="max-w-2xl mx-auto mb-8 text-sm md:text-base leading-relaxed" style="color: hsl(215, 16%, 47%);">
                    Nossa equipe de desentupidora tem o objetivo de oferecer serviços rápidos e eficientes,
                    com os melhores profissionais e preços acessíveis para você.
                </p>
                <a href="#contato"
                    class="inline-block rounded-full px-10 py-3 mb-14 uppercase tracking-widest text-xs font-semibold text-white transition-colors"
                    style="background-color:  rgb(0, 168, 89)">
                    Solicitar Orçamento
                </a>

                {{-- Carrossel --}}
                <div class="relative overflow-hidden" id="depoimentos-carousel">
                    <div class="flex transition-transform duration-500 ease-in-out" id="depoimentos-track">

                        @php
                            $depoimentos = [
                                [
                                    'nome' => 'Mariana Silva',
                                    'texto' =>
                                        'Serviço excelente! Chegaram rápido e resolveram o entupimento da pia da cozinha em menos de 30 minutos. Preço justo e profissionais muito educados.',
                                    'avatar' =>
                                        'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face',
                                ],
                                [
                                    'nome' => 'Carlos Eduardo',
                                    'texto' =>
                                        'Meu esgoto estava entupido há dias e ninguém resolvia. Chamei essa equipe e em pouco tempo tudo funcionando perfeitamente. Super recomendo!',
                                    'avatar' =>
                                        'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face',
                                ],
                                [
                                    'nome' => 'Fernanda Oliveira',
                                    'texto' =>
                                        'Atendimento nota 10! Muito profissionais e pontuais. Desentupimento do ralo do banheiro feito com qualidade. Já indiquei para vários vizinhos.',
                                    'avatar' =>
                                        'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face',
                                ],
                                [
                                    'nome' => 'Roberto Souza',
                                    'texto' =>
                                        'Precisei de um desentupimento urgente no domingo e eles atenderam na hora. Equipe muito competente e preço honesto. Virei cliente fiel!',
                                    'avatar' =>
                                        'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=face',
                                ],
                                [
                                    'nome' => 'Ana Paula Costa',
                                    'texto' =>
                                        'Tive problemas com o encanamento e eles resolveram tudo rapidamente. Além do desentupimento, deram dicas para evitar novos problemas. Excelente!',
                                    'avatar' =>
                                        'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100&h=100&fit=crop&crop=face',
                                ],
                                [
                                    'nome' => 'João Pedro Lima',
                                    'texto' =>
                                        'Melhor desentupidora da região! Atendimento rápido, equipe educada e serviço impecável. O preço foi bem abaixo do que eu esperava.',
                                    'avatar' =>
                                        'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face',
                                ],
                            ];
                        @endphp

                        @foreach ($depoimentos as $dep)
                            <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                                <div
                                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col gap-4 h-full">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <img src="{{ $dep['avatar'] }}" alt="{{ $dep['nome'] }}"
                                                class="w-10 h-10 rounded-full object-cover">
                                            <div class="text-left">
                                                <p class="font-semibold text-sm" style="color: hsl(210, 29%, 15%);">
                                                    {{ $dep['nome'] }}</p>
                                                <p class="text-xs" style="color: hsl(215, 16%, 47%);">Avaliação</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-0.5">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="hsl(40, 95%, 55%)"
                                                    stroke="hsl(40, 95%, 55%)" stroke-width="2">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                    <p class="text-sm leading-relaxed text-left" style="color: hsl(215, 16%, 47%);">
                                        {{ $dep['texto'] }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                {{-- Botões de navegação --}}
                <div class="flex justify-center gap-3 mt-8">
                    <button onclick="moveCarousel(-1)"
                        class="w-10 h-10 rounded-full border flex items-center justify-center hover:bg-white transition-colors"
                        style="border-color: hsl(215, 16%, 47%); color: hsl(210, 29%, 15%);">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button onclick="moveCarousel(1)"
                        class="w-10 h-10 rounded-full border flex items-center justify-center hover:bg-white transition-colors"
                        style="border-color: hsl(215, 16%, 47%); color: hsl(210, 29%, 15%);">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <section class="bg-[#f5f5f5] py-16 md:py-24 px-4" id="contato">
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center">

                <!-- LADO ESQUERDO - TEXTO -->
                <div class="animate-fade-in">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#1f2937] leading-tight mb-6">
                        Marque sua<br>
                        <span class="text-[#166534]">visita!</span>
                    </h2>

                    <p class="text-[#1f2937] text-base md:text-lg leading-relaxed mb-4">
                        Oferecemos soluções rápidas e eficientes em desentupimento, com atendimento
                        ágil e profissionais qualificados para resolver seu problema sem complicação.
                    </p>

                    <p class="text-[#1f2937] text-base md:text-lg leading-relaxed mb-8">
                        Atendemos residências, comércios e indústrias. Entre em contato e agende
                        sua visita com a <strong>Santec Desentupidora.</strong>
                    </p>

                    <a href="#"
                        class="inline-block bg-[#16a34a] hover:bg-[#166534] text-white font-semibold text-base md:text-lg px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300">
                        SOLICITAR ATENDIMENTO
                    </a>
                </div>

                <!-- LADO DIREITO - MAPA -->
                <div class="animate-fade-in-right rounded-2xl overflow-hidden shadow-xl bg-white"
                    style="min-height: 420px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.052940818107!2d-47.840199524885584!3d-23.350096478945567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5dece01eb11a5%3A0xf3b7d6af5186355a!2sAv.%20Dr.%20Sales%20Gomes%2C%20473%20-%20Centro%2C%20Tatu%C3%AD%20-%20SP%2C%2018270-690!5e0!3m2!1spt-BR!2sbr!4v1774546152058!5m2!1spt-BR!2sbr"
                        width="100%" height="100%" style="border:0; min-height:420px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </section>
        <style>
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

            @keyframes fadeInRight {
                from {
                    opacity: 0;
                    transform: translateX(40px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            .animate-fade-in {
                animation: fadeIn 0.8s ease-out both;
            }

            .animate-fade-in-right {
                animation: fadeInRight 0.8s ease-out 0.2s both;
            }
        </style>

        <footer id="footer" class="bg-gray-900 text-gray-300">
            <div class="max-w-7xl mx-auto px-6 py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

                    <!-- Coluna 1: Sobre -->
                    <div>
                        <h3 class="text-white text-xl font-bold mb-4">
                            Santec <span class="text-green-500">Desentupidora</span>
                        </h3>
                        <p class="text-sm leading-relaxed text-gray-400">
                            Soluções completas em desentupimento para residências, comércios e indústrias em Tatuí e região.
                            Atendimento rápido e profissional.
                        </p>
                        <!-- Redes sociais -->
                        <div class="flex gap-3 mt-6">
                            <a href="https://www.instagram.com/santecdesentupidora/"
                                class="w-10 h-10 rounded-full bg-green-600 text-white flex items-center justify-center hover:bg-green-500 transition-colors shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-300"
                                aria-label="Instagram">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                </svg>      
                            </a>
                            <a href="https://www.facebook.com/desentupidorasantec"
                                class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-green-600 transition-colors"
                                aria-label="Facebook">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="https://wa.me/5515998341209?text=Olá,%20vim%20pelo%20site%20e%20gostaria%20de%20solicitar%20um%20atendimento%20da%20Santec%20Desentupidora.""
                                class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-green-600 transition-colors"
                                aria-label="WhatsApp">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Coluna 2: Serviços -->
                    <div>
                        <h4 class="text-white font-semibold text-base mb-4">Serviços</h4>
                        <ul class="space-y-3 text-sm">
                            <li><a href="#" class="hover:text-green-400 transition-colors">Desentupimento
                                    Residencial</a></li>
                            <li><a href="#" class="hover:text-green-400 transition-colors">Desentupimento
                                    Comercial</a></li>
                            <li><a href="#" class="hover:text-green-400 transition-colors">Desentupimento
                                    Industrial</a></li>
                            <li><a href="#" class="hover:text-green-400 transition-colors">Limpa Fossa</a></li>
                            <li><a href="#" class="hover:text-green-400 transition-colors">Hidrojateamento</a></li>
                            <li><a href="#" class="hover:text-green-400 transition-colors">Manutenção Preventiva</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Coluna 3: Contato -->
                    <div>
                        <h4 class="text-white font-semibold text-base mb-4">Contato</h4>
                        <ul class="space-y-4 text-sm">
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-green-500 text-white flex items-center justify-center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <span>Tatuí - SP e região</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-green-500 text-white flex items-center justify-center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>

                                <span>(15) 99834-1209</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-green-500 text-white flex items-center justify-center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <span>desentupidorasantec18@gmail.com</span>
                            </li>
                            
                        </ul>
                    </div>

                    <!-- Coluna 4: Área de Atendimento -->
                    
                </div>
            </div>

            <!-- Barra inferior -->
            <div class="border-t border-gray-800">
                <div
                    class="max-w-7xl mx-auto px-6 py-5 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-500">
                    <p>&copy; 2025 Santec Desentupidora. Todos os direitos reservados.</p>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-green-400 transition-colors">Política de Privacidade</a>
                        <a href="#" class="hover:text-green-400 transition-colors">Termos de Uso</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========== FIM FOOTER ========== -->


    </div>
@endsection
