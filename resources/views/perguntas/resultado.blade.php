<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado do Quiz - Kings League Brasil</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

    <style>
        /* Corpo e fundo animado */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Orbitron', sans-serif;
            background-color: #000;
            color: #f5c518;
            overflow: hidden;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            background: radial-gradient(circle at center, #111 0%, #000 100%);
        }

        /* Container do resultado */
        .resultado-container {
            position: relative;
            z-index: 1;
            text-align: center;
            background: rgba(255, 215, 0, 0.05);
            padding: 40px;
            border-radius: 20px;
            border: 2px solid #f5c518;
            box-shadow: 0 0 25px rgba(255, 215, 0, 0.3);
            max-width: 90%;
            width: 500px;
        }

        .resultado-container:hover {
            box-shadow: 0 0 40px rgba(255, 215, 0, 0.6);
            transition: 0.3s;
        }

        .quiz-logo {
            width: 100px;
            margin-bottom: 20px;
            animation: pulse 2s infinite alternate;
        }

        @keyframes pulse {
            from { transform: scale(1); opacity: 0.9; }
            to { transform: scale(1.1); opacity: 1; }
        }

        h1 {
            color: #f5c518;
            font-weight: 700;
            text-shadow: 0 0 15px rgba(255, 215, 0, 0.6);
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .pontuacao {
            font-size: 2rem;
            color: #fff;
            margin: 10px 0 20px;
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
            margin-top: 30px;
            color: #aaa;
            font-size: 0.9rem;
        }

        /* Responsividade */
        @media (max-width: 576px) {
            h1 { font-size: 1.6rem; }
            .pontuacao { font-size: 1.4rem; }
            .btn-primary { width: 100%; }
        }
    </style>
</head>

<body>
    <!-- Fundo animado -->
    <canvas id="particles"></canvas>

    <div class="resultado-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/Kings_League_logo.png" alt="Kings League Logo" class="quiz-logo">

        <h1>Resultado do Quiz</h1>

        <div class="pontuacao">
            🏆 Sua pontuação: <strong>{{ $pontuacao }}</strong>
        </div>

        <a href="{{ route('inicio') }}" class="btn btn-primary mt-3">Tentar Novamente</a>

        <footer>
            ⚽ Kings League Brasil © 2025
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fundo animado -->
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
