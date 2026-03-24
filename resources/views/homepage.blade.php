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
            <h1>teste</h1>
        </section>

        

    </div>
@endsection
