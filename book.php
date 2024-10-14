<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $destination = htmlspecialchars($_POST['destination']);
    $date = htmlspecialchars($_POST['date']);

    try {
        $sql = "INSERT INTO bookings (name, email, destination, travel_date) 
                VALUES (:name, :email, :destination, :travel_date)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':destination' => $destination,
            ':travel_date' => $date
        ]);
        echo "Booking confirmed for $name!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
