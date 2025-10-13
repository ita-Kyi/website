<?php

$pdo = new PDO('mysql:host=127.0.0.1;dbname=datemaker', 'root', 'sqlmester');
$stmt = $pdo->query('SELECT * FROM users');
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "DateMaker Users:\n";
echo "================\n\n";

foreach ($users as $user) {
    echo "ID: " . $user['id'] . "\n";
    echo "Name: " . $user['firstname'] . " " . $user['lastname'] . "\n";
    echo "Email: " . $user['email'] . "\n";
    echo "Bio: " . ($user['bio'] ?? 'N/A') . "\n";
    echo "Pronouns: " . ($user['pronounce'] ?? 'N/A') . "\n";
    echo "In Relationship: " . ($user['relationship_status'] ? 'Yes' : 'No') . "\n";
    echo "Created: " . $user['created_at'] . "\n";
    echo "---\n\n";
}

echo "Total users: " . count($users) . "\n";
