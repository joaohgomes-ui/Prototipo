document.addEventListener('DOMContentLoaded', () => {
    // Menu Hambúrguer para Dispositivos MOveis
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
            e.preventDefault();
            
            // Fecha o menu mobile ao clicar em um link
            if (navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
            }

            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});

// Função para tratar clique de contratação
function contratarPlano(nomePlano) {
    alert(`Você selecionou o ${nomePlano}! Redirecionando para o atendimento...`);
}