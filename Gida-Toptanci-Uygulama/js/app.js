const form = document.querySelector('form');
const usernameInput = document.querySelector('#username');
const passwordInput = document.querySelector('#password');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    const username = usernameInput.value.trim();
    const password = passwordInput.value.trim();
    if (username === 'admin' && password === '1234') {
        window.location.href = 'dashboard.html';
    } else {
        alert('Kullanıcı adı veya şifre yanlış. Lütfen tekrar deneyin.');
    }
});

