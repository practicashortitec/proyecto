<html>
    <head>
        <title>add url website</title>
    </head>
    <body>
        <h2>add url website - vista - modelo - controlador</h2>
        <h3>add a new website</h3>
        <form action="/urls_websites" method="POST">
            @csrf
            <select name="id_usuario" id="id_usuario">
                <option value="id_usuario">yep</option>
            </select><br>
            <input type="text" name="url_web" placeholder="URL del sitio"><br>
            <input type="email" name="web_name" placeholder="Nombre de la web"><br>


            <button type="submit">Añadir sitio web</button>
        </form>
        

        <hr>
        
    </body>
</html>
