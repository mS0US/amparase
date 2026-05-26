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

    .login-page {
        min-height: 100vh;
        background: linear-gradient(135deg, #e0ecff, #f8fbff);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .login-container {
        width: 100%;
        max-width: 1050px;
        background: #ffffff;
        border-radius: 28px;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1fr 1fr;
        box-shadow: 0 25px 60px rgba(15, 23, 42, 0.15);
    }

    .login-banner {
        background: linear-gradient(135deg, #2563eb, #1e40af);
        color: white;
        padding: 60px 45px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .logo {
        font-size: 1.4rem;
        font-weight: 800;
        margin-bottom: 60px;
    }

    .login-banner h1 {
        font-size: 2.5rem;
        line-height: 1.15;
        margin-bottom: 20px;
        font-weight: 800;
    }

    .login-banner p {
        color: #dbeafe;
        line-height: 1.7;
        font-size: 1rem;
        margin-bottom: 30px;
    }

    .banner-card {
        background: rgba(255, 255, 255, 0.14);
        border: 1px solid rgba(255, 255, 255, 0.22);
        border-radius: 18px;
        padding: 18px;
        margin-top: 15px;
    }

    .banner-card strong {
        display: block;
        margin-bottom: 6px;
        font-size: 1rem;
    }

    .banner-card span {
        color: #dbeafe;
        font-size: 0.95rem;
    }

    .login-form-box {
        padding: 60px 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .login-form-box h2 {
        color: #0f172a;
        font-size: 2.2rem;
        margin-bottom: 8px;
        font-weight: 800;
    }

    .login-form-box .subtitle {
        color: #64748b;
        margin-bottom: 35px;
        line-height: 1.6;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        color: #334155;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .form-group input {
        width: 100%;
        height: 52px;
        border: 1px solid #cbd5e1;
        border-radius: 14px;
        padding: 0 16px;
        font-size: 1rem;
        outline: none;
        transition: 0.2s;
        background: #f8fafc;
    }

    .form-group input:focus {
        border-color: #2563eb;
        background: #ffffff;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
    }

    .login-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        font-size: 0.95rem;
    }

    .remember {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #475569;
    }

    .remember input {
        width: 16px;
        height: 16px;
    }

    .forgot {
        color: #2563eb;
        text-decoration: none;
        font-weight: 700;
    }

    .forgot:hover {
        text-decoration: underline;
    }

    .btn-login {
        width: 100%;
        height: 54px;
        border: none;
        border-radius: 999px;
        background: #2563eb;
        color: white;
        font-size: 1rem;
        font-weight: 800;
        cursor: pointer;
        transition: 0.3s;
        box-shadow: 0 12px 25px rgba(37, 99, 235, 0.25);
    }

    .btn-login:hover {
        background: #1d4ed8;
        transform: translateY(-2px);
    }

    .signup-text {
        text-align: center;
        margin-top: 30px;
        color: #64748b;
    }

    .signup-text a {
        color: #2563eb;
        font-weight: 800;
        text-decoration: none;
    }

    .signup-text a:hover {
        text-decoration: underline;
    }

    @media (max-width: 850px) {
        .login-container {
            grid-template-columns: 1fr;
            max-width: 520px;
        }

        .login-banner {
            padding: 40px 30px;
            text-align: center;
        }

        .logo {
            margin-bottom: 25px;
        }

        .login-banner h1 {
            font-size: 2rem;
        }

        .login-form-box {
            padding: 40px 30px;
        }
    }

    @media (max-width: 480px) {
        .login-page {
            padding: 20px 12px;
        }

        .login-container {
            border-radius: 20px;
        }

        .login-options {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }
    }
</style>

<section class="login-page">
    <div class="login-container">

        <div class="login-banner">
            <div class="logo">Ampara.se</div>

            <h1>Entre e continue apoiando grandes ideias</h1>

            <p>
                Acesse sua conta para acompanhar projetos, apoiar criadores
                independentes e gerenciar suas campanhas.
            </p>

            <div class="banner-card">
                <strong>💙 Apoie criadores</strong>
                <span>Contribua com artistas, educadores, podcasters e projetos independentes.</span>
            </div>

            <div class="banner-card">
                <strong>🚀 Gerencie campanhas</strong>
                <span>Crie projetos, acompanhe metas e receba apoios com facilidade.</span>
            </div>
        </div>

        <div class="login-form-box">
            <h2>Login</h2>

            <p class="subtitle">
                Informe seus dados para acessar sua conta no Ampara.se.
            </p>

            <form action="#" method="POST">

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

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Digite sua senha"
                        required
                    >
                </div>

                <div class="login-options">
                    <label class="remember">
                        <input type="checkbox" name="remember">
                        Lembrar-me
                    </label>

                    <a href="#" class="forgot">Esqueci a senha</a>
                </div>

                <button type="submit" class="btn-login">
                    Entrar na conta
                </button>
            </form>

            <p class="signup-text">
                Ainda não tem conta?
                <a href="{{ route('signup') }}">Cadastre-se</a>
            </p>
        </div>

    </div>
</section>
