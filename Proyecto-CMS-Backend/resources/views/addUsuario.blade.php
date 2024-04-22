<html>
    <head>
        <title>add usuario</title>
    </head>
    <body>
        <h2>add web test - vista - modelo - controlador</h2>
        <h3>registration form</h3>
        <form action="/usuario" method="POST">
            @csrf
        <!--  <input type="text" name="id_usuario" placeholder="ID usuario"><br>   -->

            <input type="text" name="username" placeholder="Nombre de usuario"><br>
            <input type="email" name="email" placeholder="Correo electrónico"><br>
            <input type="password" name="password" placeholder="Contraseña"><br>
    <!--        <input type="password" name="r_password" placeholder="Repetir Contraseña"><br> -->
    <!--    <input type="text" name="token" placeholder="Token"><br> -->

            <button type="submit">Registrar usuario</button>
        </form>
        

        <hr>
        
    </body>
</html>


