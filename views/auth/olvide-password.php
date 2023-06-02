<h1 class="nombre-pagina">Olvido Password</h1>
<p class="descripcion-pagina"> Reestablece tu password con tu email </p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>


<form class="formulario" method="POST" action="/olvide">

    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email" >
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Iniciar Sesion </a>
    <a href="/crear-cuenta">¿No tienes cuenta? Crear cuenta</a>
</div>