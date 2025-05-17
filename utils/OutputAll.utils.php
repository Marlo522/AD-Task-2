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

function AllSeries($series){
    echo '<div class="for-you-grid">';
    foreach ($series as $genre => $shows) {
        foreach ($shows as $show) {
            // Add data-genres attribute for filtering
            echo '<div class="series-card" data-genres="' . htmlspecialchars($genre) . '">';
            renderCard($show['title'], $show['image']);
            echo '</div>';
        }
    }
    echo '</div>';
}
function AllMovies($movies){
    echo '<div class="for-you-grid">';
    foreach ($movies as $movie => $shows) {
        foreach ($shows as $show) {
            // Add data-genres attribute for filtering
            echo '<div class="series-card" data-genres="' . htmlspecialchars($genre) . '">';
            renderCard($show['title'], $show['image']);
            echo '</div>';
        }
    }
    echo '</div>';
}
