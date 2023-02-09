<link rel="stylesheet" href="style.css">
<?php

$a = array("Yasin", "Mo", "Ali" );
echo '<table border="1" width="200">';
for ($i=0; $i < count($a); $i++) { 
  echo "<tr><td>{$a[$i]}</td><td>Rotterdam</td></tr>";
}
echo "</table>";
echo "<br>";
$a = array("Fenerbahce", "Feyenoord", "Real Madrid" );
echo '<table border="1" width="200">';
for ($i=0; $i < count($a); $i++) { 
  echo "<tr><td>{$a[$i]}</td><td>" . ($i + 1) . "</td></tr>";
}
echo "</table>";



echo date("") . "<br>";
echo date("l jS \of F Y h:i:s A") . "<br>";
echo "<p>hello world</p> <br>";
$username = $_POST['username'];
$password = $_POST['password'];

echo '<table border="1" width="200">';
foreach ($_POST as $key => $value) {
  echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";
?>