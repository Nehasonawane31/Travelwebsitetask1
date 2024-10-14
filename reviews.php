<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reviewName = htmlspecialchars($_POST['review-name']);
    $reviewText = htmlspecialchars($_POST['review-text']);

    try {
        $sql = "INSERT INTO reviews (name, review_text) 
                VALUES (:name, :review_text)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $reviewName,
            ':review_text' => $reviewText
        ]);
        echo "Review submitted by $reviewName!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
