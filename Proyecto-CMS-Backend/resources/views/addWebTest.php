<html>
    <head>
        <title>add usuario</title>
    </head>
    <body>
        <h2>add web test - vista - modelo - controlador</h2>
    
        @foreach ($webs as $web)
        
        <p>{{ $web->url_web }}</p>    
        @endforeach
    </body>
</html>