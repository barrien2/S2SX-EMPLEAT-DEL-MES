<?php
$treballadors =  array(
  array('nom'=>'Xavi','cognnoms'=>'Barriendos', 'edat'=>20, 'antiguitat'=>5),
  array('nom'=>'Pere','cognnoms'=>'Linares', 'edat'=>18, 'antiguitat'=>2),
  array('nom'=>'Hector','cognnoms'=>'Prieto', 'edat'=>20, 'antiguitat'=>5),
  array('nom'=>'Vanessa','cognnoms'=>'Moreno', 'edat'=>null, 'antiguitat'=>null),
  array('nom'=>'Josep','cognnoms'=>'Gutierrez','edat'=>"aixo es fa en", 'antiguitat'=>"2 linies")
  );
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

<div>
  <table class="centerTable" style="overflow-x:auto;">
      <tr>
        <th>nom</th>
        <th>cognoms</th>
        <th>edat</th>
        <th>antiguitat</th>
      </tr>
      <?php
        
        foreach ($treballadors as $value) {
          echo "<tr>";
          echo "<td>".$value["nom"]."</td>";
          echo "<td>".$value['cognnoms']."</td>";
          echo "<td>".$value['edat']."</td>";
          echo "<td>".$value['antiguitat']."</td>";
          echo "</tr>";
        }
        
      ?>
  </table>
</div>
</html>