<?php

function get_setting($key, $pdo) {
    $stmt = $pdo->prepare("SELECT value FROM settings WHERE `key` = :key");
    $stmt->bindParam(':key', $key);
    $stmt->execute();
    return $stmt->fetchColumn();
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function cleanInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

function redirect($url) {
    header("Location: $url");
    exit();
}

function getPageContent($page) {
    // Assuming pages are stored in a directory called 'pages'
    $file = __DIR__ . "/pages/{$page}.php";
    if (file_exists($file)) {
        include $file;
    } else {
        return "404 Page Not Found";
    }
}

function getDashboardStats($pdo) {
    // Example query: get user counts, etc.
    $stmt = $pdo->query("SELECT COUNT(*) AS user_count FROM users");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getRecentContacts($pdo, $limit = 5) {
    $stmt = $pdo->prepare("SELECT * FROM contacts ORDER BY created_at DESC LIMIT :limit");
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verifyCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

?>