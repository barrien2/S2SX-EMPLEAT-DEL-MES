<?php

$target_dir = "uploads/";
if(is_dir($target_dir)){
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
  if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != '') {

    $check = getimagesize($_FILES["image"]["tmp_name"]);

    if($check !== false) {
      move_uploaded_file($_FILES["image"]['tmp_name'], $target_file);
      $uploadOk = 1;
    } 
  }
  else {

    $uploadOk = 0;
  }
}
?>

<html>
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
              <th>nom</th>
              <th>valor</th>
              <th>imatge</th>
              <th>data limit</th>
              <th>limit</th>
              <th>descripcio</th>
              <th>actiu</th>
            </tr>
            <?php
            include("bbdd.php");
            $resultat = mysqli_query($con, "INSERT INTO insignies ( nom, puntuacio) VALUES ('".$_POST['nom']."',".$_POST['datalimit'].")");

            if(!$resultat) 
            { echo "<h1>No anem bé. Error de BBDD: </h1>". mysqli_error($con); }

            echo "<tr>";
            echo "<td>"."</td>";
            echo "<td>"."</td>";
            if($uploadOk == 1){
              echo "<td>".' <img src = "uploads/'.$_FILES["image"]["name"].'" height="150">';
            }else{
              echo "<td> </td>";
            }
            echo "<td>".$_POST['datalimit']."</td>";
            echo "<td>".$_POST['limit']."</td>";
            echo "<td>".$_POST['descripcio']."</td>";
            echo "<td>".$_POST['actiu']."</td>";
            echo "</tr>";


            ?>
          </table>
        </div>
      </div>
    </main>
  </div>
</body>
</html>