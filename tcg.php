<?php
require 'vendor/autoload.php'; // Ensure the autoloader is included

use Pokemon\Pokemon;

// Set API options and key
Pokemon::Options(['verify' => true]);
Pokemon::ApiKey('c45c3585-37a9-4376-9dde-3b7bb16284c7');

// Search for Growlithe cards
$searchParams = [
    'q' => 'name:Growlithe' // Updated query parameter to match the API format
];

try {
    // Perform the search
    $cards = Pokemon::Card()->where($searchParams)->all();

    // Display images of Growlithe cards
    foreach ($cards as $card) {
        echo '<img src="' . $card->getImages()->small . '" alt="' . $card->getName() . '">';
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
