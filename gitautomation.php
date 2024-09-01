<?php
$secret = 'sunshine247111#'; // Your secret key

// Get the signature from the request headers
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'] ?? '';

// Create the hash using the secret key and the payload
$payload = file_get_contents('php://input');
$expectedSignature = 'sha1=' . hash_hmac('sha1', $payload, $secret);

// Compare the signatures
if (hash_equals($expectedSignature, $signature)) {
    // Hosting service Path folder
    chdir('/home/tunetutu/public_html/akwithcode.com/wms');
    
    // Run git pull to update the repository
    $output = shell_exec('git pull origin main 2>&1');
    
    // Log the output
    file_put_contents('deploy.log', $output, FILE_APPEND);
} else {
    // Log unauthorized access attempts
    file_put_contents('deploy.log', 'Unauthorized access attempt.' . PHP_EOL, FILE_APPEND);
}
?>
