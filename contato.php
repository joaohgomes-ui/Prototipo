<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - ART BarberShop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<style>
/* Seção Contato */
.contato-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 40px;
    margin-top: 30px;
}

.contato-info h3, 
.contato-form-box h3 {
    color: #ff6600;
    font-size: 20px;
    margin-bottom: 15px;
    letter-spacing: 1px;
}

.subtext {
    color: #aaaaaa;
    font-size: 14px;
    margin-bottom: 25px;
}

.info-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 20px;
}

.info-item .icon {
    color: #ff6600;
    font-size: 22px;
    margin-top: 3px;
}

.info-item strong {
    display: block;
    color: #ffffff;
    font-size: 14px;
}

.info-item p, 
.info-item a {
    color: #aaaaaa;
    font-size: 13px;
    text-decoration: none;
}

.info-item a:hover {
    color: #ff6600;
}

.social-links {
    display: flex;
    gap: 15px;
    margin-top: 25px;
}

.social-links a {
    width: 40px;
    height: 40px;
    background-color: #141414;
    border: 1px solid #ff6600;
    color: #ff6600;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 18px;
    transition: 0.3s;
}

.social-links a:hover {
    background-color: #ff6600;
    color: #ffffff;
}

/* Formulário de Contato */
.contato-form-box {
    background-color: #141414;
    padding: 30px;
    border-radius: 8px;
    border: 1px solid #222;
}

.form-group {
    margin-bottom: 15px;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 12px;
    background-color: #0e0e0e;
    border: 1px solid #333;
    border-radius: 6px;
    color: #ffffff;
    font-size: 14px;
    outline: none;
    transition: border-color 0.3s;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #ff6600;
}

.btn-enviar {
    width: 100%;
    background-color: #ff6600;
    color: #ffffff;
    border: none;
    padding: 12px;
    font-weight: bold;
    font-size: 15px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-enviar:hover {
    background-color: #e05500;
}

</style>
<body>

    <!-- Header / Navegação -->
    <header class="header">
        <div class="nav-container">
            <nav class="nav-menu">
                <!-- Reparou nos links? Agora apontam de volta para o index.php -->
                <a href="index.php#quem-somos">Quem somos</a>
                <a href="index.php#planos">Planos</a>
                <a href="servicos.php">Serviços</a>
                <a href="porque-assinar.php">Porque assinar?</a>
                <a href="contato.php">Contato</a>
            </nav>
        </div>
    </header>

    <!-- Espaçamento superior para não ficar tapado pelo Header fixo -->
    <div style="margin-top: 100px;"></div>

    <!-- Seção Contato -->
    <section id="contato" class="section contato">
        <div class="container">
            <h2 class="section-title">
                <span class="thin">ENTRE EM</span><br>
                <span class="highlight">CONTATO</span>
            </h2>

            <div class="contato-grid">
                <!-- Informações de Contato -->
                <div class="contato-info">
                    <h3>FALE CONOSCO</h3>
                    <p class="subtext">Tire suas dúvidas, agende uma visita ou saiba mais sobre nossos planos por assinatura.</p>

                    <div class="info-item">
                        <i class="fas fa-map-marker-alt icon"></i>
                        <div>
                            <strong>Endereço</strong>
                            <p>Rua Exemplo, 123 - Centro, Sua Cidade - UF</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fab fa-whatsapp icon"></i>
                        <div>
                            <strong>WhatsApp / Telefone</strong>
                            <p><a href="https://wa.me/5500999999999" target="_blank">(00) 99999-9999</a></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="far fa-clock icon"></i>
                        <div>
                            <strong>Horário de Funcionamento</strong>
                            <p>Segunda a Sexta: 09h às 20h<br>Sábado: 08h às 18h</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://wa.me/5500999999999" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Formulário de Mensagem -->
                <div class="contato-form-box">
                    <h3>ENVIE UMA MENSAGEM</h3>
                    <form action="processa_contato.php" method="POST" class="contato-form">
                        <div class="form-group">
                            <input type="text" name="nome" placeholder="Seu Nome Completo" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="telefone" placeholder="WhatsApp / Telefone" required>
                        </div>
                        <div class="form-group">
                            <select name="assunto" required>
                                <option value="" disabled selected>Assunto</option>
                                <option value="Agendamento">Desejo Agendar um Horário</option>
                                <option value="Planos">Dúvidas sobre Planos</option>
                                <option value="Outros">Outros Assuntos</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="mensagem" rows="4" placeholder="Sua Mensagem..." required></textarea>
                        </div>
                        <button type="submit" class="btn-enviar">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>