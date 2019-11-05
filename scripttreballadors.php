<?php
include ("bbdd.php");

//comprovar que s'ha enviat desde el formulari de inserir
if(isset($_POST["action"])&& $_POST["action"]=="insert"){
  //pujar imatge al servidor
  $target_dir = "uploads/";
  if(is_dir($target_dir)){
    $target_file = $target_dir . basename($_FILES["fitxer"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_FILES["fitxer"]["name"]) && $_FILES["fitxer"]["name"] != '') {

        move_uploaded_file($_FILES["fitxer"]['tmp_name'], $target_file);
        $uploadOk = 1;
       
    }
    else {

      $uploadOk = 0;
    }
  }

if (file_exists($_FILES["fitxer"]["name"])) {
    $xml = simplexml_load_file($_FILES["fitxer"]["name"]);
    foreach ($xml->treballadors->treballador as $treballador) {
      echo $treballador->nom;
      echo $treballador->cognom;
      echo $treballador->data_naixement;
      echo $treballador->antiguitat;
      echo $treballador->codi_rol;
    }

} else {
    exit('ERROR LLEGIR XML');
}




  //inserir la insignia del formulari a bbdd
  //$insert = "INSERT INTO insignies (nom, cognom, edat, antiguitat) VALUES ('".$_POST['nom']."',".$_POST['valor'].",".$_POST['limit'].","."'".$_FILES['fitxer']['name']."')";
  //$resultat = mysqli_query($con, $insert);
  //if(!$resultat) 
  //{ 
  //  echo "<h1>El nom de la insignia ja existeix</h1>"; 
  //}
}
?>

<!--<html>
<head>
  <title>ARASI</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<style>
  table {
    border-collapse: collapse;
    width: 80%;
    align: center;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2}

  th {
    background-color: #4CAF50;
    color: white;
  }
  .centerTable { margin: 20px auto; }

</style>

<body>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php
    include("header.php");
    ?>
    <main class="mdl-layout__content">
      <div class="page-content">
        <div>
          <table class="centerTable" style="overflow-x:auto;">

            <tr>
              <th>Imatge</th>
              <th>nom</th>
              <th>Maxim</th>
              <th>Otorgades</th>
              <th>Valor</th>
            </tr>
            <?php

            /*
            $consulta = "SELECT i.nom as nom, i.limit_insignies, COUNT(ti.id) as otorgades, i.puntuacio, i.imatge
                FROM insignies i 
                LEFT JOIN treballadors_insignies ti on (ti.id_insignia = i.id)
                GROUP by i.id
                ";
                  if ($resultado = mysqli_query($con, $consulta)) {
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                      echo "<tr>";
                      if(!empty($fila["imatge"])){
                        echo "<td>".' <img src = "uploads/'.$fila["imatge"].'" height="25">';
                      }else{
                        echo "<td> </td>";
                      }
                      echo "<td>".$fila["nom"]."</td>";         
                      echo "<td>".$fila["limit_insignies"]."</td>";
                      echo "<td>".$fila["otorgades"]."</td>";
                      echo "<td>".$fila["puntuacio"]."</td>";
                      echo "</tr>";
                    }
                  }else{
                    echo "ERROR CONNCECTION";
                  } 

*/
            ?>
          </table>
        </div>
      </div>
    </main>
  </div>
</body>
</html>-->
