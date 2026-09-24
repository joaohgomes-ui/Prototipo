document.addEventListener('DOMContentLoaded', () => {
    // Menu Hambúrguer para Dispositivos Móveis
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    }

    // Scroll Suave para os Links Internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');

            // Ignora se for apenas '#'
            if (targetId === '#') return;

            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                e.preventDefault();

                // Fecha o menu mobile ao clicar em um link
                if (navMenu && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                }

                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});

// Função para tratar clique de contratação e redirecionar para o WhatsApp
function contratarPlano(nomePlano) {
    // ⚠️ ALTERE AQUI: Coloque o número real do WhatsApp com Código do País (55) + DDD + Número
    const numeroWhatsapp = "5500999999999"; 

    // Cria a mensagem personalizada
    const mensagem = encodeURIComponent(`Olá! Tenho interesse em contratar o ${nomePlano}. Como posso prosseguir?`);

    // Redireciona para o WhatsApp numa nova aba
    window.open(`https://wa.me/${numeroWhatsapp}?text=${mensagem}`, '_blank');
}