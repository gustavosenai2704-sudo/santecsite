<x-app-layout>
    <style>
        .carousel-track {
            transition: transform 0.4s ease;
        }

        .dot.active {
            background-color: #16a34a;
            transform: scale(1.15);
        }
    </style>
    </head>

    <body class="bg-[#f5f5f5] text-gray-800 font-sans">

        <section class="py-16 md:py-24 px-4">
            <div class="max-w-6xl mx-auto">

                <!-- Título -->
                <div class="text-center mb-12">
                    <h1 class="font-display text-4xl md:text-6xl font-bold mb-4">
                        Nossos <span class="text-brand-dark">Serviços</span>
                    </h1>
                    <p class="text-gray-500 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
                        A Santec Desentupidora oferece soluções completas em desentupimento
                        para residências, empresas e indústrias em Tatuí e região.
                    </p>
                </div>

                <!-- Galeria de Fotos -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-20">
                    <div class="relative overflow-hidden rounded-2xl aspect-[3/4] group">
                        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=640&h=800&fit=crop"
                            alt="Hidrojateamento profissional" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl aspect-[3/4] group">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=640&h=800&fit=crop"
                            alt="Caminhão de desentupimento" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl aspect-[3/4] group">
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=640&h=800&fit=crop"
                            alt="Serviço residencial" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl aspect-[3/4] group">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=640&h=800&fit=crop"
                            alt="Limpeza com alta pressão" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                </div>

                <!-- Subtítulo do Carrossel -->
                <div class="text-center mb-10">
                    <p class="text-gray-500 max-w-2xl mx-auto text-base leading-relaxed">
                        Oferecemos soluções rápidas e eficientes em desentupimento e
                        manutenção hidráulica, com equipe especializada e tecnologia de
                        ponta para atender residências, comércios e indústrias.
                    </p>
                </div>

                <!-- Carrossel -->
                <div class="relative" id="carousel">
                    <div class="overflow-hidden">
                        <div class="carousel-track flex gap-6" id="carouselTrack">

                            <!-- Card 1 -->
                            <div
                                class="carousel-slide flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                                <div
                                    class="rounded-xl bg-white p-8 shadow-sm border border-gray-200 transition-all duration-300 hover:shadow-lg hover:border-brand/30 hover:-translate-y-1 h-full">
                                    <div
                                        class="mb-6 inline-flex items-center justify-center w-14 h-14 rounded-xl bg-brand/10">
                                        <svg class="w-7 h-7 text-brand" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 3c-1.2 2.4-4 4-4 7a4 4 0 008 0c0-3-2.8-4.6-4-7zM8.5 17.5c-.3.7-1.5 1.2-1.5 2.5a1.5 1.5 0 003 0c0-1.3-1.2-1.8-1.5-2.5zM15.5 17.5c-.3.7-1.5 1.2-1.5 2.5a1.5 1.5 0 003 0c0-1.3-1.2-1.8-1.5-2.5z" />
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-800 mb-3">Desentupimento de Esgoto</h3>
                                    <p class="text-gray-500 text-sm leading-relaxed">Soluções rápidas para esgoto
                                        entupido, evitando mau cheiro e transbordamentos.</p>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div
                                class="carousel-slide flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                                <div
                                    class="rounded-xl bg-white p-8 shadow-sm border border-gray-200 transition-all duration-300 hover:shadow-lg hover:border-brand/30 hover:-translate-y-1 h-full">
                                    <div
                                        class="mb-6 inline-flex items-center justify-center w-14 h-14 rounded-xl bg-brand/10">
                                        <svg class="w-7 h-7 text-brand" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 3v3m0 0a3 3 0 01-3 3H6m6-3a3 3 0 003 3h3M6 9v9a3 3 0 003 3h6a3 3 0 003-3V9" />
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-800 mb-3">Desentupimento de Pias e Ralos</h3>
                                    <p class="text-gray-500 text-sm leading-relaxed">Remoção de obstruções em pias,
                                        ralos e tubulações, garantindo fluxo normal da água.</p>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div
                                class="carousel-slide flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                                <div
                                    class="rounded-xl bg-white p-8 shadow-sm border border-gray-200 transition-all duration-300 hover:shadow-lg hover:border-brand/30 hover:-translate-y-1 h-full">
                                    <div
                                        class="mb-6 inline-flex items-center justify-center w-14 h-14 rounded-xl bg-brand/10">
                                        <svg class="w-7 h-7 text-brand" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-800 mb-3">Limpeza de Fossa</h3>
                                    <p class="text-gray-500 text-sm leading-relaxed">Serviço completo de limpeza e
                                        manutenção de fossas sépticas com segurança.</p>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div
                                class="carousel-slide flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                                <div
                                    class="rounded-xl bg-white p-8 shadow-sm border border-gray-200 transition-all duration-300 hover:shadow-lg hover:border-brand/30 hover:-translate-y-1 h-full">
                                    <div
                                        class="mb-6 inline-flex items-center justify-center w-14 h-14 rounded-xl bg-brand/10">
                                        <svg class="w-7 h-7 text-brand" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-800 mb-3">Hidrojateamento</h3>
                                    <p class="text-gray-500 text-sm leading-relaxed">Limpeza profunda com alta pressão,
                                        removendo gordura, raízes e resíduos difíceis.</p>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div
                                class="carousel-slide flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                                <div
                                    class="rounded-xl bg-white p-8 shadow-sm border border-gray-200 transition-all duration-300 hover:shadow-lg hover:border-brand/30 hover:-translate-y-1 h-full">
                                    <div
                                        class="mb-6 inline-flex items-center justify-center w-14 h-14 rounded-xl bg-brand/10">
                                        <svg class="w-7 h-7 text-brand" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714a2.25 2.25 0 00.659 1.591L19 14.5m-4.25-11.396c.251.023.501.05.75.082M12 3v5.714" />
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-800 mb-3">Caixa de Gordura</h3>
                                    <p class="text-gray-500 text-sm leading-relaxed">Limpeza e manutenção para evitar
                                        entupimentos e mau funcionamento.</p>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div
                                class="carousel-slide flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                                <div
                                    class="rounded-xl bg-white p-8 shadow-sm border border-gray-200 transition-all duration-300 hover:shadow-lg hover:border-brand/30 hover:-translate-y-1 h-full">
                                    <div
                                        class="mb-6 inline-flex items-center justify-center w-14 h-14 rounded-xl bg-brand/10">
                                        <svg class="w-7 h-7 text-brand" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-lg text-gray-800 mb-3">Caça Vazamentos</h3>
                                    <p class="text-gray-500 text-sm leading-relaxed">Identificação e solução de
                                        vazamentos ocultos com tecnologia especializada.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Controles -->
                    <div class="flex items-center justify-between mt-8">
                        <div class="flex gap-2" id="dots"></div>
                        <div class="flex gap-3">
                            <button onclick="scrollCarousel(-1)"
                                class="w-11 h-11 rounded-full border border-brand text-brand flex items-center justify-center transition-all hover:bg-brand hover:text-white shadow-sm">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 19.5L8.25 12l7.5-7.5" />
                                </svg>
                            </button>
                            <button onclick="scrollCarousel(1)"
                                class="w-11 h-11 rounded-full border border-brand text-brand flex items-center justify-center transition-all hover:bg-brand hover:text-white shadow-sm">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <script>
            const track = document.getElementById('carouselTrack');
            const dotsContainer = document.getElementById('dots');
            let currentIndex = 0;

            function getSlidesPerView() {
                if (window.innerWidth >= 1024) return 3;
                if (window.innerWidth >= 768) return 2;
                return 1;
            }

            function getTotalDots() {
                const slides = track.querySelectorAll('.carousel-slide');
                return Math.max(1, slides.length - getSlidesPerView() + 1);
            }

            function renderDots() {
                dotsContainer.innerHTML = '';
                const total = getTotalDots();
                for (let i = 0; i < total; i++) {
                    const dot = document.createElement('button');
                    dot.className = 'dot w-3 h-3 rounded-full bg-gray-300 transition-all duration-300' + (i === currentIndex ?
                        ' active' : '');
                    dot.onclick = () => goTo(i);
                    dotsContainer.appendChild(dot);
                }
            }

            function getSlideWidth() {
                const slide = track.querySelector('.carousel-slide');
                if (!slide) return 0;
                const gap = 24; // gap-6 = 1.5rem = 24px
                return slide.offsetWidth + gap;
            }

            function goTo(index) {
                const maxIndex = getTotalDots() - 1;
                currentIndex = Math.max(0, Math.min(index, maxIndex));
                track.style.transform = `translateX(-${currentIndex * getSlideWidth()}px)`;
                renderDots();
            }

            function scrollCarousel(dir) {
                goTo(currentIndex + dir);
            }

            // Touch/swipe support
            let touchStartX = 0;
            let touchEndX = 0;
            track.addEventListener('touchstart', e => {
                touchStartX = e.changedTouches[0].screenX;
            }, {
                passive: true
            });
            track.addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                const diff = touchStartX - touchEndX;
                if (Math.abs(diff) > 50) scrollCarousel(diff > 0 ? 1 : -1);
            });

            // Recalculate on resize
            window.addEventListener('resize', () => goTo(Math.min(currentIndex, getTotalDots() - 1)));

            // Init
            renderDots();
        </script>

    </body>
</x-app-layout>
