<!-- header.php -->
<header>
    <a href="#" id="logo">
        <img src="./Imagenes/ppp.png" alt="Logo" class="logo">
    </a>        
    <input type="checkbox" id="check" class="menu-checkbox">
    <label for="check" class="mostrar-menu">&#8801</label>

    <nav class="menu">
        <a href="Registro.php" class="btn-btn-danger">Registro</a>
        <a href="inicioSesion.php" class="btn-btn-danger">Inicio Sesion</a>
        <label for="check" class="esconder-menu">&#215</label>
    </nav>
</header>

<!-- Formulario de Inicio de Sesión -->
<div id="login-form" class="login-container">
    <h3>Inicio de Sesión</h3>
    <form action="#">
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit" id="btn-ingresar">Ingresar</button>
        <button type="button" id="btn-cerrar">Cerrar</button>
    </form>
</div>
