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
       $rows = GetData($conn, "brouwer");
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
