<?php

$responses = [
    'hi' => 'Hello! How can I help you today?',
    'hello' => 'Hi there! How can I assist you?',
    'services' => 'We offer AI solutions for various industries, such as Healthcare, Retail, and Agriculture.',
    'healthcare' => 'Our AI-powered Healthcare Assistant helps manage patient records and provides virtual assistance.',
    'retail' => 'Our Smart Retail Analytics solution optimizes retail store performance using data analytics.',
    'agriculture' => 'Our IoT-based Smart Farming solution helps monitor and manage farming activities in real-time.',
    'bye' => 'Goodbye! Have a great day!',
    'default' => 'Sorry, I didn’t understand that. Can you try asking something else?'
];


if (isset($_POST['message'])) {
    $userMessage = strtolower(trim($_POST['message']));

   
    if (array_key_exists($userMessage, $responses)) {
        echo $responses[$userMessage];
    } else {
        echo $responses['default'];
    }
} else {
    echo 'Sorry, I couldn’t process your request.';
}
?>