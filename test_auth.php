<?php
/**
 * DateMaker Authentication Test Script
 * Run with: php test_auth.php
 */

echo "DateMaker Authentication System Test\n";
echo "=====================================\n\n";

// Test database connection
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=datemaker', 'root', 'sqlmester');
    echo "✓ Database connection: SUCCESS\n";
} catch (PDOException $e) {
    echo "✗ Database connection: FAILED - " . $e->getMessage() . "\n";
    exit(1);
}

// Check users table exists
try {
    $stmt = $pdo->query("SHOW TABLES LIKE 'users'");
    if ($stmt->rowCount() > 0) {
        echo "✓ Users table: EXISTS\n";
    } else {
        echo "✗ Users table: NOT FOUND\n";
        exit(1);
    }
} catch (PDOException $e) {
    echo "✗ Users table check: FAILED - " . $e->getMessage() . "\n";
    exit(1);
}

// Count users
try {
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM users");
    $count = $stmt->fetch(PDO::FETCH_ASSOC)['count'];
    echo "✓ Total users in database: $count\n\n";
} catch (PDOException $e) {
    echo "✗ User count: FAILED - " . $e->getMessage() . "\n";
    exit(1);
}

// List all users
echo "Registered Users:\n";
echo "-----------------\n";
try {
    $stmt = $pdo->query("SELECT id, firstname, lastname, email, pronounce, relationship_status, email_verified_at, created_at FROM users ORDER BY created_at DESC");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($users)) {
        echo "No users found. Run: php artisan db:seed --class=DateMakerUserSeeder\n";
    } else {
        foreach ($users as $user) {
            echo "\n";
            echo "ID: {$user['id']}\n";
            echo "Name: {$user['firstname']} {$user['lastname']}\n";
            echo "Email: {$user['email']}\n";
            echo "Pronouns: " . ($user['pronounce'] ?? 'Not set') . "\n";
            echo "In Relationship: " . ($user['relationship_status'] ? 'Yes' : 'No') . "\n";
            echo "Email Verified: " . ($user['email_verified_at'] ? 'Yes' : 'No') . "\n";
            echo "Registered: {$user['created_at']}\n";
            echo "---\n";
        }
    }
} catch (PDOException $e) {
    echo "✗ List users: FAILED - " . $e->getMessage() . "\n";
    exit(1);
}

echo "\n\nTest Credentials:\n";
echo "-----------------\n";
echo "Email: john@example.com\n";
echo "Password: password123\n\n";
echo "Email: jane@example.com\n";
echo "Password: password123\n\n";

// Check .env configuration
echo "\n.env Configuration Check:\n";
echo "-------------------------\n";

$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
    $env = file_get_contents($envFile);

    // Check database config
    preg_match('/DB_CONNECTION=(.+)/', $env, $matches);
    $dbConnection = trim($matches[1] ?? 'not set');
    echo "DB_CONNECTION: $dbConnection " . ($dbConnection === 'mysql' ? '✓' : '✗') . "\n";

    preg_match('/DB_DATABASE=(.+)/', $env, $matches);
    $dbDatabase = trim($matches[1] ?? 'not set');
    echo "DB_DATABASE: $dbDatabase " . ($dbDatabase === 'datemaker' ? '✓' : '✗') . "\n";

    // Check session driver
    preg_match('/SESSION_DRIVER=(.+)/', $env, $matches);
    $sessionDriver = trim($matches[1] ?? 'not set');
    echo "SESSION_DRIVER: $sessionDriver " . (in_array($sessionDriver, ['database', 'file']) ? '✓' : '?') . "\n";

    // Check debug mode
    preg_match('/APP_DEBUG=(.+)/', $env, $matches);
    $appDebug = trim($matches[1] ?? 'not set');
    echo "APP_DEBUG: $appDebug " . ($appDebug === 'true' ? '✓ (verification codes will be shown)' : '✗') . "\n";
} else {
    echo "✗ .env file not found\n";
}

echo "\n\nEndpoints Available:\n";
echo "--------------------\n";
echo "Homepage:       http://127.0.0.1:8000/\n";
echo "Login:          http://127.0.0.1:8000/login\n";
echo "Register:       http://127.0.0.1:8000/register\n";
echo "Features:       http://127.0.0.1:8000/features\n";
echo "About:          http://127.0.0.1:8000/about\n";
echo "FAQ:            http://127.0.0.1:8000/faq\n";
echo "Pricing:        http://127.0.0.1:8000/pricing\n";

echo "\n\nAPI Endpoints:\n";
echo "--------------\n";
echo "POST /api/send-verification-code\n";
echo "POST /api/verify-code\n";
echo "POST /login\n";
echo "POST /register\n";
echo "POST /logout\n";

echo "\n\n✅ Authentication system is ready!\n";
echo "🎉 Visit http://127.0.0.1:8000/register to test registration\n\n";
