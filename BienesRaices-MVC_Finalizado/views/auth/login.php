<main class="contenedor seccion contenido-centrado">

<h1>Iniciar Sesion</h1>

<?php   foreach ($errores as $error):?>
    <div class="alerta error">
        <?php  echo $error; ?>
    </div>

    <?php  endforeach; ?>

<form action="/login" method="POST" class="formulario" novalidate>

<fieldset>
        <legend>Email y Password</legend>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Tu email" id="email" >

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Tu password" id="telefono" >

    </fieldset>

    <input type="submit" value="Iniciar sesion" class="boton boton-verde">

</form>
</main>
