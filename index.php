<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Style/Style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
<script type="text/javascript">

$(document).ready(function() {
        
        $('#CursoC').on('click', function() {
          
        $("#Contenedor").load('CursoC.php');
        return false;
    });
});

$(document).ready(function() {
        
        $('#CursoJava').on('click', function() {
          
        $("#Contenedor").load('Cursojava.php');
        return false;
    });
});

$(document).ready(function() {
        
        $('#CursoJS').on('click', function() {
          
        $("#Contenedor").load('CursoJS.php');
        return false;
    });
});

$(document).ready(function() {
        
        $('#CursoPhp').on('click', function() {
          
        $("#Contenedor").load('Cursophp.php');
        return false;
    });
});


</script>    

<header>

<div>

<form action="index.php">
<button id="Boton"><img src="/img/Logo.png" alt="No Carga"></button>
</form>


<ul>
    <li>
        <a href="#" id="CursoC">Curso C</a>
        <a href="#" id="CursoJava">Curso Java</a>
        <a href="#" id="CursoPhp">Curso Php</a>
        <a href="#" id="CursoJS">Curso JavaScript</a>
    </li>
</ul>
</div>

</header>

<div id="Contenedor">



</div>

</body>
</html>