<x-app-layout>
    <style>
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
            justify-content: center
        }

        .pagina {
            width: 120px;
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            flex-shrink: 0;
            cursor: pointer;
            position: relative;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .pagina:hover {
            width: 300px;
            height: 450px;
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .pagina img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .pagina:hover img {
            transform: scale(1.05);
        }

        /* Para esconder a barra de rolagem horizontal em alguns navegadores */
        .container-img::-webkit-scrollbar {
            display: none;
        }
        
        .container-img {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Estilos para tornar responsivo */
        @media (max-width: 768px) {
            .pagina {
                width: 100px;
                height: 350px;
            }
            
            .pagina:hover {
                width: 250px;
                height: 380px;
            }
            
            .slide {
                height: 60vh;
                min-height: 400px;
            }
        }
    </style>

    <div class="container-img">
        <div class="slide">
            <div class="pagina">
                <img src="santec.png" alt="Imagem 1">
            </div>
            <div class="pagina">
                <img src="caminho-da-imagem2.jpg" alt="Imagem 2">
            </div>
            <div class="pagina">
                <img src="" alt="Imagem 3">
            </div>
            <div class="pagina">
                <img src="caminho-da-imagem4.jpg" alt="Imagem 4">
            </div>
            <!-- Adicione mais imagens conforme necessário -->
        </div>    
    </div>
</x-app-layout>