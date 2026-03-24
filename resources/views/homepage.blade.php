@extends('layouts.app')

@section('content')
<div class="santec-page">
    {{-- Hero Section --}}
    <section class="hero">
        <div class="hero-text">
            <h3>DESENTUPIDORA EM TATUÍ PARA</h3>
            <h1>Seu problema <br><span>resolvido</span></h1>
            <p>
                A Santec Desentupidora tem o objetivo de trazer soluções em desentupimento
                com os melhores profissionais da cidade de Tatuí e região.
            </p>
        </div>
    </section>

    <section class="info-cards">
        <div class="bg-red-500 text-white p-5 text-center">
            TESTE TAILWIND
        </div>
        <!-- CARD 1 -->
        <div class="info-card">
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
        <div class="info-card">
            <h3>Endereço do pátio</h3>

            <div class="info-row">
                <div class="info-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>

                <div class="info-text">
                    <p>TATUÍ - SP</p>
                    <strong>Av. Sales Gomes, 473 Sala 2</strong>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="info-card">
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
    <section class="services">

        <div class="services-header">
            <h2>Nossos <span>Serviços</span></h2>
            <p>
                A Santec Desentupidora oferece soluções completas em desentupimento
                para residências, empresas e indústrias em Tatuí e região.
            </p>
            <h1>teste</h1>
        </div>

        <div class="services-container">

            <div class="container-img">
                <div class="slide">
                    <div class="pagina">
                        <img src="hidrojateamento.jpg" alt="Imagem 1">
                    </div>
                    <div class="pagina">
                        <img src="motor.webp" alt="Imagem 2">
                    </div>
                    <div class="pagina">
                        <img src="OIP.webp" alt="Imagem 3">
                    </div>
                    <div class="pagina">
                        <img src="caminho-da-imagem4.jpg" alt="Imagem 4">
                    </div>
                    <!-- Adicione mais imagens conforme necessário -->
                </div>
            </div>

        </div>

    </section>

    {{-- Seção de Depoimentos - Cole isso no seu layout Blade --}}
    {{-- Certifique-se de ter Tailwind CSS configurado no seu projeto Laravel --}}

    <section class="py-20 px-4" style="background-color: hsl(220, 14%, 94%);">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-light mb-4" style="color: hsl(210, 29%, 15%);">
                Alguns <span class="font-bold">depoimentos</span>
            </h2>
            <p class="max-w-2xl mx-auto mb-8 text-sm md:text-base leading-relaxed" style="color: hsl(215, 16%, 47%);">
                Nossa equipe de desentupidora tem o objetivo de oferecer serviços rápidos e eficientes,
                com os melhores profissionais e preços acessíveis para você.
            </p>
            <a href="#contato"
                class="inline-block rounded-full px-10 py-3 mb-14 uppercase tracking-widest text-xs font-semibold text-white transition-colors"
                style="background-color: hsl(207, 72%, 28%);">
                Solicitar Orçamento
            </a>

            {{-- Carrossel --}}
            <div class="relative overflow-hidden" id="depoimentos-carousel">
                <div class="flex transition-transform duration-500 ease-in-out" id="depoimentos-track">

                    @php
                    $depoimentos = [
                    [
                    'nome' => 'Mariana Silva',
                    'texto' => 'Serviço excelente! Chegaram rápido e resolveram o entupimento da pia da cozinha em menos de 30 minutos. Preço justo e profissionais muito educados.',
                    'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face',
                    ],
                    [
                    'nome' => 'Carlos Eduardo',
                    'texto' => 'Meu esgoto estava entupido há dias e ninguém resolvia. Chamei essa equipe e em pouco tempo tudo funcionando perfeitamente. Super recomendo!',
                    'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face',
                    ],
                    [
                    'nome' => 'Fernanda Oliveira',
                    'texto' => 'Atendimento nota 10! Muito profissionais e pontuais. Desentupimento do ralo do banheiro feito com qualidade. Já indiquei para vários vizinhos.',
                    'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face',
                    ],
                    [
                    'nome' => 'Roberto Souza',
                    'texto' => 'Precisei de um desentupimento urgente no domingo e eles atenderam na hora. Equipe muito competente e preço honesto. Virei cliente fiel!',
                    'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=face',
                    ],
                    [
                    'nome' => 'Ana Paula Costa',
                    'texto' => 'Tive problemas com o encanamento e eles resolveram tudo rapidamente. Além do desentupimento, deram dicas para evitar novos problemas. Excelente!',
                    'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100&h=100&fit=crop&crop=face',
                    ],
                    [
                    'nome' => 'João Pedro Lima',
                    'texto' => 'Melhor desentupidora da região! Atendimento rápido, equipe educada e serviço impecável. O preço foi bem abaixo do que eu esperava.',
                    'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face',
                    ],
                    ];
                    @endphp

                    @foreach ($depoimentos as $dep)
                    <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col gap-4 h-full">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <img src="{{ $dep['avatar'] }}" alt="{{ $dep['nome'] }}"
                                        class="w-10 h-10 rounded-full object-cover">
                                    <div class="text-left">
                                        <p class="font-semibold text-sm" style="color: hsl(210, 29%, 15%);">{{ $dep['nome'] }}</p>
                                        <p class="text-xs" style="color: hsl(215, 16%, 47%);">Avaliação</p>
                                    </div>
                                </div>
                                <div class="flex gap-0.5">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="hsl(40, 95%, 55%)" stroke="hsl(40, 95%, 55%)" stroke-width="2">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                        </svg>
                                        @endfor
                                </div>
                            </div>
                            <p class="text-sm leading-relaxed text-left" style="color: hsl(215, 16%, 47%);">{{ $dep['texto'] }}</p>
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




</div>
@endsection