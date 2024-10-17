<?php
header('Content-Type: application/json');

$host = 'localhost';
$db   = 'dryportsdata';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Start transaction
    $pdo->beginTransaction();

    // Insert or update trip information
    $stmt = $pdo->prepare("INSERT INTO trips (com_name, trip_no, trip_dest, trip_date) VALUES (?, ?, ?, ?) ON DUPLICATE KEY UPDATE com_name = VALUES(com_name), trip_dest = VALUES(trip_dest), trip_date = VALUES(trip_date)");
    $stmt->execute([$_POST['com_name'], $_POST['trip_no'], $_POST['trip_dest'], $_POST['trip_date']]);

    // Insert passenger information
    $stmt = $pdo->prepare("INSERT INTO manifest (trip_no, Pass_name, Pass_ID, Pass_seat) VALUES (?, ?, ?, ?)");
    
    foreach ($_POST['Pass_name'] as $index => $name) {
        $stmt->execute([
            $_POST['trip_no'],
            $name,
            $_POST['Pass_ID'][$index],
            $_POST['Pass_seat'][$index]
        ]);
    }

    // Commit transaction
    $pdo->commit();

    echo json_encode(['success' => true]);
} catch (\PDOException $e) {
    // Rollback transaction on error
    $pdo->rollBack();
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}