<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<style>
    * {
        box-sizing: border-box;
    }

    .guest-home {
        min-height: 100vh;
        background: linear-gradient(135deg, #eff6ff, #ffffff, #dbeafe);
        font-family: Arial, Helvetica, sans-serif;
    }

    .guest-navbar {
        background: #ffffff;
        border-bottom: 1px solid #dbeafe;
        box-shadow: 0 8px 25px rgba(15, 23, 42, 0.06);
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .guest-navbar-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 16px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }

    .guest-logo {
        color: #2563eb;
        font-size: 1.5rem;
        font-weight: 900;
        text-decoration: none;
    }

    .guest-menu {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
    }

    .guest-menu a {
        color: #475569;
        text-decoration: none;
        font-weight: 800;
        padding: 10px 14px;
        border-radius: 12px;
        transition: 0.3s;
    }

    .guest-menu a:hover {
        background: #eff6ff;
        color: #2563eb;
    }

    .btn-login-nav {
        border: 2px solid #bfdbfe;
        color: #1e40af !important;
        background: white;
    }

    .btn-signup-nav {
        background: #2563eb !important;
        color: white !important;
        box-shadow: 0 8px 20px rgba(37, 99, 235, 0.22);
    }

    .btn-signup-nav:hover {
        background: #1d4ed8 !important;
        color: white !important;
    }

    .guest-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .hero {
        display: grid;
        grid-template-columns: 1.1fr 1fr;
        gap: 35px;
        align-items: center;
    }

    .hero-content {
        background: white;
        border: 1px solid #dbeafe;
        border-radius: 30px;
        padding: 45px;
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.09);
    }

    .hero-badge {
        display: inline-block;
        background: #dbeafe;
        color: #1d4ed8;
        padding: 8px 16px;
        border-radius: 999px;
        font-weight: 900;
        margin-bottom: 18px;
    }

    .hero-content h1 {
        color: #0f172a;
        font-size: 3.2rem;
        line-height: 1.1;
        font-weight: 900;
        margin-bottom: 18px;
    }

    .hero-content h1 span {
        color: #2563eb;
    }

    .hero-content p {
        color: #64748b;
        font-size: 1.08rem;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .hero-buttons {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
    }

    .btn-primary-home,
    .btn-secondary-home {
        text-decoration: none;
        padding: 14px 24px;
        border-radius: 14px;
        font-weight: 900;
        transition: 0.3s;
        display: inline-block;
    }

    .btn-primary-home {
        background: #2563eb;
        color: white;
        box-shadow: 0 12px 25px rgba(37, 99, 235, 0.22);
    }

    .btn-primary-home:hover {
        background: #1d4ed8;
        color: white;
        transform: translateY(-2px);
    }

    .btn-secondary-home {
        background: white;
        color: #1e40af;
        border: 2px solid #bfdbfe;
    }

    .btn-secondary-home:hover {
        background: #eff6ff;
        color: #1e3a8a;
        transform: translateY(-2px);
    }

    .hero-preview {
        background: linear-gradient(135deg, #2563eb, #1e40af);
        border-radius: 30px;
        padding: 35px;
        color: white;
        box-shadow: 0 18px 45px rgba(37, 99, 235, 0.25);
    }

    .hero-preview h2 {
        font-size: 1.8rem;
        font-weight: 900;
        margin-bottom: 20px;
    }

    .preview-card {
        background: rgba(255, 255, 255, 0.14);
        border: 1px solid rgba(255, 255, 255, 0.24);
        border-radius: 20px;
        padding: 20px;
        margin-bottom: 16px;
    }

    .preview-card strong {
        display: block;
        font-size: 1.2rem;
        margin-bottom: 6px;
    }

    .preview-card span {
        color: #dbeafe;
        line-height: 1.5;
    }

    .section-title {
        text-align: center;
        max-width: 720px;
        margin: 70px auto 35px;
    }

    .section-title h2 {
        color: #0f172a;
        font-size: 2.3rem;
        font-weight: 900;
        margin-bottom: 12px;
    }

    .section-title p {
        color: #64748b;
        line-height: 1.7;
        font-size: 1.05rem;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .feature-card {
        background: white;
        border: 1px solid #dbeafe;
        border-radius: 24px;
        padding: 28px;
        box-shadow: 0 14px 35px rgba(15, 23, 42, 0.08);
        transition: 0.3s;
    }

    .feature-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 22px 45px rgba(15, 23, 42, 0.12);
    }

    .feature-icon {
        width: 58px;
        height: 58px;
        border-radius: 18px;
        background: #dbeafe;
        color: #2563eb;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin-bottom: 18px;
    }

    .feature-card h3 {
        color: #0f172a;
        font-size: 1.25rem;
        font-weight: 900;
        margin-bottom: 10px;
    }

    .feature-card p {
        color: #64748b;
        line-height: 1.6;
        margin: 0;
    }

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .project-card {
        background: white;
        border: 1px solid #dbeafe;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 14px 35px rgba(15, 23, 42, 0.08);
        transition: 0.3s;
    }

    .project-card:hover {
        transform: translateY(-7px);
    }

    .project-top {
        background: linear-gradient(135deg, #2563eb, #60a5fa);
        color: white;
        padding: 28px;
    }

    .project-emoji {
        font-size: 2.1rem;
        margin-bottom: 20px;
    }

    .project-top h3 {
        font-size: 1.5rem;
        font-weight: 900;
        margin: 0;
    }

    .project-body {
        padding: 24px;
    }

    .project-body p {
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 18px;
    }

    .project-meta {
        display: flex;
        justify-content: space-between;
        color: #334155;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .progress-bg {
        height: 10px;
        background: #dbeafe;
        border-radius: 999px;
        overflow: hidden;
        margin-bottom: 18px;
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, #2563eb, #60a5fa);
    }

    .btn-project {
        display: block;
        text-align: center;
        background: #2563eb;
        color: white;
        text-decoration: none;
        padding: 12px;
        border-radius: 999px;
        font-weight: 900;
        transition: 0.3s;
    }

    .btn-project:hover {
        background: #1d4ed8;
        color: white;
    }

    .guest-cta {
        margin-top: 70px;
        background: linear-gradient(135deg, #2563eb, #1e40af);
        color: white;
        border-radius: 30px;
        padding: 50px 30px;
        text-align: center;
        box-shadow: 0 20px 50px rgba(37, 99, 235, 0.25);
    }

    .guest-cta h2 {
        font-size: 2.4rem;
        font-weight: 900;
        margin-bottom: 14px;
    }

    .guest-cta p {
        color: #dbeafe;
        max-width: 650px;
        margin: 0 auto 28px;
        line-height: 1.7;
    }

    .guest-cta a {
        background: white;
        color: #1e40af;
        text-decoration: none;
        padding: 14px 26px;
        border-radius: 14px;
        font-weight: 900;
        display: inline-block;
        transition: 0.3s;
    }

    .guest-cta a:hover {
        background: #eff6ff;
        color: #1e3a8a;
        transform: translateY(-2px);
    }

    @media (max-width: 950px) {
        .hero {
            grid-template-columns: 1fr;
        }

        .features-grid,
        .projects-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 650px) {
        .guest-navbar-content {
            flex-direction: column;
            align-items: flex-start;
        }

        .guest-menu {
            width: 100%;
        }

        .guest-menu a {
            width: 100%;
        }

        .hero-content {
            padding: 30px;
        }

        .hero-content h1 {
            font-size: 2.2rem;
        }

        .features-grid,
        .projects-grid {
            grid-template-columns: 1fr;
        }

        .guest-cta h2 {
            font-size: 2rem;
        }
    }
</style>

<div class="guest-home">



    <main class="guest-container">

        <section class="hero">
            <div class="hero-content">
                <div class="hero-badge">Plataforma de apoio independente</div>

                <h1>
                    Apoie criadores e transforme ideias em <span>projetos reais</span>
                </h1>

                <p>
                    O Ampara.se conecta criadores independentes com pessoas que
                    desejam apoiar conteúdos, campanhas, arte, educação, tecnologia
                    e projetos criativos.
                </p>

                <div class="hero-buttons">
                    <a href="{{ route('signup') }}" class="btn-primary-home">
                        Criar conta grátis
                    </a>

                    <a href="{{ route('projects') }}" class="btn-secondary-home">
                        Explorar projetos
                    </a>
                </div>
            </div>

            <div class="hero-preview">
                <h2>O que você pode fazer?</h2>

                <div class="preview-card">
                    <strong>🤝 Apoiar projetos</strong>
                    <span>Escolha campanhas e contribua com criadores que você acredita.</span>
                </div>

                <div class="preview-card">
                    <strong>🎨 Criar campanhas</strong>
                    <span>Publique seu projeto, defina metas e receba contribuições.</span>
                </div>

                <div class="preview-card">
                    <strong>💳 Acompanhar apoios</strong>
                    <span>Veja metas, valores arrecadados e progresso das campanhas.</span>
                </div>
            </div>
        </section>

        <section>
            <div class="section-title">
                <h2>Como o Ampara.se funciona?</h2>
                <p>
                    Uma plataforma simples para criadores divulgarem seus projetos
                    e apoiadores contribuírem com segurança.
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">1</div>
                    <h3>Crie sua conta</h3>
                    <p>
                        Cadastre-se como apoiador ou criador em poucos passos.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">2</div>
                    <h3>Explore campanhas</h3>
                    <p>
                        Encontre projetos de games, arte, tecnologia, educação e muito mais.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">3</div>
                    <h3>Apoie ou receba apoio</h3>
                    <p>
                        Contribua com criadores ou publique seu próprio projeto.
                    </p>
                </div>
            </div>
        </section>

        <section>
            <div class="section-title">
                <h2>Projetos em destaque</h2>
                <p>
                    Conheça algumas campanhas disponíveis na plataforma.
                </p>
            </div>

            <div class="projects-grid">

                <div class="project-card">
                    <div class="project-top">
                        <div class="project-emoji">🎮</div>
                        <h3>GameLab</h3>
                    </div>

                    <div class="project-body">
                        <p>
                            Conteúdo sobre games, lives, análises e novidades do universo gamer.
                        </p>

                        <div class="project-meta">
                            <span>R$ 1.420</span>
                            <span>71%</span>
                        </div>

                        <div class="progress-bg">
                            <div class="progress-fill" style="width: 71%;"></div>
                        </div>

                        <a href="{{ route('login') }}" class="btn-project">
                            Entrar para apoiar
                        </a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-top">
                        <div class="project-emoji">🎨</div>
                        <h3>Arte Azul</h3>
                    </div>

                    <div class="project-body">
                        <p>
                            Ilustrações, quadrinhos digitais e artes exclusivas para apoiadores.
                        </p>

                        <div class="project-meta">
                            <span>R$ 960</span>
                            <span>64%</span>
                        </div>

                        <div class="progress-bg">
                            <div class="progress-fill" style="width: 64%;"></div>
                        </div>

                        <a href="{{ route('login') }}" class="btn-project">
                            Entrar para apoiar
                        </a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-top">
                        <div class="project-emoji">💻</div>
                        <h3>Tech Fácil</h3>
                    </div>

                    <div class="project-body">
                        <p>
                            Aulas de programação, desenvolvimento web e dicas para iniciantes.
                        </p>

                        <div class="project-meta">
                            <span>R$ 2.250</span>
                            <span>75%</span>
                        </div>

                        <div class="progress-bg">
                            <div class="progress-fill" style="width: 75%;"></div>
                        </div>

                        <a href="{{ route('login') }}" class="btn-project">
                            Entrar para apoiar
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <section class="guest-cta">
            <h2>Entre para a comunidade Ampara.se</h2>

            <p>
                Crie sua conta para apoiar criadores, acompanhar campanhas
                ou publicar seu próprio projeto independente.
            </p>

            <a href="{{ route('signup') }}">
                Criar minha conta
            </a>
        </section>

    </main>

</div>

