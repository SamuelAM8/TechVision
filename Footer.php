<!-- footer.php -->
<footer>
    <p>&copy; 2024 TechVista - Samuel Arango</p>
</footer>

<script>
    const loginForm = document.getElementById('login-form');
    const closeBtn = document.getElementById('btn-cerrar');
    const btnLogin = document.getElementById('btn-login'); 

    btnLogin.addEventListener('click', (e) => {
        e.preventDefault();
        loginForm.classList.add('show');
    });

    closeBtn.addEventListener('click', () => {
        loginForm.classList.remove('show');
    });
</script>
