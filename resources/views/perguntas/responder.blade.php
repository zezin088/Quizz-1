<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Kings League Brasil</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Orbitron', sans-serif;
            background-color: #000;
            color: #f5c518;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Fundo animado com partículas douradas */
        #particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            background: radial-gradient(circle at center, #111 0%, #000 100%);
        }

        .container {
            position: relative;
            z-index: 2;
        }

        h1 {
            font-weight: 700;
            letter-spacing: 1px;
            color: #f5c518;
            text-shadow: 0 0 15px rgba(255, 215, 0, 0.6);
        }

        p {
            color: #fff;
        }

        .card {
            background: rgba(255, 215, 0, 0.05);
            border: 1px solid #f5c518;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.2);
            color: #fff;
        }

        .card h2 {
            color: #f5c518;
            font-size: 1.3rem;
            margin-top: 10px;
        }

        .form-check-input {
            accent-color: #f5c518;
        }

        .form-check-label {
            font-size: 1rem;
        }

        .btn-primary {
            background-color: #f5c518;
            border: none;
            color: #000;
            font-weight: bold;
            padding: 12px 35px;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.6);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ffe45e;
            box-shadow: 0 0 25px rgba(255, 215, 0, 0.9);
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            color: #aaa;
            margin-top: 30px;
            font-size: 0.9rem;
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.6rem;
            }

            .card h2 {
                font-size: 1.1rem;
            }

            .btn-primary {
                width: 100%;
                font-size: 1rem;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Fundo animado -->
    <canvas id="particles"></canvas>

    <div class="container mt-5 py-4">
        <div class="row">
            <div class="col text-center">
                <h1>🏆 Início das Questões</h1>
                <p>Responda as perguntas do quiz e veja seu resultado ao final!</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-8 mx-auto">

                <form action="{{ route('enviarRespostas') }}" method="POST">
                    @csrf
                    @foreach($perguntas as $pergunta)
                        <div class="card mb-4 p-3">
                            <h2>{{ $pergunta->texto }}</h2>

                            <div class="mt-3">
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio"
                                        name="pergunta_{{ $pergunta->id }}" id="a{{ $pergunta->id }}" value="A">
                                    <label class="form-check-label" for="a{{ $pergunta->id }}">
                                        {{ $pergunta->opcao_a }}
                                    </label>
                                </div>

                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio"
                                        name="pergunta_{{ $pergunta->id }}" id="b{{ $pergunta->id }}" value="B">
                                    <label class="form-check-label" for="b{{ $pergunta->id }}">
                                        {{ $pergunta->opcao_b }}
                                    </label>
                                </div>

                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio"
                                        name="pergunta_{{ $pergunta->id }}" id="c{{ $pergunta->id }}" value="C">
                                    <label class="form-check-label" for="c{{ $pergunta->id }}">
                                        {{ $pergunta->opcao_c }}
                                    </label>
                                </div>

                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio"
                                        name="pergunta_{{ $pergunta->id }}" id="d{{ $pergunta->id }}" value="D">
                                    <label class="form-check-label" for="d{{ $pergunta->id }}">
                                        {{ $pergunta->opcao_d }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg mt-3">Enviar Respostas</button>
                    </div>
                </form>
            </div>
        </div>

        <footer>
            <p>⚽ Kings League Brasil © 2025 - Desenvolvido com estilo dourado</p>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fundo animado (partículas douradas) -->
    <script>
        const canvas = document.getElementById('particles');
        const ctx = canvas.getContext('2d');
        let particlesArray;

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            init();
        });

        class Particle {
            constructor(x, y, size, speedX, speedY) {
                this.x = x;
                this.y = y;
                this.size = size;
                this.speedX = speedX;
                this.speedY = speedY;
                this.color = 'rgba(245, 197, 24, 0.8)';
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
                if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
            }
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fillStyle = this.color;
                ctx.fill();
            }
        }

        function init() {
            particlesArray = [];
            const numberOfParticles = (canvas.width * canvas.height) / 12000;
            for (let i = 0; i < numberOfParticles; i++) {
                const size = Math.random() * 2 + 1;
                const x = Math.random() * canvas.width;
                const y = Math.random() * canvas.height;
                const speedX = (Math.random() - 0.5) * 0.8;
                const speedY = (Math.random() - 0.5) * 0.8;
                particlesArray.push(new Particle(x, y, size, speedX, speedY));
            }
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let i = 0; i < particlesArray.length; i++) {
                particlesArray[i].update();
                particlesArray[i].draw();
            }
            requestAnimationFrame(animate);
        }

        init();
        animate();
    </script>
</body>
</html>
