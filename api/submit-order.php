<?php
/**
 * Makky Services - Order Submission & Inquiries API
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true);

if (!$data && !empty($_POST)) {
    $data = $_POST;
}

if (!$data) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid or empty payload.']);
    exit;
}

$orderId = 'MS-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -4));
$customerName = trim($data['customer_name'] ?? 'Anonymous');
$customerPhone = trim($data['customer_phone'] ?? '');
$notes = trim($data['notes'] ?? '');
$items = is_array($data['items'] ?? null) ? $data['items'] : [];
$totalAmount = floatval($data['total_amount'] ?? 0);

$orderRecord = [
    'order_id' => $orderId,
    'created_at' => date('Y-m-d H:i:s'),
    'customer_name' => $customerName,
    'customer_phone' => $customerPhone,
    'notes' => $notes,
    'items' => $items,
    'total_amount' => $totalAmount,
    'status' => 'Pending Verification'
];

// Save to local JSON orders store
$dataFile = __DIR__ . '/../orders.json';
$existingOrders = [];

if (file_exists($dataFile)) {
    $content = file_get_contents($dataFile);
    $existingOrders = json_decode($content, true) ?: [];
}

$existingOrders[] = $orderRecord;
file_put_contents($dataFile, json_encode($existingOrders, JSON_PRETTY_PRINT));

echo json_encode([
    'status' => 'success',
    'message' => 'Order submitted successfully.',
    'order_id' => $orderId,
    'total' => $totalAmount
]);
