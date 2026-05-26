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

    .signup-page {
        min-height: 100vh;
        background: linear-gradient(135deg, #dbeafe 0%, #f8fafc 45%, #ffffff 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .signup-container {
        width: 100%;
        max-width: 1100px;
        background: #ffffff;
        border-radius: 28px;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1fr 1.1fr;
        box-shadow: 0 25px 60px rgba(15, 23, 42, 0.14);
    }

    .signup-info {
        background: linear-gradient(135deg, #2563eb, #1e3a8a);
        color: white;
        padding: 60px 45px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .brand {
        font-size: 1.5rem;
        font-weight: 900;
        margin-bottom: 55px;
    }

    .signup-info h1 {
        font-size: 2.6rem;
        line-height: 1.15;
        margin-bottom: 20px;
        font-weight: 900;
    }

    .signup-info p {
        color: #dbeafe;
        font-size: 1rem;
        line-height: 1.7;
        margin-bottom: 28px;
    }

    .info-box {
        background: rgba(255, 255, 255, 0.14);
        border: 1px solid rgba(255, 255, 255, 0.25);
        border-radius: 18px;
        padding: 18px;
        margin-top: 15px;
    }

    .info-box strong {
        display: block;
        font-size: 1rem;
        margin-bottom: 6px;
    }

    .info-box span {
        color: #dbeafe;
        font-size: 0.95rem;
    }

    .signup-form-area {
        padding: 55px 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .signup-form-area h2 {
        font-size: 2.2rem;
        color: #0f172a;
        margin-bottom: 8px;
        font-weight: 900;
    }

    .subtitle {
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 32px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-group label {
        display: block;
        color: #334155;
        font-weight: 800;
        margin-bottom: 8px;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        height: 52px;
        border: 1px solid #cbd5e1;
        border-radius: 14px;
        padding: 0 15px;
        font-size: 1rem;
        background: #f8fafc;
        outline: none;
        transition: 0.2s;
    }

    .form-group input:focus,
    .form-group select:focus {
        border-color: #2563eb;
        background: white;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
    }

    .account-type {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        margin-bottom: 22px;
    }

    .type-card {
        position: relative;
    }

    .type-card input {
        display: none;
    }

    .type-card label {
        display: block;
        padding: 18px;
        border-radius: 18px;
        border: 2px solid #dbeafe;
        background: #f8fafc;
        cursor: pointer;
        transition: 0.3s;
    }

    .type-card strong {
        display: block;
        color: #0f172a;
        font-size: 1rem;
        margin-bottom: 5px;
    }

    .type-card span {
        color: #64748b;
        font-size: 0.9rem;
        line-height: 1.4;
    }

    .type-card input:checked + label {
        border-color: #2563eb;
        background: #eff6ff;
        box-shadow: 0 10px 25px rgba(37, 99, 235, 0.12);
    }

    .terms {
        display: flex;
        gap: 10px;
        align-items: flex-start;
        color: #475569;
        font-size: 0.95rem;
        margin-bottom: 25px;
        line-height: 1.5;
    }

    .terms input {
        margin-top: 4px;
    }

    .terms a {
        color: #2563eb;
        font-weight: 800;
        text-decoration: none;
    }

    .btn-signup {
        width: 100%;
        height: 54px;
        border: none;
        border-radius: 999px;
        background: #2563eb;
        color: white;
        font-size: 1rem;
        font-weight: 900;
        cursor: pointer;
        transition: 0.3s;
        box-shadow: 0 12px 25px rgba(37, 99, 235, 0.25);
    }

    .btn-signup:hover {
        background: #1d4ed8;
        transform: translateY(-2px);
    }

    .login-text {
        text-align: center;
        color: #64748b;
        margin-top: 28px;
    }

    .login-text a {
        color: #2563eb;
        font-weight: 900;
        text-decoration: none;
    }

    .login-text a:hover {
        text-decoration: underline;
    }

    @media (max-width: 900px) {
        .signup-container {
            grid-template-columns: 1fr;
            max-width: 560px;
        }

        .signup-info {
            text-align: center;
            padding: 40px 30px;
        }

        .brand {
            margin-bottom: 25px;
        }

        .signup-info h1 {
            font-size: 2rem;
        }

        .signup-form-area {
            padding: 40px 30px;
        }

        .form-row,
        .account-type {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .signup-page {
            padding: 20px 12px;
        }

        .signup-container {
            border-radius: 20px;
        }
    }
</style>

<section class="signup-page">
    <div class="signup-container">

        <div class="signup-info">
            <div class="brand">💙 Ampara.se</div>

            <h1>Crie sua conta e comece a apoiar ideias</h1>

            <p>
                Cadastre-se para apoiar criadores independentes ou publicar
                seus próprios projetos na plataforma.
            </p>

            <div class="info-box">
                <strong>🤝 Para apoiadores</strong>
                <span>Descubra projetos criativos e contribua com quem você acredita.</span>
            </div>

            <div class="info-box">
                <strong>🚀 Para criadores</strong>
                <span>Crie campanhas, receba apoios e acompanhe suas metas.</span>
            </div>
        </div>

        <div class="signup-form-area">
            <h2>Criar conta</h2>

            <p class="subtitle">
                Preencha os dados abaixo para começar no Ampara.se.
            </p>

            <form action="#" method="POST">

                <div class="form-group">
                    <label for="name">Nome completo</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        placeholder="Digite seu nome completo"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="Digite seu e-mail"
                        required
                    >
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Crie uma senha"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirmar senha</label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            placeholder="Repita a senha"
                            required
                        >
                    </div>
                </div>

                <label style="display:block; color:#334155; font-weight:800; margin-bottom:10px;">
                    Tipo de conta
                </label>

                <div class="account-type">
                    <div class="type-card">
                        <input 
                            type="radio" 
                            id="apoiador" 
                            name="role" 
                            value="apoiador" 
                            checked
                        >
                        <label for="apoiador">
                            <strong>💙 Apoiador</strong>
                            <span>Quero apoiar projetos e criadores.</span>
                        </label>
                    </div>

                    <div class="type-card">
                        <input 
                            type="radio" 
                            id="criador" 
                            name="role" 
                            value="criador"
                        >
                        <label for="criador">
                            <strong>🎨 Criador</strong>
                            <span>Quero publicar projetos e receber apoio.</span>
                        </label>
                    </div>
                </div>

                <label class="terms">
                    <input type="checkbox" required>
                    <span>
                        Aceito os termos de uso e a política de privacidade do Ampara.se.
                    </span>
                </label>

                <button type="submit" class="btn-signup">
                    Criar minha conta
                </button>
            </form>

            <p class="login-text">
                Já tem uma conta?
                <a href="{{ route('login') }}">Entrar</a>
            </p>
        </div>

    </div>
</section>
