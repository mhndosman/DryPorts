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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $com_name = $_POST['com_name'] ?? '';
        $trip_no = $_POST['trip_no'] ?? '';
        $trip_dest = $_POST['trip_dest'] ?? '';
        $trip_date = $_POST['trip_date'] ?? '';
        $trip_allow = isset($_POST['Trip_allow']) ? 1 : 0;

        $stmt = $pdo->prepare("UPDATE trips SET com_name = ?, trip_dest = ?, trip_date = ?, Trip_allow = ? WHERE trip_no = ?");
        $result = $stmt->execute([$com_name, $trip_dest, $trip_date, $trip_allow, $trip_no]);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Database update failed']);
        }
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'getDecisions') {
        $trip_no = $_GET['trip_no'] ?? '';

        $stmt = $pdo->prepare("
            SELECT t.com_name, t.trip_dest, t.trip_date, t.Trip_allow,
                   tr.Trip_allow as traffic_allow,
                   s.Trip_allow as safety_allow,
                   c.Trip_allow as custom_allow
            FROM trips t
            LEFT JOIN traffic tr ON t.trip_no = tr.trip_no
            LEFT JOIN Safety s ON t.trip_no = s.trip_no
            LEFT JOIN custom c ON t.trip_no = c.trip_no
            WHERE t.trip_no = ?
        ");
        $stmt->execute([$trip_no]);
        $result = $stmt->fetch();

        if ($result) {
            echo json_encode([
                'success' => true,
                'com_name' => $result['com_name'],
                'trip_dest' => $result['trip_dest'],
                'trip_date' => $result['trip_date'],
                'Trip_allow' => (bool)$result['Trip_allow'],
                'traffic' => (bool)$result['traffic_allow'],
                'safety' => (bool)$result['safety_allow'],
                'custom' => (bool)$result['custom_allow']
            ]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Trip not found']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request method or action']);
    }
} catch (\PDOException $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}