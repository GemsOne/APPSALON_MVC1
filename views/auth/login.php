<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina"> Welcome</p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>


<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Direccion de Email" name="email">
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="password" name="password">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesion">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿No tienes cuenta? Crear cuenta </a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>