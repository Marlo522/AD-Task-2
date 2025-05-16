<?php
require_once BASE_PATH . '/components/cards/card.component.php';

function renderForYou($series, $movies) {
    echo '<div class="for-you-grid">';
    foreach ($series as $shows) {
        foreach ($shows as $show) {
            renderCard($show['title'], $show['image']);
        }
    }
    foreach ($movies as $films) {
        foreach ($films as $film) {
            renderCard($film['title'], $film['image']);
        }
    }
    echo '</div>';
}
