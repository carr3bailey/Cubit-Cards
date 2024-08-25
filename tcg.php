use Pokemon\Pokemon;

composer require pokemon-tcg/pokemon-tcg-sdk-php
Pokemon::Options(['verify' => true]);
Pokemon::ApiKey('c45c3585-37a9-4376-9dde-3b7bb16284c7');
// Search for Growlithe cards
$searchParams = [
    'name' => 'Growlithe'
];
$cards = Pokemon::Card()->where($searchParams)->all();

// Display images of Growlithe cards
foreach ($cards as $card) {
    echo '<img src="' . $card->getImageUrl() . '" alt="' . $card->getName() . '">';
}