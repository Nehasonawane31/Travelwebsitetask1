<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'db.php';

try {
    $sql = "SELECT * FROM bookings ORDER BY created_at DESC";
    $stmt = $pdo->query($sql);

    echo "<h2>Bookings:</h2>";
    foreach ($stmt as $row) {
        echo "Name: " . $row['name'] . "<br>";
        echo "Destination: " . $row['destination'] . "<br>";
        echo "Travel Date: " . $row['travel_date'] . "<br><br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
