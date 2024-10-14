<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contactName = htmlspecialchars($_POST['contact-name']);
    $contactEmail = htmlspecialchars($_POST['contact-email']);
    $message = htmlspecialchars($_POST['message']);

    try {
        $sql = "INSERT INTO contacts (contact_name, contact_email, message) 
                VALUES (:contact_name, :contact_email, :message)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':contact_name' => $contactName,
            ':contact_email' => $contactEmail,
            ':message' => $message
        ]);
        echo "Message sent by $contactName!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
