<?php
function OpenDb() {
  try {
      $conn = new PDO("mysql:host=localhost;dbname=bier", "root", "");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;

  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
}











function GetData($table){
    $conn = OpenDb();
    $query = $conn->prepare("SELECT * FROM $table");
    $query->execute();
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
    return $result;}
    
    
function OvzBieren() {
       
        try {
           $result = GetData( "bier");
           PrintTable($result);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    
        $conn = null;
    }
function PrintTable($result) {
        echo "<table border='1px'>";
        foreach ($result as $row) {
            echo "<tr>";
            foreach($row as $value){
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";}











function OvzBrouwers() {
            $conn = OpenDb();
            echo "<table border='1'>";
            echo "<tr><th>brouwcode/id</th><th>naam</th><th>land</th></tr>";
          
            try {
                $rows = GetData1($conn, "brouwer");
                foreach ($rows as $row) {
                    echo "<tr>";
                    echo "<td>" . $row["brouwcode"] . "</td>";
                    echo "<td>" . $row["naam"] . "</td>";
                    echo "<td>" . $row["land"] . "</td>";
                    echo "</tr>";
                }
          
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            echo "</table>";
            $conn = null;
        }      
  
function GetData1($conn, $table){
    $query = $conn->prepare("SELECT * FROM $table");
    $query->execute();
    $rows = $query->fetchALL(PDO::FETCH_ASSOC);
    return $rows;
}











function GetData2($table){
    $conn = OpenDb();
    $query = $conn->prepare("SELECT * FROM $table");
    $query->execute();
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
    return $result;}
    
    
function OvzBieren1() {
       
        try {
           $result = GetData2( "bier");
           PrintTable1($result);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    
        $conn = null;
    }
    function PrintTable1($result) {
        echo "<a href=''>Toevoegen nieuwe bier.</a>";
        echo "<table border='1px'>";
        echo "<thead><tr><th>Biercode</th><th>Naam</th><th>Soort</th><th>Stijl</th><th>Alcohol</th><th>Brouwcode</th><th>Wijzigen</th><th>Verwijderen</th></tr></thead>";
        echo "<tbody>";
        foreach ($result as $row) {
            echo "<tr>";
            foreach($row as $key => $value){
                echo "<td>$value</td>";
            }
            echo "<td>";
            echo "<form method='POST' action=''>";
            echo "<input type='submit' name='Wijzigen' value='Wijzigen'>";
            echo "</form>";
            echo "</td>";
            echo "<td>";
            echo "<form method='POST' action=''>";
            echo "<input type='submit' name='Verwijderen' value='Verwijderen'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    
    


?>