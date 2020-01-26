<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Ejemplo POO herencia básica en php y jquery</title>

    <script>
    
    function proceso(valor, boton)
    {
        switch(boton)
        {
            case "A dolar":

                var parametros =
                {
                "valor" : valor,
                "dolar" : boton
                };
                break;
            case "A pesos colombianos":

                var parametros =
                {
                "valor" : valor,
                "cop" : boton
                };
                break;
            
        }

        $.ajax({
            data: parametros,
            url: 'calcular.php',
            type: 'post',
            beforeSend:
            function(){
                $('#resultado').html('Convirtiendo...');
            },
            success:
            function(response){
                $('#resultado').html(response);
            }
        });


    }
    
    </script>

</head>
<body>
    <h1>Dólar a pesos colombianos y Pesos colombianos a dólar</h1>
    <form name="form1" method="POST">
        Valor: <input type="text" name="valor" id="valor">
        <br>
        
        <input type="button" name="dolar" id="dolar" value="A dolar" 
        onclick="proceso($('#valor').val(), $('#dolar').val());">

        <input type="button" name="cop" id="cop" value="A pesos colombianos" 
        onclick="proceso($('#valor').val(), $('#cop').val());">
        <br>
    </form>
    <br>
    <span id="resultado"></span>

    <script src="jquery-3.4.1.js"></script>
</body>
</html>