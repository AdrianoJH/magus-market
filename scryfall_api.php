<?php
$url = 'https://api.scryfall.com/cards/search?include_extras=true&include_variations=true&order=set&q=e%3Amat&unique=prints';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);

if (isset($result['data'])) {
    echo '<div id="card-grid" class="card-grid">';
    foreach ($result['data'] as $card) {
        echo '<div class="card">';
        echo '<img src="' . $card['image_uris']['normal'] . '" alt="' . $card['name'] . '" class="img-card">';
        echo '<h3 class="name-card">' . $card['name'] . '</h3>';
        echo '<p class="price">US$ ' . $card['prices']['usd'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo 'Nenhum card encontrado.';
}
