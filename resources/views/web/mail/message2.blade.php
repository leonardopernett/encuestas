
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
   h1,p{
       color:#000;
       
   }
   small{
       color:#000;
   }
 
</style>
<body>
    <div class="container">
        <div class="card">
            <img src="https://www.grupokonecta.com/wp-content/uploads/2016/11/logo-konecta-azul-1.svg" alt="">
            <p><strong>Tu solicitud fue registrada exitosamente, pronto te estaremos dando respuesta.
                Tu número de caso es: {{ $sms->numero_caso }}<</strong></p>
            <small>Por favor, NO responda a este mensaje, es un envío automático.</small>
        </div>
    </div>
</body>
</html>