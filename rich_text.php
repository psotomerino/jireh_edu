<?php 
    //require_once 'templates/header.php';

?>


<!--<input type="text" id="RichText">
<script>
    $(document).ready(function(){
        
       $('#RichText').richText(); 
    });
</script>-->
<!DOCTYPE html>

<html>

<head> <title>Curso JavaScript aprenderaprogramar.com</title>

<meta charset="utf-8">

<style type="text/css">

body {font-family: sans-serif; text-align:center; }

div {width: 600px; background-color:yellow; overflow:hidden; margin: 5px auto;}

h2 {width: 80%; background-color:#DEB887; cursor:pointer; margin: 10px auto;  }

</style>

</head>

<body>

<div>

<h2 onclick="alert(this.nodeName)">Haz click aquí para ver el nodeName de this</h2>

<h2 onclick="alert(this.nodeName)">Haz click <span style="color:blue;">aquí para ver el nodeName de this</span></h2>

<h2>Haz click <span onclick="alert(this.nodeName)" style="color:red;">aquí para ver el nodeName de this</span></h2>

<h2 onclick="alert(this.firstChild.nodeName)">Haz click aquí para ver el nodeName del hijo de h2</h2>

<h2 onclick="this.firstChild.nodeValue='Aaaaaaah!'">Haz click aquí para modificar el texto en el hijo del nodo h2 usando NodeValue</h2>

<h2 onclick="this.textContent='Eeeeeeeh!'">Haz click aquí para modificar el texto en hijo derivado del nodo h2 usando textContent</h2>

<h2 onclick="this.innerHTML='Siiiiiih!'">Haz click aquí para modificar el texto con innerHTML del nodo h2</h2>

<h2 onclick="alert('Contenido innerHTML actual es: '+this.innerHTML);

 this.innerHTML='<div style=\' width:50%; border-style:solid; background-color: #FF7F50;  \'>Ahamham!</div>'">

Haz click aquí para modificar el código con innerHTML del nodo h2</h2>

<h2 onclick="this.textContent='Uuuuuuh!">Haz click <span style="color:blue;">pero no existe un textContent modificable</span></h2>

<h2 onclick="alert('Obtenemos: '+this.textContent)">Haz click <span style="color:blue;">para ver el textContent</span> y verás</h2>

<h2 onclick="this.firstChild.innerHTML='No podemos'">Si intentamos modificar un nodo texto con innerHTML...</h2>

</div>

</body>

</html>