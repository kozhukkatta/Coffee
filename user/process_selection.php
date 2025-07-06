<?php
require('../config/autoload.php');
$dao = new DataAccess();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pid = $_SESSION['selected_pid'] ?? null;
$email = $_SESSION['email'] ?? null;

if (!$pid || !$email) {
    die("Missing product or user data.");
}

// Confirm email is string
if (!is_string($email)) {
    die("Email must be a string, got: " . gettype($email));
}

// Fetch user ID by email
$userRow = $dao->getData("user", ["id"], "email = ?", [$email]);

if (!$userRow || count($userRow) === 0) {
    die("User not found.");
}

$userid = $userRow[0]['id'];

// Handle form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedAids = $_POST['additionals'] ?? ['0']; // Default to 0 if none selected
    $aidString = implode(",", $selectedAids);

    $fields = ['userid', 'pid', 'aid', 'status'];
    $values = [$userid, $pid, $aidString, 1];

    $inserted = $dao->insert("order_additionals", $fields, $values);

    if ($inserted) {
        echo "<h3>Order saved successfully!</h3>";
        echo '<a href="thankyou.php" class="btn btn-success mt-3">Continue</a>';
    } else {
        echo "<h4>Failed to save order.</h4>";
    }
} else {
    echo "<h4>Invalid request method.</h4>";
}
?>
