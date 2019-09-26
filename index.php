<?php

?>
<html>
<head>
<title>ARASI</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<style>

.centerTable { margin: 5%; background-color:#E3F2FD; padding:10px; width:300px;}

</style>

<div class="centerTable">

    <form >
    <h4>Nova insignia</h4>

    <h6>Nom:</h6>
        <input type="text" name="nom" placeholder="nom insignia"><br>

        <h6>Imatge:</h6>
        <input type="file" name="imatge" ><br>

        <h6>Limit</h6>
        <input type="number" name="limit" ><br>

        <h6>Descripcio</h6>
        <textarea type="textarea" name="descripcio" placeholder="no home no"></textarea>

        <h6>Actiu</h6>
        <input type="radio" name="actiu" value="si" checked> SI
        <input type="radio" name="actiu" value="no"> NO<br>

        <input type="submit" value="Enviar dades"><br>

    </form>

</div>
</html>