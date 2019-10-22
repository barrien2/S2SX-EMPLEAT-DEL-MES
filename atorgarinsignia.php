<?php
$treballadors =  array(
  array('nom'=>'Xavi','cognnoms'=>'Barriendos', 'edat'=>20, 'antiguitat'=>5),
  array('nom'=>'Pere','cognnoms'=>'Linares', 'edat'=>18, 'antiguitat'=>2),
  array('nom'=>'Hector','cognnoms'=>'Prieto', 'edat'=>20, 'antiguitat'=>5),
  array('nom'=>'Vanessa','cognnoms'=>'Moreno', 'edat'=>null, 'antiguitat'=>null),
  array('nom'=>'Josep','cognnoms'=>'Gutierrez','edat'=>"aixo es fa en", 'antiguitat'=>"2 linies")
);

$insignies =  array(
  array('nom'=>'class maker', 'value'=>'classmaker'),
  array('nom'=>'class mate',  'value'=>'classmate'),
  array('nom'=>'class s2sx',  'value'=>'classs2sx'),
  array('nom'=>'class s1sx',  'value'=>'classs1sx'),
  array('nom'=>'class s2am',  'value'=>'classs2am' )
);
?>
<html>
<head>
  <title>ARASI</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <style>

    .centerTable { margin: 10px; background-color:#E3F2FD; padding:10px; width:300px;}

  </style>
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php
    include("header.php");
    ?>
    <main class="mdl-layout__content">
      <div class="page-content">
        <div class="centerTable">

          <form action="treballadorsinsignies.php" method="post" enctype="multipart/form-data">
            <h4>Otorgar insignia</h4>

            <h6>Insignia:</h6>   
            <select name='insignia'>
              <?php
                foreach ($insignies as $value) {

                  echo "<option value='".$value["value"]."'>".$value["nom"]."</option>";

                }
                
              ?>
              
            </select><br>

            <h6>Treballadors</h6>
            <select name='treballadors[]' multiple>
              <?php
                foreach ($treballadors as $value) {

                  echo "<option value='".$value["nom"]."'>".$value["nom"]."</option>";

                }
                
              ?>
              
            </select><br>

            <h6>Data</h6>
            <input type="date" name="data" value="<?php echo date('Y-m-d');?>"><br>
            <br>
            Visible: 
            <input type="checkbox" name="visible" value="visible">
            <br/>
            <br>
            <input type="submit" value="Enviar dades" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"><br>
          </form>
        </div>
      </div>
    </main>
  </div>
</body>
</html>