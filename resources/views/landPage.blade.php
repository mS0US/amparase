<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
    .landing {
        background: linear-gradient(135deg, #eff6ff 0%, #ffffff 45%, #dbeafe 100%);
        min-height: 100vh;
        padding: 60px 0;
    }

    .hero {
        max-width: 1100px;
        margin: 0 auto;
        padding: 40px 20px;
        display: grid;
        grid-template-columns: 1.2fr 1fr;
        align-items: center;
        gap: 40px;
    }

    .hero-content h1 {
        font-size: 3rem;
        line-height: 1.1;
        color: #0f172a;
        margin-bottom: 20px;
        font-weight: 800;
    }

    .hero-content h1 span {
        color: #2563eb;
    }

    .hero-content p {
        font-size: 1.1rem;
        color: #475569;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .hero-buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .btn-primary-ampara,
    .btn-secondary-ampara {
        text-decoration: none;
        padding: 14px 24px;
        border-radius: 12px;
        font-weight: 700;
        transition: 0.3s;
        display: inline-block;
    }

    .btn-primary-ampara {
        background: #2563eb;
        color: white;
        box-shadow: 0 10px 25px rgba(37, 99, 235, 0.25);
    }

    .btn-primary-ampara:hover {
        background: #1d4ed8;
        transform: translateY(-3px);
        color: white;
    }

    .btn-secondary-ampara {
        background: white;
        color: #1e40af;
        border: 2px solid #bfdbfe;
    }

    .btn-secondary-ampara:hover {
        background: #eff6ff;
        transform: translateY(-3px);
        color: #1e3a8a;
    }

    .hero-card {
        background: white;
        border-radius: 24px;
        padding: 30px;
        box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12);
        border: 1px solid #dbeafe;
    }

    .creator-box {
        background: #f8fafc;
        border-radius: 18px;
        padding: 20px;
        margin-bottom: 15px;
        border-left: 5px solid #2563eb;
    }

    .creator-box h3 {
        color: #0f172a;
        margin-bottom: 8px;
    }

    .creator-box p {
        color: #64748b;
        margin: 0;
    }

    .progress-area {
        margin-top: 20px;
    }

    .progress-label {
        display: flex;
        justify-content: space-between;
        color: #334155;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .progress-bar-bg {
        width: 100%;
        height: 12px;
        background: #dbeafe;
        border-radius: 999px;
        overflow: hidden;
    }

    .progress-bar-fill {
        width: 72%;
        height: 100%;
        background: linear-gradient(90deg, #2563eb, #60a5fa);
        border-radius: 999px;
    }

    .section-title {
        text-align: center;
        max-width: 700px;
        margin: 70px auto 35px;
        padding: 0 20px;
    }

    .section-title h2 {
        font-size: 2.2rem;
        color: #0f172a;
        margin-bottom: 12px;
        font-weight: 800;
    }

    .section-title p {
        color: #64748b;
        font-size: 1rem;
    }

    .features {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .feature-card {
        background: white;
        padding: 28px;
        border-radius: 20px;
        border: 1px solid #dbeafe;
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
        transition: 0.3s;
    }

    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 40px rgba(15, 23, 42, 0.12);
    }

    .feature-icon {
        width: 55px;
        height: 55px;
        background: #dbeafe;
        color: #2563eb;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin-bottom: 18px;
    }

    .feature-card h3 {
        color: #0f172a;
        margin-bottom: 10px;
        font-size: 1.3rem;
    }

    .feature-card p {
        color: #64748b;
        line-height: 1.6;
        margin: 0;
    }

    .steps {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 20px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .step-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 25px;
        text-align: center;
        border: 1px solid #e0e7ff;
    }

    .step-number {
        width: 45px;
        height: 45px;
        background: #2563eb;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        margin: 0 auto 15px;
    }

    .step-card h3 {
        color: #0f172a;
        margin-bottom: 10px;
    }

    .step-card p {
        color: #64748b;
        margin: 0;
        line-height: 1.6;
    }

    .cta {
        max-width: 1000px;
        margin: 80px auto 0;
        padding: 45px 25px;
        background: linear-gradient(135deg, #2563eb, #1e40af);
        border-radius: 26px;
        text-align: center;
        color: white;
        box-shadow: 0 20px 45px rgba(37, 99, 235, 0.25);
    }

    .cta h2 {
        font-size: 2.2rem;
        margin-bottom: 12px;
        font-weight: 800;
    }

    .cta p {
        color: #dbeafe;
        margin-bottom: 25px;
        font-size: 1.05rem;
    }

    .cta a {
        background: white;
        color: #1e40af;
        text-decoration: none;
        padding: 14px 26px;
        border-radius: 12px;
        font-weight: 800;
        display: inline-block;
        transition: 0.3s;
    }

    .cta a:hover {
        transform: translateY(-3px);
        background: #eff6ff;
        color: #1e3a8a;
    }

    @media (max-width: 900px) {
        .hero {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .hero-buttons {
            justify-content: center;
        }

        .features,
        .steps {
            grid-template-columns: 1fr;
        }

        .hero-content h1 {
            font-size: 2.3rem;
        }
    }
</style>

<div class="landing">

    <section class="hero">
        <div class="hero-content">
            <h1>
                Apoie criadores independentes com o <span>Ampara.se</span>
            </h1>

            <p>
                Uma plataforma feita para conectar criadores de conteúdo, artistas,
                educadores, podcasters e projetos independentes com pessoas que
                desejam apoiar ideias incríveis.
            </p>

            <div class="hero-buttons">
                <a href="{{ route('signup') }}" class="btn-primary-ampara">
                    Começar agora
                </a>

                <a href="{{ route('projects') }}" class="btn-secondary-ampara">
                    Explorar projetos
                </a>
            </div>
        </div>

        <div class="hero-card">
            <div class="creator-box">
                <h3>Projeto em destaque</h3>
                <p>Podcast independente sobre tecnologia e educação.</p>
            </div>

            <div class="creator-box">
                <h3>R$ 3.600 arrecadados</h3>
                <p>128 apoiadores contribuíram este mês.</p>
            </div>

            <div class="progress-area">
                <div class="progress-label">
                    <span>Meta mensal</span>
                    <span>72%</span>
                </div>

                <div class="progress-bar-bg">
                    <div class="progress-bar-fill"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section-title">
            <h2>Uma plataforma para quem cria e para quem apoia</h2>
            <p>
                O Ampara.se facilita a criação de campanhas, o recebimento de apoios
                e a descoberta de projetos independentes.
            </p>
        </div>

        <div class="features">
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>Para criadores</h3>
                <p>
                    Crie campanhas, personalize seu perfil, divulgue seus projetos
                    e receba contribuições dos seus apoiadores.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🤝</div>
                <h3>Para apoiadores</h3>
                <p>
                    Encontre projetos interessantes, acompanhe criadores favoritos
                    e contribua de forma simples e segura.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">💳</div>
                <h3>Pagamentos</h3>
                <p>
                    Receba apoios com valores fixos ou personalizados,
                    facilitando a manutenção dos seus projetos.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="section-title">
            <h2>Como funciona</h2>
            <p>
                Em poucos passos, criadores podem começar a receber apoio
                e apoiadores podem contribuir com projetos que acreditam.
            </p>
        </div>

        <div class="steps">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3>Crie sua conta</h3>
                <p>
                    Cadastre-se como criador ou apoiador na plataforma.
                </p>
            </div>

            <div class="step-card">
                <div class="step-number">2</div>
                <h3>Publique seu projeto</h3>
                <p>
                    Apresente sua ideia, defina metas e compartilhe com o público.
                </p>
            </div>

            <div class="step-card">
                <div class="step-number">3</div>
                <h3>Receba apoio</h3>
                <p>
                    Apoiadores contribuem para manter seu projeto ativo.
                </p>
            </div>
        </div>
    </section>

    <section class="cta">
        <h2>Transforme ideias em projetos reais</h2>
        <p>
            Comece hoje no Ampara.se e conecte seu trabalho com pessoas
            que querem apoiar sua jornada.
        </p>

        <a href="{{ route('signup') }}">
            Criar minha conta
        </a>
    </section>

</div>

</body>
</html>
