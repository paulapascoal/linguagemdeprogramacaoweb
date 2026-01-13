const botaoTema = document.getElementById('btn-tema');
const temaSalvo = localStorage.getItem('tema');

if (temaSalvo === 'claro') {
    document.body.classList.add('tema-claro');
    botaoTema.textContent = '🌙 Modo escuro';
} else {
    botaoTema.textContent = '☀️ Modo claro';
}

botaoTema.addEventListener('click', () => {
    document.body.classList.toggle('tema-claro');

    if (document.body.classList.contains('tema-claro')) {
        localStorage.setItem('tema', 'claro');
        botaoTema.textContent = '🌙 Modo escuro';
    } else {
        localStorage.setItem('tema', 'escuro');
        botaoTema.textContent = '☀️ Modo claro';
    }
});
