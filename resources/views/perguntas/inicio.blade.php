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
            height: 100vh;
            overflow: hidden;
            color: #f5c518;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            background-color: #000;
        }

        /* Fundo animado */
        #particles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 0;
            background: radial-gradient(circle at center, #111 0%, #000 100%);
        }

        .quiz-container {
            position: relative;
            z-index: 1;
            background: rgba(255, 215, 0, 0.05);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(255, 215, 0, 0.3);
            text-align: center;
            max-width: 90%;
            width: 500px;
            border: 2px solid #f5c518;
        }

        .quiz-logo {
            width: 100px;
            margin-bottom: 15px;
            animation: pulse 2s infinite alternate;
        }

        @keyframes pulse {
            from { transform: scale(1); opacity: 0.9; }
            to { transform: scale(1.1); opacity: 1; }
        }

        h1 {
            font-weight: 700;
            letter-spacing: 2px;
        }

        .lead {
            color: #fff;
            font-size: 1.1rem;
        }

        .btn-primary {
            background-color: #f5c518;
            border: none;
            color: #000;
            font-weight: bold;
            font-size: 1.1rem;
            padding: 12px 35px;
            border-radius: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.6);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ffe45e;
            box-shadow: 0 0 25px rgba(255, 215, 0, 0.9);
            transform: scale(1.05);
        }

        footer {
            margin-top: 25px;
            color: #aaa;
            font-size: 0.9rem;
        }

        /* Responsividade */
        @media (max-width: 576px) {
            .quiz-container {
                padding: 30px 20px;
            }

            h1 {
                font-size: 1.6rem;
            }

            .lead {
                font-size: 1rem;
            }

            .btn-primary {
                font-size: 1rem;
                padding: 10px 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Fundo animado -->
    <canvas id="particles"></canvas>

    <div class="quiz-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/Kings_League_logo.png" alt="Kings League Logo" class="quiz-logo">

        <h1>Quiz Kings League Brasil</h1>
        <p class="lead mt-3">
            Teste seus conhecimentos com <strong>{{ $total_perguntas }}</strong> perguntas incríveis sobre a liga!
        </p>

        <a href="{{ route('responder') }}" class="btn btn-primary mt-4">Iniciar Quiz</a>

        <footer>
            <p>🏆 Desenvolvido com paixão pela Kings League Brasil</p>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Animação do fundo com partículas douradas -->
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

