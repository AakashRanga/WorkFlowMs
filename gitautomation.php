<?php
  // Secret token to verify that the request is coming from GitHub
  $secret = 'sunshine247111#'; // Make sure this matches the secret you set in GitHub
  $signature = 'sha1=' . hash_hmac('sha1', file_get_contents('php://input'), $secret);

  if (hash_equals($signature, $_SERVER['HTTP_X_HUB_SIGNATURE'])) {
    // Change to the directory of your repo
    chdir('/home/tunetutu/public_html/akwithcode.com/wms');

    // Run the git pull command
    $output = shell_exec('git pull origin main 2>&1');

    // Log the output
    file_put_contents('deploy.log', $output, FILE_APPEND);
  } else {
    // Log unauthorized access attempts
    file_put_contents('deploy.log', 'Unauthorized access attempt.' . PHP_EOL, FILE_APPEND);
  }
?>
