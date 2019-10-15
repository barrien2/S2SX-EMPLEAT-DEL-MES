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
              <th>valor</th>
              <th>imatge</th>
              <th>data limit</th>
              <th>limit</th>
              <th>descripcio</th>
              <th>actiu</th>
            </tr>
            <?php
            
            echo "<tr>";
            echo "<td>"."</td>";
            echo "<td>"."</td>";
            echo "<td>".$_POST['insignia']."</td>";
            echo "<td>".$_POST['Alumnes']."</td>";
            echo "<td>".$_POST['data']."</td>";
            echo "<td>".$_POST['visible']."</td>";
            echo "</tr>";
           ?>
          </table>
</div>
</html>